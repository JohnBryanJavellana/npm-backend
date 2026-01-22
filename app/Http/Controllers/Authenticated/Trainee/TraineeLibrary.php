<?php

namespace App\Http\Controllers\Authenticated\Trainee;

use App\Events\BELibrary;
use App\Http\Controllers\Controller;
use App\Services\Trainee\Library\LibraryCartService;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Trainee\Library\BookRequest;
use App\Http\Requests\Trainee\Library\CancelBookRequest;
use App\Http\Requests\Trainee\Library\ExtendingRequest;
use App\Mail\BookReservationStatus;
use App\Utils\{AuditHelper, Notifications, TransactionUtil};
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use App\Http\Resources\{BookResource, BookRequestResource, PdfCopyResource, BookExtensionResource, AvailableBooksResource, BookOverDueResource};
use App\Jobs\SendingEmail;
use App\Models\{User, Book, BookCopy, BookCart, BookReservation, BookRes, EnrolledCourse, BookTrainingRelated, ExtensionRequest, BookExtensionRequest};
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Services\Trainee\Library\LibraryService;
use App\Enums\RequestStatus;
use App\Http\Requests\Trainee\Library\AddCartRequest;
use App\Http\Requests\Trainee\Library\CancelRenewRequest;
use App\Http\Requests\Trainee\Library\RemoveCartRequest;
use App\Http\Requests\Trainee\Library\RenewBookRequest;
use App\Http\Resources\Trainee\Library\BookCartResource;
use App\Services\Trainee\Library\LibraryExtendService;
use App\Services\Trainee\Library\LibraryRenewService;
use DomainException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TraineeLibrary extends Controller
{
    protected $ttl = 300;
    protected $short_ttl = 60;

    public function __construct(
        protected LibraryService $library_service,
        protected LibraryExtendService $libraryExtendService,
        protected LibraryRenewService $libraryRenewService,
        protected LibraryCartService $libraryCartService
        ) {}


    public function test(Request $request)
    {
        $record = BookCart::query()
            ->with([
                'books.catalog.genre',
                'books' => function($q) {
                    $q->withCount(["copies" => fn($query) => $query->where("status", RequestStatus::AVAILABLE->value)]);
                },
            ])
            ->get();
        return BookCartResource::collection($record);
    }

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

            //SEPARATE
            $record = EnrolledCourse::query()
                ->where('user_id', $userId)
                ->select('training_id')
                ->whereNotIn('enrolled_course_status', ['CANCELLED', 'DECLINED', 'COMPLETED', 'CSFB', 'IR'])
                ->get();

            //SEPARATE
            $books = Book::with([
                'catalog.genre',
                'hasData.bookRes' => function ($query) use ($userId) {
                    $query->where(['user_id' => $userId, 'status' => 'FOR CSM']);
                },
                "related" => function($q) use ($record) {
                    $q->whereIn('training_id', $record);
                },
                "related.training.module",
                "copies"
            ])
            ->withCount([
                'copies' => fn ($q) => $q->where('status', RequestStatus::AVAILABLE),
                'carts' => function ($q) use ($user) {
                    $q->where('user_id', $user->id);
                },
                'hasData' => function ($q) use ($user) {
                    $q->whereIn('status', [RequestStatus::RECEIVED, RequestStatus::PENDING, RequestStatus::APPROVED])->whereRelation('bookRes', 'user_id', '=', $user->id);
                },
                'related as enrolled_trainings_count' => function ($query) use ($record) {
                    $query->whereIn('training_id', $record);
                }
            ])
            ->where('status', RequestStatus::ACTIVE)
            ->orderByDesc('enrolled_trainings_count')
            ->orderBy('id');

            $bookList = $books->get();

        return BookResource::collection($bookList);
        } catch (\Exception $e) {
            \Log::info("view_books_error", [$e]);
            return response()->json(["Something went wrong, Please try again!"], 500);
        }
    }

    /** GET TRAINEE RECORDS */
    public function get_book_records(Request $request) {
        try {

            $status = $request->type;
            $user_id = $request->user()->id;
            $cache_key = "user_id:$user_id:status:$status";
            $this->library_service->updateOverDue($user_id);

            \Log::info("CACHE: ", [Cache::has($cache_key), $cache_key]);

            $records = Cache::remember($cache_key, $this->ttl, function () use ($user_id, $status) {
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
                ->whereNot("status", RequestStatus::CANCELLED->value)
                ->latest("created_at");

                if ($status) $book_record->where('status',$status);

                $this->forgetCache($user_id);

                return $book_record->get();

            });
            return BookRequestResource::collection($records);
        } catch(\Exception $e) {
            \Log::error("day", [$e]);
            return response()->json([
                "message" => "Something went wrong, Please try again!"
            ], 500);
        }
    }

    /** GET TRAINEE RECORD BY ID */
    public function view_request_details(Request $request){
        try {
            \Log::info("view_request_details", [$request->all()]);
            $user_id = $request->user()->id;
            $trac = $request->trace_number;

            // $version = Cache::get("user_id:$user_id:version", 1);
            // $cache_key = "user_id:$user_id:v:$version:$trac";
            // $records = Cache::remember($cache_key, $this->short_ttl, function () use ($user_id, $trac) {

            $record = EnrolledCourse::query()
                ->where('user_id', $user_id)
                ->whereNotIn('enrolled_course_status', ['CANCELLED', 'DECLINED', 'COMPLETED', 'CSFB', 'IR'])
                ->get()
                ->select('training_id');

            $books = BookRes::forUser($user_id)
                ->with([
                    "borrowedBooks.books.catalog.genre",
                    "borrowedBooks.books.related" => function($q) use ($record) {
                    $q->whereIn('training_id', $record);
                },
                    "csm"
                ])
                ->where(["trace_number" => $trac, "user_id" => $user_id])
                ->first();

            // });
            return new BookRequestResource($books);

        } catch(\Exception $e) {
            \Log::error("error_view_request_details", [$e]);
            return response()->json([
                "message" => "Something went wrong, Please try again!"
            ], 500);
        }
    }

    /** VIEW EXTENSION REQUESTS */
    public function view_extend_request(Request $request)
    {
        try {
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
        \Log::info("data_view_available_extension", [$request->all(), $request->user()->id]);
        try {
            $userId = $request->user()->id;
            $traceNum = $request->traceNumber;

           $books = Book::with([
                "hasData" => function ($query) use($traceNum,  $userId) {
                    $query->where("status", "RECEIVED")->whereHas("bookRes", function($q) use ($traceNum, $userId) {
                        $q->where([
                            "trace_number" => $traceNum,
                            "user_id" => $userId
                        ]);
                    });;
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

    /** POST BOOK REQUEST */
    public function send_request_book(BookRequest $request){
        try {
            $validated = $request->validated();
            $userId = $validated["user"]["id"];


            // return response()->json(["sheesshh"], 200);
            $this->library_service->storeRequest($validated, $userId);

            if(env("USE_EVENT")) {
                event(new BELibrary(''));
            }

            $this->forgetCache($userId);

            //EMAIL ABOUT SENDING A BORROWING A BOOK
            //CHANGE THE imbedded IMAGE TO BASE-64 FOR EMAIL??
            SendingEmail::dispatch($validated["user"], new BookReservationStatus(['status' => "PENDING"], $validated["user"]));
            AuditHelper::log($userId, "User {$userId} sent a book request.");
            Notifications::notify($userId, null, 'LIBRARY', 'has sent a book request.');

            return response()->json(['message' => 'Your book request was sent successfully!'], 200);
        }
        catch (DomainException $e) {
            throw $e;
        }
        catch (\Exception $e) {
            \Log::error('error send_request_book', [$e]);
            return response()->json(['message' => "Something went wrong, Please try again!"], 500);
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
            ->select("id", "status")
            ->whereHas('bookRes', function ($query) use ($res_id){
                $query->where(['id' =>  $res_id]);
            })
            ->lockForUpdate()
            ->get();

            //get all cancelled use to filter flatten and pluck the names of the books and implode?
            //pluck name of already cancelled.
            //flatten after plucking.
            //concert the collection into array.
            //and return using implode ', '

            // $cancellables = $books->filter(fn($book) => !$book->status === RequestStatus::CANCELLED)
            // ->pluck('id')
            // ->toArray();

            //cancel remaining

            //remove looping
            foreach($books as $book) {
                if (!in_array($book->status, ["CANCELLED", "RECEIVED", "LOST", "RETURNED", "REJECTED"])) {

                    $book->update(["status" => RequestStatus::CANCELLED]);
                    // $book->status = RequestStatus::CANCELLED;
                    // $book->save();

                    if($book->book_copy_id) {
                        BookCopy::find($book->book_copy_id)->update(['status' => RequestStatus::AVAILABLE]);
                    }
                }
            }

            $book_res = BookReservation::whereHas('bookRes', function($q) use ($res_id){
                $q->where('id', $res_id);
            })
            ->whereNotIn('status', ['CANCELLED', 'REJECTED', 'LOST', 'DAMAGED', 'RETURNED'])
            ->exists();

            if(!$book_res) {
                BookRes::where(['id' => $res_id, 'user_id' => $user_id])->update(['status' => RequestStatus::FOR_CSM]);
            }

            if(env("USE_EVENT")) {
                event(new BELibrary(''));
            }

            $this->forgetCache($user_id);

            SendingEmail::dispatch($request->user(), new BookReservationStatus(['status' => "CANCELLED"], $request->user()));
            AuditHelper::log($user_id, "User {$user_id} cancelled a book request.");

            DB::commit();
            return response()->json(['message' => "You're request has been cancelled successfully."], 200);
        } catch (\Exception $e){
            \Log::error('error cancel_book', [$e]);
            // \Log::channel("errormonitor")->error("error cancel_book", [$e->getMessage()]);
            return response()->json(["message" => "Something went wrong, Please try again"], 500);
        }
    }

    /** CREATE EXTEND REQUESTS */
    public function extend(ExtendingRequest $request)
    {
        return response()->json(["sheeshs"], 200);
        try {
            DB::beginTransaction();
            $validated = $request->validated();
            $user_id = $request->user()->id;
            $bookId = [];

            //separate
            $extension_req = ExtensionRequest::create([
                "user_id" => $user_id,
                "book_res_id" => $validated["reference_id"],
            ]);

            //separate
            foreach($validated['data'] as $data) {
                BookExtensionRequest::create([
                    "book_reservation_id" => $data['book_res_id'],
                    "extension_request_id" => $extension_req->id,
                    "current_to_date" => Carbon::parse($data['to_date'])->format('Y-m-d'),
                    "date_of_extension" => Carbon::parse($data['extension_date'])->format('Y-m-d'),
                ]);
                $bookId[] = $data['book_res_id'];
            }

            BookReservation::query()
            ->whereIn("id",$bookId)
            ->lockForUpdate()
            ->update(["status" => RequestStatus::EXTENDING->value]);

            //separate
            // $bookRes = BookRes::find($validated["reference_id"]);
            // $bookRes->status = "EXTENDING";
            // $bookRes->save();

            $this->forgetCache($user_id);

            DB::commit();
            return response()->json(["message" => "Extension request has sent successfully!"], 201);
        }
        catch (DomainException$e) {
            throw $e;
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
        try {
            DB::beginTransaction();
            $book_ext_id = $request->ext_book_id;
            $res_id = $request->book_res_id;

            \Log::info("try cancel", $request->all());

            $record = BookExtensionRequest::whereKey($book_ext_id)->first();
            $record->update(['status' => "CANCELLED"]);

            BookReservation::whereKey($record->book_reservation_id)->update([
                'status' => "RECEIVED"
            ]);

            $book_res = BookReservation::whereHas('bookRes', function($q) use ($res_id){
                $q->where('id', $res_id);
            })
            ->whereNotIn('status', ['CANCELLED', 'REJECTED', 'LOST', 'DAMAGED', 'RETURNED'])
            ->exists();

            if($book_res) {
                $record = BookRes::find($res_id);
                if (!$record) {
                    return;
                }
                // $date = Carbon::parse($record->to_date);
                // $status = $date->isPast()
                //     ? 'EXPIRED'
                //     : 'ACTIVE';

                $record->update(['status' => "ACTIVE"]);
            }

            // Cache::forget("user_id:{$request->user()->id}:status:EXTENDING");
            $this->forgetCache($request->user()->id);

            DB::commit();
            return response()->json(["message" => "Cancelled Successfully!"], 200);
        }
        catch (\Exception $e) {
            DB::rollBack();
            \Log::error('error cancel_extend', [$e]);
            return response()->json(["message" => "Something went wrong, Please try again"], 500);
        }
    }

    /** CREATE RENEW REQUESTS */
    public function renew(RenewBookRequest $request)
    {
        // return response()->json(["ngek"], 200);
        try
        {
            $validated = $request->validated();

            $this->libraryRenewService->storeRenewRequest($validated);

            // AuditHelper::log()

            return response()->json(["message" => "You've successfully sent a book renew request."], 200);
        }
        catch (DomainException $e) {
            throw $e;
        }
        catch (\Exception $e) {
            \Log::error("renew", [$e]);
            return response()->json(["message" => "Something went wrong, Please try again."], 500);
        }
    }

    public function cancelRenew(CancelRenewRequest $request)
    {
        try
        {
            $validated = $request->validated();
            $this->libraryRenewService->cancelRenewRequest($validated);

            return response()->json(["You've successfully cancelled a book renew request."], 200);

        }
        catch (ModelNotFoundException) {
            return response()->json(["wow not found"], 404);
        }
        catch (\Exception $e) {
            \Log::error("cancelRenew", [$e]);
            return response()->json([], 500);
        }
    }
    /** CART MODULES */
    public function view_book_cart(Request $request)
    {
        try {
            $books = $this->libraryCartService->getCart($request);

            return BookCartResource::collection($books);
        }
        catch (DomainException $e) {
            throw $e;
        }
        catch (\Exception $e) {
            return response()->json(["message" => "Something went wrong, Please try again."], 500);
        }
    }

    public function add_book_items(AddCartRequest $request)
    {
        try {
            $userId = $request->user()->id;
            $validated = $request->validated();

            $this->libraryCartService->storeToCart($validated, $userId);

            AuditHelper::log($userId, "User {$userId} added a book to cart.");

            return response()->json(["message" => "Item added to the cart"], 201);
        }
        catch (DomainException $e) {
            throw $e;
        }
        catch(\Exception $e) {
            \Log::error('error add_book_items', [$e]);
            return response()->json(['message' => "Something went wrong, Please try again!"], 500);
        }
    }

    public function remove_book_items(RemoveCartRequest $request)
    {
        return response()->json([$request->all()], 200);
        try {
            $userId = $request->user()->id;
            $validated = $request->validated();

            $this->libraryCartService->removeFromCart($validated, $userId);

            AuditHelper::log($userId, "User {$userId} removed a book from the cart.");

            return response()->json(["message" => "Item removed from the cart"], 201);
        }
        catch (DomainException $e) {
            throw $e;
        }
        catch(\Exception $e) {
            return response()->json(['message' => "Something went wrong, Please try again!"], 400);
        }
    }

    public function count_book_reservation (Request $request){
        return TransactionUtil::transact(null, [], function() use ($request) {
            $userId = $request->user()->id;
            $cache_key = "count_book_reservation:{$userId}";
            $reservationCount = Cache::remember($cache_key, $this->short_ttl, function () use($request, $userId) {
                $reservations = BookRes::query();

                if($userId) {
                    $reservations->where('user_id', $userId);
                }

                $get_count = function ($collection) {
                    $count = $collection->count();
                    return $count > 99 ? '99+' : $count;
                };

                return [
                    'total'     => $get_count($reservations),
                    'active'    => $get_count($reservations->clone()->where('status', 'ACTIVE')),
                    'for_csm'   => $get_count($reservations->clone()->where('status', 'FOR CSM')),
                    'extending' => $get_count($reservations->clone()->where('status', 'EXTENDING')),
                    'completed' => $get_count($reservations->clone()->where('status', 'COMPLETED')),
                ];
            });

            return response()->json(['reservationCount' => $reservationCount], 200);
        });
    }

    public function get_book_info (Request $request, int $book_id){
            return TransactionUtil::transact(null,[], function() use($request, $book_id) {
            // $ttl = now()->addMinutes(env('CACHE_DURATION'));
            // return Cache::remember("book_info_cache_$book_id:{$request->user()->id}", $ttl, function () use($request, $book_id) {
                \Log::info($request->all());

                $book = Book::where('id', $book_id)
                    ->withCount('copies', 'hasData')
                    ->with([
                        'related',
                        'related.training',
                        'related.training.module',
                        'catalog',
                        'catalog.genre'
                    ])->first();


                if ($request->boolean('getFileAsBlob') && $request->has('traceNumber') && $book) {
                    $filename = $book->pdf_copy ?? null;

                    $isMine = BookRes::where([
                        'user_id' => $request->user()->id,
                        'trace_number' => $request->traceNumber
                    ])
                    ->whereHas('borrowedBooks', function ($self) use($book_id) {
                        return $self->where([
                            'book_id' => $book_id,
                            'status' => 'RECEIVED'
                        ])->where('to_date', '>=', Carbon::now());
                     })->exists();

                    \Log::info($isMine);

                    if ($filename && $isMine) {
                        $filePath = public_path("book-uploaded-files/pdf/{$filename}");

                        if (File::exists($filePath)) {
                            $headers = [
                                'Content-Type' => 'application/pdf',
                                'Content-Disposition' => 'inline; filename="' . $filename . '"',
                                'Content-Length' => File::size($filePath),
                                'Access-Control-Allow-Origin' => '*',
                            ];

                            return Response::file($filePath, $headers);
                        }
                    } else {
                        return response()->json(['data' => ''], 500);
                    }
                } else {
                    return response()->json(['book' => $book], 200);
                }
            // });
        });
    }

    public function forgetCache($user_id)
    {
        Cache::forget("count_book_reservation:{$user_id}");
        Cache::forget("user_id:{$user_id}:status:");
        Cache::forget("user_id:{$user_id}:status:ACTIVE");
        Cache::forget("user_id:{$user_id}:status:FOR CSM");
        Cache::forget("user_id:{$user_id}:status:COMPLETED");
        Cache::forget("user_id:{$user_id}:status:EXTENDING");
    }
}
