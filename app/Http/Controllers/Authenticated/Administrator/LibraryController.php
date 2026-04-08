<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Authenticated\Trainee\TraineeLibrary;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Library\CreateBookCopy;
use App\Http\Requests\Admin\Library\RemoveBook;
use App\Http\Requests\Admin\Library\RemoveBookCopy;
use App\Http\Requests\Admin\Library\RemoveGenre;
use App\Http\Requests\Admin\Library\UpdateBookCopy;
use App\Http\Requests\Trainee\Library\ExtendingRequest;
use App\Http\Requests\Trainee\Library\RenewBookRequest;
use App\Services\Administrator\Library\LibraryBookCopyManager;
use App\Services\Administrator\Library\LibraryBookEntryManager;
use App\Services\Administrator\Library\LibraryBookManager;
use Illuminate\Http\Request;
use Carbon\Carbon;
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
    ExtensionRequest,
    LibraryInvoice,
};
use App\Enums\{
    AdministratorAuditActions,
    AdministratorReturnResponse,
};
use App\Helpers\Administrator\General\CountCollection;
use App\Enums\Administrator\{
    LibraryEnum
};

class LibraryController extends Controller
{
    protected $traineeCtrlInstance;

    /**
     * Summary of __construct
     * @param TraineeLibrary $traineeLibrary
     */
    public function __construct(
        TraineeLibrary $traineeLibrary,
        public LibraryBookManager $libraryBookManager,
        public LibraryBookCopyManager $libraryBookCopyManager,
        public LibraryBookEntryManager $libraryBookEntryManager
    ){
        $this->traineeCtrlInstance = $traineeLibrary;
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of count_book_reservation
     * @param Request $request
     */
    public function count_book_reservation (Request $request){
        return TransactionUtil::transact(null, [], function() use ($request) {
            $reservations = BookRes::query();

            $count = [
                'total'     => CountCollection::startCount($reservations),
                'active'    => CountCollection::startCount($reservations->clone()->where('status', LibraryEnum::ACTIVE)),
                'for_csm'   => CountCollection::startCount($reservations->clone()->where('status', LibraryEnum::FOR_CSM)),
                'extending' => CountCollection::startCount($reservations->clone()->where('status', LibraryEnum::EXTENDING)),
                'completed' => CountCollection::startCount($reservations->clone()->where('status', LibraryEnum::COMPLETED)),
            ];

            return response()->json(['reservationCount' => $count], 200);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
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

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of submit_extension_request
     * @param ExtendingRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function submit_extension_request (ExtendingRequest $request) {
        return $this->traineeCtrlInstance->extend($request);
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of submit_renewal_request
     * @param RenewBookRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function submit_renewal_request (RenewBookRequest $request) {
        return $this->traineeCtrlInstance->renew($request);
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of create_walkin_request
     * @param BookRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create_walkin_request (BookRequest $request) {
        return $this->traineeCtrlInstance->send_request_book($request);
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
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
     * Summary of get_book_info
     * @param Request $request
     * @param int $book_id
     */
    public function get_book_info (Request $request, int $book_id){
        return TransactionUtil::transact(null, [], function() use($request, $book_id) {
            $book = Book::whereKey($book_id)
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
     * Summary of remove_book
     * @param RemoveBook $request
     * @param int $bookId
     */
    public function remove_book (RemoveBook $request, int $bookId) {
        return TransactionUtil::transact($request, [], function() use ($bookId) {
            $result = $this->libraryBookManager->removeBook($bookId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    /**
     * Summary of create_or_update_book
     * @param CreateOrUpdateBookRequest $request
     */
    public function create_or_update_book (CreateOrUpdateBookRequest $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $isPost = $request->httpMethod === "POST";
            $catalogId = $request->catalogId;
            $bookId = $request->bookId;

            $result = $this->libraryBookManager->createOrUpdate($request, $isPost, $bookId, $catalogId);
            return response()->json(['message' => $result['message'], 'returnedData' => $result['returnedData']], $result['status']);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of get_copies
     * @param Request $request
     * @param int $book_id
     */
    public function get_copies (Request $request, int $book_id) {
        return TransactionUtil::transact(null, [], function() use ($book_id) {
            $bookCopies = BookCopy::withCount('hasData')
                ->with('book.catalog')
                ->where('book_id', operator: $book_id)
                ->get();
            return response()->json(['bookCopies' => $bookCopies], 200);
        });
    }

    /**
     * Summary of create_book_copies
     * @param CreateBookCopy $request
     */
    public function create_book_copies(CreateBookCopy $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $bookId = $request->bookId;
            $copies = $request->copies;

            $result = $this->libraryBookCopyManager->createBookCopies($bookId, $copies);
            return response()->json(['message' => "You've added book copies.", 'returnedData' => $result], 201);
        });
    }

    /**
     * Summary of update_book_copy
     * @param UpdateBookCopy $request
     */
    public function update_book_copy(UpdateBookCopy $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $bookCopyId = $request->bookCopyId;
            $status = $request->status;

            $this->libraryBookCopyManager->updateBookCopy($bookCopyId, $status);
            return response()->json(['message' => "Book copy has been updated."], 201);
        });
    }

    /**
     * Summary of remove_copy
     * @param RemoveBookCopy $request
     * @param int $bookCopyId
     */
    public function remove_copy (RemoveBookCopy $request, int $bookCopyId) {
        return TransactionUtil::transact($request, [], function() use ($request, $bookCopyId) {
            $result = $this->libraryBookCopyManager->removeBookCopy($bookCopyId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of get_book_entries
     * @param Request $request
     */
    public function get_book_entries (Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $genres = BookGenre::withCount('hasData')->get();
            return response()->json(['genres' => $genres], 200);
        });
    }

    /**
     * Summary of create_or_update_book_entry
     * @param CreateOrUpdateGenre $request
     */
    public function create_or_update_book_entry (CreateOrUpdateGenre $request) {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $isPost = $request->httpMethod === "POST";
            $bookEntryId = $request->bookEntryId;

            $result = $this->libraryBookEntryManager->createOrUpdate($request, $isPost, $bookEntryId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    /**
     * Summary of remove_entry
     * @param RemoveGenre $request
     * @param int $bookEntryId
     */
    public function remove_entry (RemoveGenre $request, int $bookEntryId) {
        return TransactionUtil::transact($request, [], function() use ($request, $bookEntryId) {
            $result = $this->libraryBookEntryManager->removeBookEntry($bookEntryId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }



    # 📍📍📍📍📍📍📍📍
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
                'hasBooksNeedAction' => $bookReservationCheck && \count($bookReservationCheck->library->borrowedBooks) > 0,
                'hasPendingReservation' => $bookReservationCheck && ($bookReservationCheck->extendingBooks && \count($bookReservationCheck->extendingBooks) > 0),
                'hasPendingFines' => $pendingFines
            ];

            return response()->json(['bookReservationCheck' => $count], 200);
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
                default => 'ERROR'
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
                 AdministratorAuditActions:: LIBRARYCTRL_UPDATED_LIBRARYBOOKRESERVREQ->value);

            if (env('USE_EVENT')) {
                event(new BELibrary(''), new BEAuditTrail(''));
            }

            return response()->json([AdministratorReturnResponse::LIBRARYCTRL_UPDATED_LIBRARYBOOKREQ->value], 201);
        });
    }

    /**
     * Summary of update_reservation
     * @param UpdateBookRequest $request
     */
    public function update_reservation(UpdateBookRequest $request){
        return TransactionUtil::transact($request, ["book_reservations_cache"], function() use ($request) {
            $reservation = BookReservation::where('id', $request->documentId)->lockForUpdate()->firstOrFail();
            $reservation->status = $request->status;

            if ($reservation->type === "HARD-COPY" && $reservation->book_copy_id === null) {
                $copy = BookCopy::where('status', 'AVAILABLE')->first();
                if (!$copy) return response()->json(['message' => "No available copies for this book."], 422);
                $reservation->book_copy_id = $copy->id;
            }

            $reservation->save();

            if ($reservation->book_copy_id) {
                $copy = BookCopy::where('id', $reservation->book_copy_id)->lockForUpdate()->firstOrFail();

                $copy->status = match(true) {
                    \in_array($request->status, ["RETURNED", "REJECTED", "CANCELLED"]) => "AVAILABLE",
                    \in_array($request->status, ["DAMAGED", "LOST"]) => $request->status,
                    \in_array($request->status, ["RECEIVED"]) => "BORROWED",
                    $request->status => "RESERVED",
                    default => $copy->status
                };
                $copy->save();
            }

            $hasActiveItems = BookReservation::where('book_res_id', $reservation->book_res_id)
                ->whereIn('status', ['PENDING', 'APPROVED', 'RECEIVED', 'EXTENDING', 'EXTENDED', 'RENEWING'])
                ->exists();

            if (!$hasActiveItems) {
                BookRes::where('id', $reservation->book_res_id)->update(['status' => 'FOR CSM']);
            }

            return response()->json(['message' => AdministratorReturnResponse::LIBRARYCTRL_UPDATED_LIBRARYBOOKREQ->value], 200);
        });
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
                'payee',
                'orNumber'
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

            if($libraryInvoice->invoice_status !== "PENDING") {
                return response()->json(['message' => AdministratorReturnResponse::LIBRARYCTRL_ERR_LIBRARYFINE->value], 400);
            } else {
                $libraryInvoice->delete();

                AuditHelper::log(
                    $request->user()->id,
                    AdministratorAuditActions::LIBRARYCTRL_REMOVED_LIBRARYFINE->value . " ID#$id"
                );

                return response()->json(['message' => AdministratorReturnResponse::LIBRARYCTRL_REMOVED_LIBRARYFINE->value], 200);
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

            if($isPost) {
                $new_fine->trace_number = GenerateTrace::createTraceNumber(LibraryInvoice::class, '-RFINE-', 'trace_number', 10, 99);
                $new_fine->user_id = $request->user_id;
                $new_fine->book_res_id = $request->book_res_id;
            } else {
                $new_fine->invoice_status = $request->status;
            }

            $new_fine->description = $request->details;
            $new_fine->invoice_amount = $request->amount;
            $new_fine->save();

            Notifications::notify($request->user()->id, $request->user_id, "LIBRARY", ($isPost ? 'created' : 'updated') . " a request fine for you.");
            AuditHelper::log(
                $request->user()->id,
                $isPost ? AdministratorAuditActions::LIBRARYCTRL_CREATED_LIBRARYREQUESTFINE->value : AdministratorAuditActions::LIBRARYCTRL_UPDATED_LIBRARYREQUESTFINE->value . " ID#$new_fine->id"
            );

            if(env('USE_EVENT')) {
                event(
                    new BELibrary(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => ($isPost ? AdministratorReturnResponse::LIBRARYCTRL_CREATED_LIBRARYREQUESTFINE->value : AdministratorReturnResponse::LIBRARYCTRL_UPDATED_LIBRARYREQUESTFINE->value). " a request fine ID#" . $new_fine->id], 201);
        });
    }

    //edrascoe
    public function get_book_copy_activity(Request $request) {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $copy = BookCopy::where('book_id', $request->bookId)
                ->when($request->unique_identifier, fn($q) =>
                    $q->where('unique_identifier', $request->unique_identifier)
                )
                ->first();

            if (!$copy) {
                return response()->json(['message' => 'Book copy not found.'], 404);
            }
            $bookRes = BookRes::whereIn('status', [
                    BookRes::STATUS_ACTIVE,
                    BookRes::STATUS_FOR_CSM
                ])
                ->whereHas('borrowedBooks', fn($q) =>
                    $q->where('book_id', $copy->book_id)
                )
                ->with([
                    'trainee',
                    'borrowedBooks' => fn($q) =>
                        $q->where('book_id', $copy->book_id)
                        ->latest()
                        ->limit(1)
                ])
                ->first();

            $reservation = $bookRes?->borrowedBooks->first();

            return response()->json([
                'bookCopyActivity' => [
                    'copy_id'           => $copy->id,
                    'unique_identifier' => $copy->unique_identifier,
                    'copy_status'       => $copy->status,
                    'activity'          => $bookRes ? [
                        'reservation_status' => $bookRes->status,
                        'type'               => $reservation?->type,
                        'from_date'          => $reservation?->from_date,
                        'to_date'            => $reservation?->to_date,
                        'action_by'          => $copy->status === 'BORROWED' ? 'BORROWED' : 'RESERVED',
                        'reserved_at'        => $bookRes->created_at,
                        'trainee'            => [
                            'id'    => $bookRes->trainee?->id,
                            'name'  => $bookRes->trainee?->name,
                            'email' => $bookRes->trainee?->email,
                        ]
                    ] : null,
                ]
            ], 200);
        });
    }
}

