<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Authenticated\Trainee\TraineeLibrary;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Library\CreateBookCopy;
use App\Http\Requests\Admin\Library\GetBookCopyRecords;
use App\Http\Requests\Admin\Library\GetProlongationRequests;
use App\Http\Requests\Admin\Library\RemoveBook;
use App\Http\Requests\Admin\Library\RemoveBookCopy;
use App\Http\Requests\Admin\Library\RemoveFine;
use App\Http\Requests\Admin\Library\RemoveGenre;
use App\Http\Requests\Admin\Library\UpdateBookCopy;
use App\Http\Requests\Admin\Library\UpdateProlongationRequest;
use App\Http\Requests\Trainee\Library\ExtendingRequest;
use App\Http\Requests\Trainee\Library\RenewBookRequest;
use App\Services\Administrator\Library\LibraryBookCopyManager;
use App\Services\Administrator\Library\LibraryBookEntryManager;
use App\Services\Administrator\Library\LibraryBookFinesManager;
use App\Services\Administrator\Library\LibraryBookManager;
use App\Services\Administrator\Library\LibraryBookReservationManager;
use App\Services\Administrator\Library\LibraryProlongationManager;
use Illuminate\Http\JsonResponse;
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
use App\Models\{
    Book,
    Training,
    BookRes,
    BookGenre,
    BookCopy,
    BookReservation,
    ExtensionRequest,
    LibraryInvoice,
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
        public LibraryBookEntryManager $libraryBookEntryManager,
        public LibraryBookReservationManager $libraryBookReservationManager,
        public LibraryBookFinesManager $libraryBookFinesManager,
        public LibraryProlongationManager $libraryProlongationManager
    ){
        $this->traineeCtrlInstance = $traineeLibrary;
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of count_book_reservation
     * @param Request $request
     */
    public function count_book_reservation (Request $request): JsonResponse
    {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $reservations = BookRes::query();

            $count = [
                'total'     => CountCollection::startCount($reservations),
                'pending'   => CountCollection::startCount($reservations->clone()->where('status', LibraryEnum::PENDING)),
                'active'    => CountCollection::startCount($reservations->clone()->where('status', LibraryEnum::ACTIVE)),
                'for_csm'   => CountCollection::startCount($reservations->clone()->where('status', LibraryEnum::FOR_CSM)),
                'extending' => CountCollection::startCount($reservations->clone()->whereHas('borrowedBooks', fn($query) => $query->where('status', LibraryEnum::EXTENDING))),
                'renewing'  => CountCollection::startCount($reservations->clone()->whereHas('borrowedBooks', fn($query) => $query->where('status', LibraryEnum::RENEWING))),
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
    public function get_book_reservation(Request $request): JsonResponse
    {
        $query = BookRes::with([
            'trainee',
            'csm.user',
            'borrowedBooks.book',
            'borrowedBooks.books.catalog.genre',
        ])
        ->when($request->userId, fn($q) => $q->where('user_id', $request->userId))
        ->when($request->type, fn ($q, $type) => \in_array($type, ['EXTENDING', 'RENEWING'])
            ? $q->whereHas('borrowedBooks', fn($sub) => $sub->where('status', $type))
            : $q->where('status', $type)
        );

        $reservations = $request->traceNumber
            ? $query->where('trace_number', $request->traceNumber)->first()
            : $query->latest()->get();

        return response()->json(['reservations' => $reservations], 200);
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of submit_extension_request
     * @param ExtendingRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function submit_extension_request (ExtendingRequest $request): JsonResponse
    {
        return $this->traineeCtrlInstance->extend($request);
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of submit_renewal_request
     * @param RenewBookRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function submit_renewal_request (RenewBookRequest $request): JsonResponse
    {
        return $this->traineeCtrlInstance->renew($request);
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of create_walkin_request
     * @param BookRequest $request
     */
    public function create_walkin_request (BookRequest $request): JsonResponse
    {
        return $this->traineeCtrlInstance->send_request_book($request);
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of get_books
     * @param Request $request
     */
    public function get_books (Request $request): JsonResponse
    {
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
    public function get_book_info (Request $request, int $book_id): JsonResponse
    {
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
     * Summary of create_or_update_book
     * @param CreateOrUpdateBookRequest $request
     */
    public function create_or_update_book (CreateOrUpdateBookRequest $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $isPost = $request->httpMethod === "POST";
            $catalogId = $request->catalogId;
            $bookId = $request->bookId;

            $result = $this->libraryBookManager->createOrUpdate($request, $isPost, $bookId, $catalogId);
            return response()->json(['message' => $result['message'], 'returnedData' => $result['returnedData']], $result['status']);
        });
    }

    /**
     * Summary of remove_book
     * @param RemoveBook $request
     * @param int $bookId
     */
    public function remove_book (RemoveBook $request, int $bookId): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($bookId) {
            $result = $this->libraryBookManager->removeBook($bookId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    /**
     * Summary of get_pre_data
     * @param Request $request
     */
    public function get_pre_data (Request $request): JsonResponse
    {
        return TransactionUtil::transact(null, [], function() {
            $genres = BookGenre::where('status', 'ACTIVE')
                ->orderBy('category', 'ASC')
                ->get();

            $trainings = Training::with(['module', 'module.moduleType'])->get();
            return response()->json(['genres' => $genres, 'trainings' => $trainings], 200);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of get_copies
     * @param Request $request
     * @param int $book_id
     */
    public function get_copies (Request $request, int $book_id): JsonResponse
    {
        return TransactionUtil::transact(null, [], function() use ($book_id) {
            $bookCopies = BookCopy::withCount('hasData')
                ->with('book.catalog')
                ->where('book_id', $book_id)
                ->get();
            return response()->json(['bookCopies' => $bookCopies], 200);
        });
    }

    /**
     * Summary of create_book_copies
     * @param CreateBookCopy $request
     */
    public function create_book_copies(CreateBookCopy $request): JsonResponse
    {
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
    public function update_book_copy(UpdateBookCopy $request): JsonResponse
    {
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
    public function remove_copy (RemoveBookCopy $request, int $bookCopyId): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request, $bookCopyId) {
            $result = $this->libraryBookCopyManager->removeBookCopy($bookCopyId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    /**
     * Summary of get_book_copy_activity
     * @param GetBookCopyRecords $request
     */
    public function get_book_copy_activity(GetBookCopyRecords $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $bookCopyId = $request->bookCopyId;
            $book_reservation_with_this_copy = BookReservation::where('book_copy_id', $bookCopyId)
                ->with([ 'bookRes.trainee' ])
                ->latest()
                ->get();

            return response()->json([ 'bookCopyRecords' => $book_reservation_with_this_copy ], 200);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of get_book_entries
     * @param Request $request
     */
    public function get_book_entries (Request $request): JsonResponse
    {
        return TransactionUtil::transact(null, [], function() use ($request) {
            $genres = BookGenre::withCount('hasData')->get();
            return response()->json(['genres' => $genres], 200);
        });
    }

    /**
     * Summary of create_or_update_book_entry
     * @param CreateOrUpdateGenre $request
     */
    public function create_or_update_book_entry (CreateOrUpdateGenre $request): JsonResponse
    {
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
    public function remove_entry (RemoveGenre $request, int $bookEntryId): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request, $bookEntryId) {
            $result = $this->libraryBookEntryManager->removeBookEntry($bookEntryId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of update_reservation
     * @param UpdateBookRequest $request
     */
    public function update_reservation(UpdateBookRequest $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $reservationId = $request->bookReservationId;
            $status = $request->status;

            $result = $this->libraryBookReservationManager->updateReservation($reservationId, $status);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of get_fines
     * @param Request $request
     */
    public function get_fines(Request $request): JsonResponse
    {
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
     * Summary of create_fine
     * @param RequestFine $request
     */
    public function create_or_update_fine(RequestFine $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $isPost = $request->httpMethod === "POST";
            $libraryInvoiceId = $request->libraryInvoiceId;

            $result = $this->libraryBookFinesManager->createOrUpdate($request, $isPost, $libraryInvoiceId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    /**
     * Summary of remove_fine
     * @param RemoveFine $request
     * @param int $libraryInvoiceId
     */
    public function remove_fine (RemoveFine $request, int $libraryInvoiceId): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($libraryInvoiceId) {
            $result = $this->libraryBookFinesManager->removeFine($libraryInvoiceId);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    # ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
    /**
     * Summary of get_prolongation_request
     * @param Request $request
     */
    public function get_prolongation_request (GetProlongationRequests $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $prolongationMain = BookReservation::with([
                'bookRes',
                'books',
                'bookRes.trainee',
                'books.catalog',
                'books.catalog.genre'
            ])->where([
                'book_res_id' => $request->bookResId
            ])->whereIn('status', $request->status)->get();

            return response()->json(['prolongationRequests' => $prolongationMain], 200);
        });
    }

    /**
     * Summary of get_books_that_protractible
     * @param Request $request
     */
    public function get_books_that_protractible (Request $request): JsonResponse
    {
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
     * @param Request $request
     */
    public function update_prolongation_request(UpdateProlongationRequest $request): JsonResponse
    {
        return TransactionUtil::transact($request, [], function() use ($request) {
            $prolongationRequestId = $request->prolongationRequestId;
            $status = $request->status;
            $acceptedStatus = $request->acceptedStatus;
            $targetDateTime = $request->targetDateTime;

            $result = $this->libraryProlongationManager->updateProlongationRequest($prolongationRequestId, $status, $acceptedStatus, $targetDateTime);
            return response()->json(['message' => $result['message']], $result['status']);
        });
    }

    # 📍📍📍📍📍📍📍📍
    /**
     * Summary of check_for_book_reservation
     * @param Request $request
     */
    public function check_for_book_reservation (Request $request): JsonResponse
    {
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
}

