<?php

namespace App\Http\Controllers\Authenticated\Trainee;

use App\Events\BELibrary;
use App\Http\Controllers\Controller;

use App\Http\Requests\Trainee\Library\BookRequest;
use App\Http\Requests\Trainee\Library\CancelBookRequest;
use App\Http\Requests\Trainee\Library\ExtendingRequest;
use Illuminate\Support\Facades\Cache;
use App\Mail\BookReservationStatus;
use App\Utils\{AuditHelper, GenerateTrace, Notifications};
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use App\Http\Resources\{BookResource, BookRequestResource, PdfCopyResource, BookExtensionResource, AvailableBooksResource};
use App\Jobs\SendingEmail;
use App\Models\{User, Book, BookCopy, BookCart, BookReservation, BookRes, EnrolledCourse, BookTrainingRelated, ExtensionRequest, BookExtensionRequest};
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use function PHPUnit\Framework\isEmpty;

class TraineeLibrary extends Controller
{
    protected $ttl = 300;

    /** GET ALL AVAILABLE BOOKS */
    public function view_books(Request $request)
    {
        try {
            $user = User::find($request->user()->id);
            $userId = $user?->id;

            if(!$user) {
                throw new HttpResponseException(
                    response()->json(["message" => "Unauthorized Access!"], 500)
                );
            }

            $record = EnrolledCourse::where('user_id', $userId)
            ->whereNotIn('enrolled_course_status', ['CANCELLED', 'DECLINED', 'COMPLETED', 'CSFB', 'IR'])
            ->get()
            ->select('training_id');

            $books = Book::with([
                'catalog.genre',
                'hasData.bookRes' => function ($query) use ($userId) {
                    $query->where(['user_id' => $userId, 'status' => 'FOR CSM']);
                },
                "related" => function($q) use ($record) {
                    $q->whereIn('training_id', $record);
                },
                "related.training.module"
            ])
            ->withCount([
                'copies' => function ($q) {
                    // added
                    $q->where('status', 'AVAILABLE');
                },
                'carts' => function ($q) use ($user) {
                    $q->where('user_id', $user->id);
                },
                'hasData' => function ($q) use ($user) {
                    $q->where('status', 'RECEIVED')->whereRelation('bookRes', 'user_id', '=', $user->id);
                },
                'related as enrolled_trainings_count' => function ($query) use ($record) {
                    $query->whereIn('training_id', $record);
                }
            ])
            ->where('status', 'ACTIVE')
            ->orderByDesc('enrolled_trainings_count')
            ->orderBy('id');;

            $b = $books->get();

        return BookResource::collection($b);
        } catch (\Exception $e) {
            // \Log::channel("errormonitor")->error("error view_books", [$e->getMessage()]);
            return response()->json(["Something went wrong, Please try again!"], 500);
        }
    }

    /** GET TRAINEE RECORDS */
    public function get_book_records(Request $request) {
        try {
            $status = $request->type;
            $user_id = $request->user()->id;
            $trac = $request->trace_number;
            $cache_key = "user_id:$user_id:status:$status";

            $records = Cache::remember($cache_key, $this->ttl, function () use ($user_id, $status, $trac) {
                $record = EnrolledCourse::where('user_id', $user_id)
                    ->whereNotIn('enrolled_course_status', ['CANCELLED', 'DECLINED', 'COMPLETED', 'CSFB', 'IR'])
                    ->get()
                    ->select('training_id');

                $book_record = BookRes::forUser($user_id)
                    ->with([
                        "borrowedBooks.books.catalog.genre",
                        "borrowedBooks.books.related" => function($q) use ($record) {
                        $q->whereIn('training_id', $record);
                    },
                        "csm"
                    ])
                    ->latest("created_at");

                    if ($status) $book_record->where('status',$status);
                    if ($trac->trace_number) $book_record->where(["trace_number" => $trac, "user_id" => $user_id]);

                    return $book_record->get();
            });

            return BookRequestResource::collection($records);

        } catch(\Exception $e) {
            // \Log::channel("errormonitor")->error("error get_book_records", [$e->getMessage()]);
            \Log::error("day", [$e]);
            return response()->json([
                "message" => "Something went wrong, Please try again!"
            ], 500);
        }
    }

