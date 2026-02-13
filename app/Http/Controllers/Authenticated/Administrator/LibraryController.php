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
    LISelectedBook
};
use App\Enums\{
    AdministratorAuditActions,
    AdministratorReturnResponse
};
use App\Helpers\Administrator\General\CheckForDocumentExistence;

class LibraryController extends Controller
{
    protected $traineeCtrlInstance;

    /**
     * Summary of __construct
     * @param TraineeLibrary $traineeLibrary
     */
    public function __construct(TraineeLibrary $traineeLibrary){
        $this->traineeCtrlInstance = $traineeLibrary;
    }

    /**
     * Summary of get_books
     * @param Request $request
     */
    public function get_books (Request $request) {
        return TransactionUtil::transact(null, [], function() {
            $books = Book::withCount('copies', 'hasData')->with([
                'catalog',
                'catalog.genre'
            ])->get();

            return response()->json(['books' => $books], 200);
        });
    }

    /**
     * Summary of create_or_update_book
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param CreateOrUpdateBookRequest $request
     */
    public function create_or_update_book (CreateOrUpdateBookRequest $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $isPost = $request->httpMethod === "POST";

            $book_catalog = $isPost ? new BookCatalog() : BookCatalog::find($request->catalogId);
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

            $book = $isPost ? new Book : Book::find($request->documentId);
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

            AuditHelper::log(
                $request->user()->id,
                $isPost ? AdministratorAuditActions::LIBRARYCTRL_CREATED_LIBRARYBOOK : AdministratorAuditActions::LIBRARYCTRL_UPDATED_LIBRARYBOOK . " ID#$book->id"
            );

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
                    'documentId' => $book->id
                ]);

                $dataToReturn = $this->create_book_copies($fixedRequest);
            }

            return response()->json([
                'message' => "You've " . ($isPost ? 'created' : 'updated') . " book. ID#$book->id",
                'returnedData' => $dataToReturn
            ], 200);
        });
    }

    /**
     * Summary of create_book_copies
     * @param bool returnedMessage === FALSE
     * @param Request $request
     */
    public function create_book_copies (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $copiesData = [];

            if($request->copies) {
                for ($i = 0; $i < $request->copies; $i++) {
                    $new_book_ui = GenerateTrace::createTraceNumber(BookCopy::class, '-BOOK-', 'unique_identifier', 10, 99);

                    $book_copy = new BookCopy;
                    $book_copy->unique_identifier = $new_book_ui;
                    $book_copy->book_id = $request->documentId;
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

    /**
     * Summary of remove_book
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     * @param int $book_id
     */
    public function remove_book (Request $request, int $book_id) {
        return TransactionUtil::transact(null, ['books_cache'], function() use ($request, $book_id) {
            $this_book = Book::withCount(['hasData', 'copies'])->where('id', $book_id)->first();

            if($this_book->has_data_count > 0) {
                return response()->json(['message' => "Can't remove book. It already has connected data."], 200);
            } else {
                if(file_exists(public_path('book-images/' . $this_book->photo))){
                    unlink(public_path('book-images/' . $this_book->photo));
                }

                $this_book->delete();
                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::LIBRARYCTRL_REMOVED_LIBRARYBOOK .  " ID#$book_id"
                );

                if(env('USE_EVENT')) {
                    event(
                        new BELibrary(''),
                        new BEAuditTrail(''),
                    );
                }

                return response()->json(['message' => "You've removed a book. ID#$book_id"], 200);
            }
        });
    }

    /**
     * Summary of get_book_entries
     * @param Request $request
     */
    public function get_book_entries (Request $request) {
        return TransactionUtil::transact(null, [], function() {
            $genres = BookGenre::withCount('hasData')->get();
            return response()->json(['genres' => $genres], 200);
        });
    }

    /**
     * Summary of create_or_update_book_entry
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param CreateOrUpdateGenre $request
     */
    public function create_or_update_book_entry (CreateOrUpdateGenre $request) {
        return TransactionUtil::transact($request, ['genres_cache'], function() use ($request) {
            $isPost = $request->httpMethod === "POST";
            $documentId = $request->documentId;

            $check = CheckForDocumentExistence::exists(
                BookGenre::class,
                ['name' => $request->name, 'category' => $request->category],
                !$isPost,
                $documentId,
                'id',
                "Book Entry already exist."
            );

            if($check) return $check;

            $this_genre = $isPost ? new BookGenre : BookGenre::find($request->documentId);
            $this_genre->category = $request->category;
            $this_genre->name = $request->name;
            if(!$isPost) $this_genre->status = $request->status;
            $this_genre->save();

            AuditHelper::log(
                $request->user()->id,
                $isPost ? AdministratorAuditActions::LIBRARYCTRL_CREATED_LIBRARYBOOKENTRY : AdministratorAuditActions::LIBRARYCTRL_UPDATED_LIBRARYBOOKENTRY . " ID#$this_genre->id"
            );

            if(env('USE_EVENT')) {
                event(
                    new BELibrary(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($isPost ? 'Created' : 'Updated') . " a book entry. ID#" . $this_genre->id], 201);
        });
    }

    /**
     * Summary of remove_entry
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     * @param int $entry_id
     */
    public function remove_entry (Request $request, int $entry_id) {
        return TransactionUtil::transact(null, ['genres_cache'], function() use ($request, $entry_id) {
            $this_book_genre = BookGenre::withCount(['hasData'])->where('id', $entry_id)->first();

            if($this_book_genre->has_data_count > 0) {
                return response()->json(['message' => "Can't remove book entry. It already has connected data."], 200);
            } else {
                $this_book_genre->delete();

                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::LIBRARYCTRL_REMOVED_LIBRARYBOOKENTRY . " ID#$entry_id"
                );

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

    /**
     * Summary of get_book_info
     * @param Request $request
     * @param int $book_id
     */
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

            return response()->json(['book' => $book], 200);
        });
    }

    /**
     * Summary of get_copies
     * @param Request $request
     * @param int $book_id
     */
    public function get_copies (Request $request, int $book_id) {
        return TransactionUtil::transact(null, [], function() use ($book_id) {
            $bookCopies = BookCopy::withCount('hasData')->where('book_id', operator: $book_id)->get();
            return response()->json(['bookCopies' => $bookCopies], 200);
        });
    }

    /**
     * Summary of remove_copy
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     * @param int $copy_id
     */
    public function remove_copy (Request $request, int $copy_id) {
        return TransactionUtil::transact(null, ['book_copies_cache'], function() use ($request, $copy_id) {
            $this_book = BookCopy::withCount(['hasData'])->where('id', $copy_id)->first();

            if($this_book->has_data_count > 0) {
                return response()->json(['message' => "Can't remove book. It already has connected data."], 200);
            } else {
                $this_book->delete();

                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::LIBRARYCTRL_REMOVED_LIBRARYBOOKCOPY . " ID#$copy_id"
                );

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

    /**
     * Summary of count_book_reservation
     * @param Request $request
     */
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

    /**
     * Summary of check_for_book_reservation
     * @param Request $request
     */
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

    /**
     * Summary of get_book_reservation
     * @param Request $request
     */
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

    /**
     * Summary of get_prolongation_request
     * @param Request $request
     */
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

    /**
     * Summary of get_books_that_protractible
     * @param Request $request
     */
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

    /**
     * Summary of submit_extension_request
     * @param ExtendingRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function submit_extension_request (ExtendingRequest $request) {
        return $this->traineeCtrlInstance->extend($request);
    }

    /**
     * Summary of submit_renewal_request
     * @param RenewBookRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function submit_renewal_request (RenewBookRequest $request) {
        return $this->traineeCtrlInstance->renew($request);
    }

    /**
     * Summary of update_prolongation_request
     * @param bool notification === FALSE
     * @param bool auditActions === FALSE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     */
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
                \in_array($request->status, ["REJECTED", "CANCELLED"]) => 'RECEIVED',
                default => 'HAHAHAH'
            };

            if (\in_array($tempStatus, ["EXTENDED", "RENEWED"])) {
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

            AuditHelper::log(
                $request->user()->id,
                "Updated a book reservation {$tempStatus} request."
            );

            if (env('USE_EVENT')) {
                event(new BELibrary(''), new BEAuditTrail(''));
            }

            return response()->json(['message' => "You've successfully updated a book reservation {$tempStatus} request."], 201);
        });
    }

    /**
     * Summary of update_reservation
     * @param bool notification === FALSE
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param UpdateBookRequest $request
     */
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
                    \in_array($request->status, ["RETURNED", "REJECTED", "CANCELLED"]) => "AVAILABLE",
                    \in_array($request->status, ["DAMAGED", "LOST"]) => $request->status,
                    \in_array($request->status, ["RECEIVED"]) => "BORROWED",
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

            AuditHelper::log(
                $request->user()->id,
                AdministratorAuditActions::LIBRARYCTRL_UPDATED_LIBRARYBOOKRESERVSTATUS . " ID#$request->documentId"
            );

            if (env('USE_EVENT')) {
                event(new BELibrary(''), new BEAuditTrail(''));
            }

            return response()->json(['message' => "Updated book request ID#{$request->documentId}"], 200);
        });
    }

    /**
     * Summary of create_walkin_request
     * @param BookRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create_walkin_request (BookRequest $request) {
        return $this->traineeCtrlInstance->send_request_book($request);
    }

    /**
     * Summary of get_pre_data
     * @param Request $request
     */
    public function get_pre_data (Request $request) {
        return TransactionUtil::transact(null, [], function() {
            $genres = BookGenre::withCount(['hasData'])
                ->where('status', 'ACTIVE')
                ->orderBy('category', 'ASC')
                ->get();
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

    /**
     * Summary of get_fines
     * @param Request $request
     */
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

    /**
     * Summary of get_book_reservation_that_needs_fine
     * @param Request $request
     */
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

    /**
     * Summary of remove_fine
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param Request $request
     * @param int $id
     */
    public function remove_fine (Request $request, int $id) {
        return TransactionUtil::transact(null, [], function() use ($request, $id) {
            $libraryInvoice = LibraryInvoice::find($id);

            if($libraryInvoice->status !== "PENDING") {
                return response()->json(['message' => "Can't delete book reservation fine."], 400);
            } else {
                $libraryInvoice->delete();

                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::LIBRARYCTRL_REMOVED_LIBRARYREQFINE . " ID#$id"
                );

                return response()->json(['message' => "You've deleted a book reservation fine."], 200);
            }
        });
    }

    /**
     * Summary of create_fine
     * @param bool auditActions === TRUE
     * @param bool returnedMessage === FALSE
     * @param RequestFine $request
     */
    public function create_fine(RequestFine $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $isPost = $request->httpMethod === "POST";

            $new_fine = $isPost ? new LibraryInvoice() : LibraryInvoice::find($request->documentId);
            $new_fine->trace_number = $isPost
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

            Notifications::notify($request->user()->id, $request->user_id, "LIBRARY", ($isPost ? 'created' : 'updated') . " a request fine for you.");

            AuditHelper::log(
                $request->user()->id,
                $isPost ? AdministratorAuditActions::LIBRARYCTRL_CREATED_LIBRARYREQFINE : AdministratorAuditActions::LIBRARYCTRL_UPDATED_LIBRARYREQFINE . " ID#$new_fine->id"
            );

            if(env('USE_EVENT')) {
                event(
                    new BELibrary(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've " . ($isPost ? 'Created' : 'Updated') . " a request fine. ID#" . $new_fine->id], 201);
        });
    }
}
