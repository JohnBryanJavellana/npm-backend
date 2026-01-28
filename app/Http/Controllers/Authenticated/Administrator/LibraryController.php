<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Authenticated\Trainee\TraineeLibrary;
use App\Http\Controllers\Controller;
use App\Http\Requests\Trainee\Library\ExtendingRequest;
use App\Http\Requests\Trainee\Library\RenewBookRequest;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\{
    Cache,
    Response,
    File
};
use App\Utils\{
    TransactionUtil,
};
use App\Http\Requests\Trainee\Library\BookRequest;

use App\Http\Requests\Admin\Library\{
    CreateOrUpdateBookRequest,
    CreateOrUpdateGenre,
    UpdateBookRequest,
    CreateWalkInRequest,
    ExtensionFormRequest,
    RequestFine
};
use App\Events\{
    BELibrary,
    BEAuditTrail
};
use App\Utils\{
    AuditHelper,
    ConvertToBase64,
    GenerateTrace,
    Notifications
};
use App\Models\{
    Book,
    Training,
    BookRes,
    BookCatalog,
    BookGenre,
    BookCopy,
    BookTrainingRelated,
    BookReservation,
    EnrolledCourse,
    User,
    ExtensionRequest,
    LibraryInvoice,
    BookExtensionRequest,
    LISelectedBook
};

class LibraryController extends Controller
{
    protected $traineeCtrlInstance;

    public function __construct(TraineeLibrary $traineeLibrary){
        $this->traineeCtrlInstance = $traineeLibrary;
    }

    public function get_books (Request $request) {
        return TransactionUtil::transact(null, [], function() {
            $books = Book::withCount('copies', 'hasData')->with([
                'catalog',
                'catalog.genre'
            ])->get();

            return response()->json(['books' => $books], 200);
        });
    }