    /** VIEW EXTENSION REQUESTS */
    public function view_extend_request(Request $request)
    {
        try {
            \Log::info("data view_extend_request", $request->all());
            $record = ExtensionRequest::with([
                "extendingBooks.bookReservation.books.catalog.genre",
                "extendingBooks.bookReservation.book",
                "library",
            ])
            ->whereRelation("library", "trace_number", "=", $request->trace_number)
            ->where("user_id", $request->user()->id)
            ->get();

            return BookExtensionResource::collection($record);
        }
        catch (\Exception $e) {
            \Log::error("error view_extend_request", [$e]);
            return response()->json(["message" => "Something went wrong, Please try again."], 500);
        }
    }

    /** GET AVAILABLE BOOKS FOR EXTENSION */
    public function view_available_extension(Request $request)
    {
        \Log::info("data view_available_extension", [$request->all(), $request->user()->id]);
        try {
            $userId = $request->user()->id;
            $traceNum = $request->traceNumber;

           $books = Book::with([
                "hasData" => function ($query) use ($userId, $traceNum) {
                    $query->where("status", "RECEIVED");
                },
                "catalog.genre"
            ])
            ->whereHas("hasData",function($query) use ($traceNum, $userId){
                    $query
                    ->where("status", "RECEIVED")
                    ->whereRaw("DATEDIFF(to_date, from_date) < 12")
                    ->whereHas("bookRes", function($q) use ($traceNum, $userId) {
                        $q->where([
                            "trace_number" => $traceNum,
                            "user_id" => $userId
                        ]);
                    });
                })
            ->get();;

            return AvailableBooksResource::collection($books);
        }
        catch (\Exception $e) {
            \Log::error("error view_available_extension", [$e]);
            return response()->json(['message' => $e], 500);
        }
    }

    /** GET PDF COPIES */
    public function pdf_copies(Request $request)
    {
        try {
            $records = BookReservation::with([
                "books.catalog.genre",
                "bookRes",
            ])
            ->whereRelation('bookRes', 'user_id', '=', $request->user()->id)
            // ->forStatus(["RECEIVED"])
            ->whereNull("book_copy_id")
            ->get();

            // SECRET WEAPON
            foreach($records as $record) {
                if($record->bookRes->to_date < now()) {
                    $record->status = "EXPIRED";
                    $record->save();
                }
            }

            return PdfCopyResource::collection($records);
        } catch (\Exception $e) {
            \Log::error("day", [$e]);
            // \Log::channel("errormonitor")->error("error pdf_copies", [$e->getMessage()]);
            return response()->json(["Something went wrong, Please Try Again!"], 500);
        }
    }