    public function create_or_update_book (CreateOrUpdateBookRequest $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $book_catalog = $request->httpMethod === "POST"
                ? new BookCatalog
                : BookCatalog::find($request->catalogId);

            $book_catalog->book_genre_id = $request->entry;
            $book_catalog->title = $request->title;
            $book_catalog->author = $request->author;
            $book_catalog->editor = $request->editor;
            $book_catalog->isbn = $request->isbn;
            $book_catalog->publisher = $request->publisher;
            $book_catalog->type = $request->type;
            $book_catalog->call_number = $request->call_number;
            $book_catalog->file_location = $request->file_location;
            $book_catalog->pages = $request->pages;
            $book_catalog->price = $request->price;
            $book_catalog->publication_year = $request->publication_year;
            $book_catalog->save();

            $book = $request->httpMethod === "POST" ? new Book : Book::find($request->documentId);
            $book->book_catalog_id = $book_catalog->id;

            if($request->photo){
                $image_name = Str::uuid() . '.png';
                ConvertToBase64::generate($request->photo, 'image', "book-uploaded-files/image/$image_name");
                $book->photo = $image_name;
            }

            if($request->pdf_file) {
                $pdf_name = Str::uuid() . '.pdf';
                ConvertToBase64::generate($request->pdf_file, 'application', "book-uploaded-files/pdf/$pdf_name");
                $book->pdf_copy = $pdf_name;
            }

            $book->status = $request->status;
            $book->save();

            BookTrainingRelated::where("book_id", $book->id)->delete();

            if($request->training_id) {
                foreach ($request->training_id as $tid){
                    $book_related = new BookTrainingRelated;
                    $book_related->book_id = $book->id;
                    $book_related->training_id = $tid;
                    $book_related->save();
                }
            }

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a book ID#" . $book->id);

            if(env('USE_EVENT')) {
                event(
                    new BELibrary(''),
                    new BEAuditTrail(''),
                );
            }

            $dataToReturn = [];
            if($request->copies) {
                $fixedRequest = $request->merge([
                    'insideJob' => true,
                    'bookId' => $book->id
                ]);

                $dataToReturn = $this->create_book_copies($fixedRequest);
            }

            return response()->json([
                'message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " book. ID#$book->id",
                'returnedData' => $dataToReturn
            ], 200);
        });
    }

    public function create_book_copies (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $copiesData = [];

            if($request->copies) {
                for ($i = 0; $i < $request->copies; $i++) {
                    $new_book_ui = GenerateTrace::createTraceNumber(BookCopy::class, '-BOOK-', 'unique_identifier', 10, 99);

                    $book_copy = new BookCopy;
                    $book_copy->unique_identifier = $new_book_ui;
                    $book_copy->book_id = $request->bookId;
                    $book_copy->save();

                    array_push($copiesData, $new_book_ui);
                }
            }

            return $request->insideJob ? $copiesData : response()->json([
                'message' => "You've added a book copies.",
                'returnedData' => $copiesData
            ], 201);
        });
    }

    public function remove_book (Request $request, int $book_id) {
        return TransactionUtil::transact(null, [], function() use ($request, $book_id) {
            $this_book = Book::withCount(['hasData', 'copies'])->where('id', $book_id)->first();

            if($this_book->has_data_count > 0) {
                return response()->json(['message' => "Can't remove book. It already has connected data."], 200);
            } else {
                if(file_exists(public_path('book-images/' . $this_book->photo))){
                    unlink(public_path('book-images/' . $this_book->photo));

                    // remove also those qrs
                }

                $this_book->delete();
                AuditHelper::log($request->user()->id, "Removed a book ID#$book_id");

                if(env('USE_EVENT')) {
                    event(
                        new BELibrary(''),
                        new BEAuditTrail(''),
                    );
                }

                Cache::forget('books_cache');
                return response()->json(['message' => "You've removed a book. ID#$book_id"], 200);
            }
        });
    }

    public function get_book_entries (Request $request) {
        return TransactionUtil::transact(null, [], function() {
            $genres = BookGenre::withCount('hasData')->get();
            return response()->json(['genres' => $genres], 200);
        });
    }

    public function create_or_update_book_entry (CreateOrUpdateGenre $request) {
        return TransactionUtil::transact($request, ['genres_cache'], function() use ($request) {
            $this_genre = $request->httpMethod === "POST"
                ? new BookGenre
                : BookGenre::find($request->documentId);

            $this_genre->category = $request->category;
            $this_genre->name = $request->name;
            if($request->status) $this_genre->status = $request->status;
            $this_genre->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a book entry. ID#" . $this_genre->id);

            if(env('USE_EVENT')) {
                event(
                    new BELibrary(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a book entry. ID#" . $this_genre->id], 201);
        });
    }

    public function remove_entry (Request $request, int $entry_id) {
        return TransactionUtil::transact(null, ['genres_cache'], function() use ($request, $entry_id) {
            $this_book_genre = BookGenre::withCount(['hasData'])->where('id', $entry_id)->first();

            if($this_book_genre->has_data_count > 0) {
                return response()->json(['message' => "Can't remove book entry. It already has connected data."], 200);
            } else {
                $this_book_genre->delete();
                AuditHelper::log($request->user()->id, "Removed book entry. ID#$entry_id");

                if(env('USE_EVENT')) {
                    event(
                        new BELibrary(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed a book entry. ID#$entry_id"], 200);
            }
        });
    }

    public function get_book_info (Request $request, int $book_id){
        return TransactionUtil::transact(null, [], function() use($request, $book_id) {
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
                ])->with(['borrowedBooks' => function ($self) use($book_id) {
                    $self->where(['book_id' => $book_id, 'status' => 'RECEIVED'])
                            ->where('to_date', '>=', Carbon::now());
                }])->first();

                if ($filename && !is_null($isMine->borrowedBooks)) {
                    $filePath = public_path("book-uploaded-files/pdf/{$filename}");

                    if (File::exists($filePath)) {
                        $headers = [
                            'Content-Type' => 'application/pdf',
                            'Content-Disposition' => 'inline; filename="' . $filename . '"',
                            'Content-Length' => File::size($filePath),
                            'Access-Control-Allow-Origin' => '*',
                            'Access-Control-Expose-Headers' => 'Created-At',
                            'Created-At' => $isMine->borrowedBooks[0]->to_date
                        ];

                        return Response::file($filePath, $headers);
                    }
                } else {
                    return response()->json(['data' => ''], 500);
                }
            } else {
                return response()->json(['book' => $book], 200);
            }
        });
    }

    public function get_copies (Request $request, int $book_id) {
        return TransactionUtil::transact(null, [], function() use ($book_id) {
            $bookCopies = BookCopy::withCount('hasData')->where('book_id', operator: $book_id)->get();
            return response()->json(['bookCopies' => $bookCopies], 200);
        });
    }

    public function remove_copy (Request $request, int $copy_id) {
        return TransactionUtil::transact(null, ['book_copies_cache'], function() use ($request, $copy_id) {
            $this_book = BookCopy::withCount(['hasData'])->where('id', $copy_id)->first();

            if($this_book->has_data_count > 0) {
                return response()->json(['message' => "Can't remove book. It already has connected data."], 200);
            } else {
                $this_book->delete();
                AuditHelper::log($request->user()->id, "Removed book copy. ID#$copy_id");

                if(env('USE_EVENT')) {
                    event(
                        new BELibrary(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed book copy. ID#$copy_id"], 200);
            }
        });
    }

    public function count_book_reservation (Request $request){
        return TransactionUtil::transact(null, [], function() use ($request) {
            $reservations = BookRes::query();

            if($request->userId) {
                $reservations->where('user_id', $request->userId);
            }

            $get_count = function ($collection) {
                $count = $collection->count();
                return $count > 99 ? '99+' : $count;
            };

            $count = [
                'total'     => $get_count($reservations),
                'active'    => $get_count($reservations->clone()->where('status', 'ACTIVE')),
                'for_csm'   => $get_count($reservations->clone()->where('status', 'FOR CSM')),
                'extending' => $get_count($reservations->clone()->where('status', 'EXTENDING')),
                'completed' => $get_count($reservations->clone()->where('status', 'COMPLETED')),
            ];

            return response()->json(['reservationCount' => $count], 200);
        });
    }

    public function check_for_book_reservation (Request $request){
        return TransactionUtil::transact(null, [], function() use ($request) {
            $bookReservationCheck = ExtensionRequest::where([
                'book_res_id' => $request->libraryId,
                'user_id' => $request->userId
            ])->with([
                'extendingBooks' => function ($query) {
                    $query->where('status', "PENDING");
                },
                'library.borrowedBooks' => function ($query) {
                    $query->where('status', 'EXPIRED')
                          ->orWhere('to_date', '<=', Carbon::now()->toDateString());
                }
            ])->first();

            $pendingFines = LibraryInvoice::where([
                'book_res_id' => $request->libraryId,
                'user_id' => $request->userId
            ])->whereIn('invoice_status', ['PENDING', 'VERIFICATION'])->exists();

            $count =  [
                'hasBooksNeedAction' => $bookReservationCheck && count($bookReservationCheck->library->borrowedBooks) > 0,
                'hasPendingReservation' => $bookReservationCheck && ($bookReservationCheck->extendingBooks && count($bookReservationCheck->extendingBooks) > 0),
                'hasPendingFines' => $pendingFines
            ];

            return response()->json(['bookReservationCheck' => $count], 200);
        });
    }

    public function get_book_reservation (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $reservations = BookRes::with([
                'trainee',
                'borrowedBooks',
                'borrowedBooks.book',
                'borrowedBooks.books',
                'borrowedBooks.books.catalog',
                'borrowedBooks.books.catalog.genre',
                'csm',
                'csm.user'
            ]);

            if($request->userId) $reservations->where('user_id', $request->userId);
            if($request->type) $reservations->where('status', $request->type);

            $reservations = $request->traceNumber
                ? $reservations->where('trace_number', $request->traceNumber)->first()
                : $reservations->orderBy('created_at', 'DESC')->get();

            return response()->json(['reservations' => $reservations], 200);
        });
    }

    public function get_prolongation_request (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $prolongationMain = BookReservation::with([
                'bookRes',
                'books',
                'bookRes.trainee',
                'books.catalog',
                'books.catalog.genre'
            ])->where([
                'book_res_id' => $request->libraryId
            ])->whereIn('status', $request->status)->get();

            return response()->json(['prolongationRequests' => $prolongationMain], 200);
        });
    }

    public function get_books_that_protractible (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $booksThatAreProtactible = BookReservation::with([
                'bookRes',
                'books',
                'books.catalog',
                'books.catalog.genre'
            ])->where([
                'book_res_id' => $request->libraryId
            ])->whereIn('status', $request->status)->get();

            return response()->json(['booksThatAreProtactible' => $booksThatAreProtactible], 200);
        });
    }

    public function submit_extension_request (ExtendingRequest $request) {
        return $this->traineeCtrlInstance->extend($request);
    }

    public function submit_renewal_request (RenewBookRequest $request) {
        return $this->traineeCtrlInstance->renew($request);
    }

    public function update_prolongation_request(Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $bR = BookReservation::find($request->documentId);

            if (!$bR) {
                return response()->json(['message' => 'Reservation not found.'], 404);
            }

            $isPastDue = now()->gt(Carbon::parse($bR->to_date));

            $tempStatus = match(true) {
                $isPastDue => 'EXPIRED',
                $request->status === "APPROVED" => $request->acceptedStatus,
                in_array($request->status, ["REJECTED", "CANCELLED"]) => 'RECEIVED',
                default => 'HAHAHAH'
            };

            if (in_array($tempStatus, ["EXTENDED", "RENEWED"])) {
                $bR->to_date = Carbon::parse($request->to_date);
            }

            $bR->status = $tempStatus;
            $bR->save();

            Notifications::notify(
                $request->user()->id,
                $bR->bookRes->trainee->id,
                "LIBRARY",
                "updated your book reservation request to {$tempStatus}."
            );

            AuditHelper::log($request->user()->id, "Updated a book reservation {$tempStatus} request.");

            if (env('USE_EVENT')) {
                event(new BELibrary(''), new BEAuditTrail(''));
            }

            return response()->json(['message' => "You've successfully updated a book reservation {$tempStatus} request."], 201);
        });
    }

    public function update_reservation(UpdateBookRequest $request){
        return TransactionUtil::transact($request, ["book_reservations_cache"], function() use ($request) {
            $reservation = BookReservation::findOrFail($request->documentId);
            $reservation->status = $request->status;

            if ($reservation->type === "HARD-COPY" && is_null($reservation->book_copy_id)) {
                $copy = BookCopy::where('status', 'AVAILABLE')->first();
                if (!$copy) return response()->json(['message' => "No available copies for this book."], 422);
                $reservation->book_copy_id = $copy->id;
            }

            $reservation->save();

            if ($reservation->book_copy_id) {
                $copy = BookCopy::find($reservation->book_copy_id);

                $copy->status = match(true) {
                    in_array($request->status, ["RETURNED", "REJECTED", "CANCELLED"]) => "AVAILABLE",
                    in_array($request->status, ["DAMAGED", "LOST"]) => $request->status,
                    in_array($request->status, ["RECEIVED"]) => "BORROWED",
                    default => $copy->status
                };
                $copy->save();
            }

            $hasActiveItems = BookReservation::where('book_res_id', $reservation->book_res_id)
                ->whereNotIn('status', ['CANCELLED', 'REJECTED', 'LOST', 'DAMAGED', 'RETURNED'])
                ->exists();

            if (!$hasActiveItems) {
                BookRes::where('id', $reservation->book_res_id)->update(['status' => 'FOR CSM']);
            }

            Notifications::notify($request->user()->id, $reservation->bookRes->trainee->id, "LIBRARY", "updated your book reservation status.");
            AuditHelper::log($request->user()->id, "Updated book reservation status. ID#{$request->documentId}");

            if (env('USE_EVENT')) {
                event(new BELibrary(''), new BEAuditTrail(''));
            }

            return response()->json(['message' => "Updated book request ID#{$request->documentId}"], 200);
        });
    }

    public function get_available_books (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $user = User::findOrFail($request->userId);

            $record = EnrolledCourse::where('user_id', $user->id)
                ->whereNotIn('enrolled_course_status', ['CANCELLED', 'DECLINED', 'COMPLETED', 'CSFB', 'IR'])
                ->pluck('training_id');

            $books = Book::with([
                'catalog.genre',
                'copies' => function($query) {
                    return $query->where('status', 'AVAILABLE');
                }
            ])->where('status', 'ACTIVE')->get()
            ->map(function ($self) use ($record, $user) {
                    $brQuery = BookTrainingRelated::with('training.module')->where('book_id', $self->id);
                    $relatedBookTrainings = $brQuery->clone()
                        ->whereIn('training_id', $record)
                        ->get();

                    $related = $relatedBookTrainings->count() > 0 ? 1 : 0;
                    $relatedTrainingsData = $relatedBookTrainings->map(function ($bookTraining) {
                        return $bookTraining->training;
                    })->toArray();

                    $availabilityStatus = (function() use ($self, $brQuery, $related, $user) {
                        $checkIfReserved = $self->hasData()
                            ->whereNotIn('status', ["CANCELLED", "RETURNED", "REJECTED", "LOST", "DAMAGED"])
                            ->whereHas('bookRes', function ($q) use ($user) {
                                $q->where('user_id', $user->id);
                            })->exists();

                        if ($brQuery->count() > 0 && $related === 1 && !$checkIfReserved) {
                            return 'RECOMMENDED';
                        } else if ($checkIfReserved) {
                            return 'REQUESTED';
                        } else if ($self->copies()->whereIn('status', ['AVAILABLE'])->exists() || $self->pdf_copy) {
                            return 'AVAILABLE';
                        } else {
                            return 'OUT OF STOCK';
                        }
                    })();

                    $self->availabilityStatus = $availabilityStatus;
                    $self->related_trainings = $relatedTrainingsData;
                    return $self;
                })->sortBy(function ($book) {
                    $order = [
                        'RECOMMENDED' => 2,
                        'AVAILABLE' => 4,
                        'REQUESTED' => 1,
                        'OUT OF STOCK' => 3,
                    ];

                    return $order[$book->availabilityStatus] ?? 99;
                })->values();

            return response()->json(['books' => $books], 200);
        });
    }

    public function create_walkin_request (BookRequest $request) {
        return $this->traineeCtrlInstance->send_request_book($request);
    }

    public function get_pre_data (Request $request) {
        return TransactionUtil::transact(null, [], function() {
            $genres = BookGenre::withCount(['hasData'])->where('status', 'ACTIVE')->orderBy('category', 'ASC')->get();
            $trainings = Training::with([
                'module',
                'module.moduleType'
            ])->get();

            return response()->json([
                'genres' => $genres,
                'trainings' => $trainings
            ], 200);
        });
    }

    public function get_fines(Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $fines = LibraryInvoice::with([
                'charge',
                'bookRes',
                'selectedBooks',
                'selectedBooks.bookReservation',
                'selectedBooks.bookReservation.book',
                'selectedBooks.bookReservation.books',
                'selectedBooks.bookReservation.books.catalog',
            ])->where([
                'book_res_id' => $request->libraryId,
                'user_id' => $request->userId
            ])->orderBy('created_at', 'DESC')->get();

            return response()->json(['fines' => $fines], 200);
        });
    }

    public function get_book_reservation_that_needs_fine (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $booksThatNeedsFine = BookRes::where([
                'id' => $request?->libraryId,
                'user_id' => $request?->userId
            ])->with([
                'borrowedBooks' => function($query) {
                    $query->whereIn('status', ['EXPIRED', 'DAMAGED', 'LOST'])
                        ->whereHas('books', fn($q) => $q->where('pdf_copy', null));
                },
                'borrowedBooks.books',
                'borrowedBooks.book',
                'borrowedBooks.books.catalog'
            ])->first();

            return response()->json(['booksThatNeedsFine' => $booksThatNeedsFine], 200);
        });
    }

    public function remove_fine (Request $request, int $id) {
        return TransactionUtil::transact(null, [], function() use ($request, $id) {
            $libraryInvoice = LibraryInvoice::find($id);

            if($libraryInvoice->status !== "PENDING") {
                return response()->json(['message' => "Can't delete book reservation fine."], 400);
            } else {
                $libraryInvoice->delete();

                AuditHelper::log($request->user()->id, "Removed a request fine. ID#$id");
                return response()->json(['message' => "You've deleted a book reservation fine."], 200);
            }
        });
    }

    public function create_fine(RequestFine $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $new_fine = $request->httpMethod === "POST"
                ? new LibraryInvoice
                : LibraryInvoice::find($request->documentId);

            $new_fine->trace_number = $request->httpMethod === "POST"
                ? GenerateTrace::createTraceNumber(LibraryInvoice::class, '-RFINE-', 'trace_number', 10, 99)
                : $new_fine->trace_number;

            $new_fine->user_id = $request->user_id;
            $new_fine->charge_id = $request->charge;
            $new_fine->book_res_id = $request->book_res_id;
            $new_fine->details = $request->details;
            $new_fine->amount = $request->amount;
            $new_fine->save();

            LISelectedBook::where('library_invoice_id', $new_fine->id)->delete();
            foreach ($request->selectedBookReservations as $bookReservation) {
                $bookReserv = BookReservation::find($bookReservation);

                $new_fine_selected_book_reservation = new LISelectedBook;
                $new_fine_selected_book_reservation->library_invoice_id = $new_fine->id;
                $new_fine_selected_book_reservation->book_reservation_id = $bookReservation;
                $new_fine_selected_book_reservation->remarks = $bookReserv->status;
                $new_fine_selected_book_reservation->save();
            }

            Notifications::notify($request->user()->id, $request->user_id, "LIBRARY", ($request->httpMethod === "POST" ? 'created' : 'updated') . " a request fine for you.");
            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a request fine. ID#" . $new_fine->id);

            if(env('USE_EVENT')) {
                event(
                    new BELibrary(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a request fine. ID#" . $new_fine->id], 201);
        });
    }
}