    /** POST BOOK REQUEST */
    public function send_request_book(BookRequest $request){
        $validated = $request->validated();
        \Log::info("data", $request->validated());
        try {
            $user = $request->user();

            DB::beginTransaction();

            $book_res = new BookRes();
            $book_res->user_id = $user->id;
            $book_res->trace_number = GenerateTrace::createTraceNumber(BookRes::class);;
            $book_res->purpose = $validated['purpose'];
            $book_res->type = 'ONLINE';
            $book_res->save();

            foreach($validated['book_id'] as $book) {
                $is_e_copy = Book::whereKey($book)->whereNotNull('pdf_copy')->first();
                $record = BookCopy::where(['book_id' => $book, 'status' => "AVAILABLE"])
                ->lockForUpdate()
                ->first();

                if (!$is_e_copy) {
                    if($record == null) {
                        return response()->json(['message' => 'One of the book(s) you requested has no available copies at the moment.'], 422);
                    }
                }

                $book_record = new BookReservation();
                $book_record->book_res_id = $book_res->id;
                $book_record->book_copy_id = $record?->id;
                $book_record->from_date = Carbon::parse($validated['from'])->format('Y-m-d');
                $book_record->to_date = Carbon::parse($validated['to'])->format('Y-m-d');
                $book_record->book_id = $book;
                $book_record->save();

                $cart_record = BookCart::where(['book_id' => $book, 'user_id' => $user->id])->first();
                if($cart_record !==  null) {
                    $cart_record->delete();
                }
                if($record !== null) {
                    $record->status = "RESERVED";
                    $record->save();
                }
            }

            if(env("USE_EVENT")) {
                event(new BELibrary(''));
            }

            Cache::forget("user_id:{$request->user()->id}:status:");
            Cache::forget("user_id:{$request->user()->id}:status:ACTIVE");
            Cache::forget("user_id:{$request->user()->id}:status:COMPLETED");
            Cache::forget("user_id:{$request->user()->id}:status:FOR CSM");
            Cache::forget("user_id:{$request->user()->id}:status:EXTENDING");

            //EMAIL ABOUT SENDING A BORROWING A BOOK
            SendingEmail::dispatch($user, new BookReservationStatus(['status' => "PENDING"], $user));
            AuditHelper::log($user->id, "User {$user->id} sent a book request.");
            Notifications::notify($user->id, null, 'LIBRARY', 'has sent a book request.');
            DB::commit();

            return response()->json(['message' => 'Your book request was sent successfully!'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error('error send_request_book', [$e]);
            // \Log::channel("errormonitor")->error("error send_request_book", [$e->getMessage()]);
            return response()->json(['message' => "Something went wrong, Please try again!"], 500);
        }
    }

    /** SENDING EXTEND REQUESTS */
    public function extend(ExtendingRequest $request)
    {
        \Log::info("extending...", [$request->all()]);
        // return response()->json(["message" => "(●'◡'●)"], 200);
        try {
            DB::beginTransaction();
            $validated = $request->validated();

            $extension_req = ExtensionRequest::create([
                "user_id" => $request->user()->id,
                "book_res_id" => $validated["reference_id"],
                "purpose" => $validated["purpose"],
            ]);

            foreach($validated['data'] as $data) {
                BookExtensionRequest::create([
                    "book_reservation_id" => $data['book_res_id'],
                    "extension_request_id" => $extension_req->id,
                    "current_to_date" => Carbon::parse($data['last_main_date'])->format('Y-m-d'),
                    "date_of_extension" => Carbon::parse($validated['date_of_extension'])->format('Y-m-d'),
                ]);

                BookReservation::find($data["book_res_id"])->update(["status" => "EXTENDING"]);
            }

            /**
             * @var mixed allenETA
             * modify if you want. mwaghh! 👌👌😁😁 🍆💦
             */

            $bookRes = BookRes::find($validated["reference_id"]);
            $bookRes->status = "EXTENDING";
            $bookRes->save();

            Cache::forget("user_id:{$request->user()->id}:status:EXTENDING");

            DB::commit();
            return response()->json(["message" => "Extension request has sent successfully!"], 201);
        }
        catch (\Exception $e) {
        DB::rollBack();
            \Log::error('error extend', [$e]);
            // \Log::channel("errormonitor")->error("error extend", [$e->getMessage()]);
            return response()->json(["message" => "Something went wrong, Please try again"], 500);
        }
    }

    /** CANCELLING EXTEND REQUESTS */
    public function cancel_extend(Request $request)
    {
        // return response()->json(["message" => "(●'◡'●)"], 200);
        try {
            DB::beginTransaction();
            $book_ext_id = $request->book_extention_id;
            $res_id = $request->request_id;

            $record = BookExtensionRequest::whereKey($book_ext_id)->get();
            $record->update([
                'status' => "CANCELLED"
            ]);

            BookReservation::whereKey($record->book_reservation_id)->update([
                'status' => "RECEIVED"
            ]);

            $book_res = BookReservation::whereHas('bookRes', function($q) use ($res_id){
                $q->where('id', $res_id);
            })
            ->whereNotIn('status', ['CANCELLED', 'REJECTED', 'LOST', 'DAMAGED', 'RETURNED'])
            ->exists();

            if($book_res) {
                BookRes::whereKey($res_id)->update(['status' => "FOR CSM"]);
            }

            DB::commit();
            return response()->json(["message" => "Cancelled Successfully!"], 200);
        }
        catch (\Exception $e) {
            DB::rollBack();
            \Log::error('error cancel_extend', [$e]);
            // \Log::channel("errormonitor")->error("error cancel_extend", [$e->getMessage()]);
            return response()->json(["message" => "Something went wrong, Please try again"], 500);
        }
    }

    /** CANCELLING BOOK REQUESTS */
    public function cancel_book (CancelBookRequest $request){
        \Log::info("remove", [$request->validated()]);
        try {
            DB::beginTransaction();

            $validated = $request->validated();
            $user_id = $request->user()->id;
            $res_id = $validated['request_id'];

            $books = BookReservation::whereIn('id', $validated['book_id'])
            ->whereHas('bookRes', function ($query) use ($res_id){
                $query->where(['id' =>  $res_id]);
            })
            ->lockForUpdate()
            ->get();

            \Log::info("book record", [$books]);

            foreach($books as $book) {
                if (!in_array($book->status, ["CANCELLED", "RECEIVED", "LOST", "RETURNED", "REJECTED"])) {
                    $book->status = "CANCELLED";
                    $book->save();

                    if($book->book_copy_id) {
                        BookCopy::find($book->book_copy_id)->update(['status' => "AVAILABLE"]);
                    }
                }
            }

            \Log::info("outside book_res", [$res_id]);

            $book_res = BookReservation::whereHas('bookRes', function($q) use ($res_id){
                $q->where('id', $res_id);
            })
            ->whereNotIn('status', ['CANCELLED', 'REJECTED', 'LOST', 'DAMAGED', 'RETURNED'])
            ->exists();

            \Log::info("existing book_res", [$book_res]);

            if(!$book_res) {
                \Log::info("inside book_res", [$book_res]);
                $record = BookRes::where(['id' => $res_id, 'user_id' => $user_id])->first();
                $record->status = "FOR CSM";
                $record->save();
            }

            if(env("USE_EVENT")) {
                event(new BELibrary(''));
            }

            AuditHelper::log($user_id, "User {$user_id} cancelled a book request.");

            DB::commit();
            return response()->json(['message' => "You're request has been successfully processed."], 200);
        } catch (\Exception $e){
            \Log::error('error cancel_book', [$e]);
            // \Log::channel("errormonitor")->error("error cancel_book", [$e->getMessage()]);
            return response()->json(["message" => "Something went wrong, Please try again"], 500);
        }
    }

    /** CART MODULES */
    public function view_book_cart(Request $request)
    {
        $books = Book::with([
            'catalog.genre'
        ])
        ->withCount('copies')
        ->whereHas('carts', function($q)use ($request) {
            $q->where('user_id', $request->user()->id);
        })
        ->get();
        return BookResource::collection($books);
    }

    public function add_book_items(Request $request)
    {
        \Log::info( "add book to cart", [$request->all(), $request->user()->id]);

        $validations = [
            'book_id' => 'required|exists:books,id'
        ];

        $validator = \Validator::make($request->all(), $validations);

        if($validator->fails()) {
            return response()->json(['message' => implode(',', $validator->errors()->all())], 422);
        } else {
            try {

                DB::beginTransaction();
                $userId = $request->user()->id;

                $bookReservations = BookReservation::forUser($userId)
                ->whereNotIn('status', ["CANCELLED", "RETURNED", "REJECTED", "LOST", "DAMAGED"])
                ->where('book_id', $request->book_id)
                ->exists();

                \Log::info("test add_book_items", [$bookReservations]);

                $exist = BookCart::where([
                    'user_id' => $userId,
                    'book_id' => $request->book_id
                    ])->exists();

                    if ($exist) {
                    return response()->json(["You already added this book to your cart."], 400);
                }

                $book = new BookCart;
                $book->user_id = $userId;
                $book->book_id = $request->book_id;
                $book->save();

                AuditHelper::log($userId, "User {$userId} added a book to cart.");

                DB::commit();

                return response()->json(["message" => "Item added to the cart"], 201);
            } catch(\Exception $e) {
                DB::rollBack();
                \Log::error('error add_book_items', [$e]);
                // \Log::channel("errormonitor")->error("error add cart", [$e->getMessage()]);
                return response()->json(['message' => "Something went wrong, Please try again!"], 500);
            }
        }
    }

    public function remove_book_items(Request $request)
    {
        \Log::info('Delete cart:', [$request->all()]);
        $validation = [
            'book_id' => "required|array",
        ];

        $validator = \Validator::make($request->all(), $validation);

         if($validator->fails()) {
            return response()->json(['message' => implode(',', $validator->errors()->all())], 422);
        } else {
            try {
                DB::beginTransaction();

                $books = BookCart::whereIn('book_id', $request->book_id)->where('user_id', $request->user()->id)->get();
                foreach($books as $book) {
                    $book->delete();
                }

                DB::commit();

                \Log::info("success");
                return response()->json(["message" => "Item removed from the cart"], 201);
            } catch(\Exception $e) {
                DB::rollBack();
                // \Log::channel("errormonitor")->error("error itemsInCart", [$e->getMessage()]);
                return response()->json(['message' => "Something went wrong, Please try again!"], 400);
            }
        }
    }
}
