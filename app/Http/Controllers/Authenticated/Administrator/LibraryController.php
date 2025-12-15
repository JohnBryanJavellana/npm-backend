<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use App\Models\BookExtensionRequest;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
use App\Utils\TransactionUtil;
use Carbon\Carbon;
use App\Http\Requests\Admin\Library\{
    CreateOrUpdateBookRequest,
    CreateOrUpdateGenre,
    UpdateBookRequest,
    CreateWalkInRequest,
    ExtensionFormRequest
};
use App\Events\{
    BELibrary,
    BEAuditTrail
};
use App\Utils\{
    AuditHelper,
    ConvertToBase64,
    GenerateTrace
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
    ExtensionRequest
};

class LibraryController extends Controller
{
    public function get_books (Request $request) {
        return TransactionUtil::transact(null, function() {
            $ttl = now()->addMinutes(env('CACHE_DURATION'));
            $books = Cache::remember('books_cache', $ttl, function () {
                return Book::withCount('copies', 'hasData')->with([
                    'catalog',
                    'catalog.genre'
                ])->get();
            });

            return response()->json(['books' => $books], 200);
        });
    }

    public function create_or_update_book (CreateOrUpdateBookRequest $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $book_catalog = $request->httpMethod === "POST"
                ? new BookCatalog
                : BookCatalog::find($request->catalogId);

            $book_catalog->book_genre_id = $request->genre;
            $book_catalog->title = $request->title;
            $book_catalog->author = $request->author;
            $book_catalog->language = $request->language;
            $book_catalog->isbn = $request->isbn;
            $book_catalog->edition = $request->edition;
            $book_catalog->bibliography = $request->bibliography;
            $book_catalog->description = $request->description;
            $book_catalog->publication_year = $request->publicationYear;
            $book_catalog->save();

            $book = $request->httpMethod === "POST" ? new Book : Book::find($request->documentId);
            $book->book_catalog_id = $book_catalog->id;

            if($request->photo){
                $image_name = Str::uuid() . '.png';
                ConvertToBase64::generate($request->photo, 'image', "book-uploaded-files/image/$image_name");
                $book->photo = $image_name;
            }

            if($request->pdfCopy) {
                $pdf_name = Str::uuid() . '.pdf';
                ConvertToBase64::generate($request->pdfCopy, 'application', "book-uploaded-files/pdf/$pdf_name");
                $book->pdf_copy = $pdf_name;
            }

            $book->save();

            if($request->training_id) {
                BookTrainingRelated::where("book_id", $book->id)
                    ->whereNotIn('training_id', $request->training_id)->delete();

                foreach ($request->training_id as $tid){
                    $book_related = new BookTrainingRelated;
                    $book_related->book_id = $book->id;
                    $book_related->training_id = $tid;
                    $book_related->save();
                }
            } else {
                BookTrainingRelated::where("book_id", $book->id)->delete();
            }

            if($request->copies) {
                for ($i = 0; $i < $request->copies; $i++) {
                    $book_copy = new BookCopy;
                    $book_copy->unique_identifier = GenerateTrace::createTraceNumber(BookCopy::class, '-BOOK-', 'unique_identifier', 10, 99);
                    $book_copy->book_id = $book->id;
                    $book_copy->save();
                }
            }

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a book ID#" . $book->id);

            if(env('USE_EVENT')) {
                event(
                    new BELibrary(''),
                    new BEAuditTrail(''),
                );
            }

            // Cache::forget('books_cache');
            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'created' : 'updated') . " a book. ID#" . $book->id], 201);
        });
    }

    public function remove_book (Request $request, int $book_id) {
        return TransactionUtil::transact(null, function() use ($request, $book_id) {
            $this_book = Book::withCount(['hasData'])->where('id', $book_id)->first();

            if($this_book->has_data_count > 0) {
                return response()->json(['message' => "Can't remove book. It already has connected data."], 200);
            } else {
                if(file_exists(public_path('book-images/' . $this_book->photo))){
                    unlink(public_path('book-images/' . $this_book->photo));
                }

                $this_book->delete();
                AuditHelper::log($request->user()->id, "Removed a book ID#$book_id");

                if(env('USE_EVENT')) {
                    event(
                        new BELibrary(''),
                        new BEAuditTrail(''),
                    );
                }

                // Cache::forget('books_cache');
                return response()->json(['message' => "You've removed a book. ID#$book_id"], 200);
            }
        });
    }

    public function get_genres (Request $request) {
        return TransactionUtil::transact(null, function() {
            $ttl = now()->addMinutes(env('CACHE_DURATION'));
            $genres = Cache::remember('genres_cache', $ttl, function () {
                return BookGenre::withCount('hasData')->get();
            });

            return response()->json(['genres' => $genres], 200);
        });
    }

    public function create_or_update_genre (CreateOrUpdateGenre $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $this_genre = $request->httpMethod === "POST" ? new BookGenre : BookGenre::find($request->documentId);
            $this_genre->name = $request->name;
            if($request->status) $this_genre->status = $request->status;
            $this_genre->save();

            AuditHelper::log($request->user()->id, ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a book genre. ID#" . $this_genre->id);

            if(env('USE_EVENT')) {
                event(
                    new BELibrary(''),
                    new BEAuditTrail(''),
                );
            }

            // Cache::forget('genres_cache');
            return response()->json(['message' => "You've " . ($request->httpMethod === "POST" ? 'Created' : 'Updated') . " a book genre. ID#" . $this_genre->id], 201);
        });
    }

    public function remove_genre (Request $request, int $genre_id) {
        return TransactionUtil::transact(null, function() use ($request, $genre_id) {
            $this_book_genre = BookGenre::withCount(['hasData'])->where('id', $genre_id)->first();

            if($this_book_genre->has_data_count > 0) {
                return response()->json(['message' => "Can't remove book genre. It already has connected data."], 200);
            } else {
                $this_book_genre->delete();
                AuditHelper::log($request->user()->id, "Removed book genre. ID#$genre_id");

                if(env('USE_EVENT')) {
                    event(
                        new BELibrary(''),
                        new BEAuditTrail(''),
                    );
                }

                // Cache::forget('genres_cache');
                return response()->json(['message' => "You've removed a book genre. ID#$genre_id"], 200);
            }
        });
    }

    public function get_book_info (Request $request, int $book_id){
        return TransactionUtil::transact(null, function() use($request, $book_id) {
            $ttl = now()->addMinutes(env('CACHE_DURATION'));
            return Cache::remember("book_info_cache_$book_id", $ttl, function () use($request, $book_id) {
                $book = Book::where('id', $book_id)
                    ->withCount('copies', 'hasData')
                    ->with([
                        'related',
                        'related.training',
                        'catalog',
                        'catalog.genre'
                    ])->first();

                if ($request->boolean('getFileAsBlob') && $request->has('traceNumber') && $book) {
                    $filename = $book->pdf_copy ?? null;

                    $isMine = BookRes::where([
                        'user_id' => $request->user()->id,
                        'trace_number' => $request->traceNumber
                    ])
                    ->where('to_date', '>=', Carbon::now())
                    ->whereHas('borrowedBooks', function ($self) use($book_id) {
                        return $self->where([
                            'book_id' => $book_id,
                            'status' => 'RECEIVED'
                        ]);
                    })->exists();

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
            });
        });
    }

    public function get_copies (Request $request, int $book_id) {
        return TransactionUtil::transact(null, function() use ($book_id) {
            $ttl = now()->addMinutes(env('CACHE_DURATION'));
            $bookCopies = Cache::remember('book_copies_cache', $ttl, function () use($book_id) {
                return BookCopy::withCount('hasData')->where('book_id', operator: $book_id)->get();
            });

            return response()->json(['bookCopies' => $bookCopies], 200);
        });
    }

    public function remove_copy (Request $request, int $copy_id) {
        return TransactionUtil::transact(null, function() use ($request, $copy_id) {
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

                // Cache::forget('book_copies_cache');
                return response()->json(['message' => "You've removed book copy. ID#$copy_id"], 200);
            }
        });
    }

    public function count_book_reservation (Request $request){
        return TransactionUtil::transact(null, function() use ($request) {
            $ttl = now()->addMinutes(env('CACHE_DURATION'));
            $reservationCount = Cache::remember('count_book_reservation', $ttl, function () use($request) {
                $reservations = BookRes::query();

                if($request->userId) {
                    $reservations->where('user_id', $request->userId);
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

    public function check_for_book_reservation (Request $request){
        return TransactionUtil::transact(null, function() use ($request) {
            $ttl = now()->addMinutes(env('CACHE_DURATION'));
            $bookReservationCheck = Cache::remember('count_book_extensions_extension_cache_' . ($request->libraryId), $ttl, function () use($request) {
                $a = ExtensionRequest::where([
                    'book_res_id' => $request->libraryId,
                    'user_id' => $request->userId
                ])->with([
                    'extendingBooks' => function ($query) {
                        $query->where('status', "PENDING");
                    },
                    'library.borrowedBooks' => function ($query) {
                        $query->where('status', 'EXPIRED')
                              ->where('to_date', '<=', Carbon::now());
                    }
                ])->first();

                return [
                    'hasBooksNeedAction' => count($a->library->borrowedBooks) > 0,
                    'hasPendingReservation' => !is_null($a->extendingBooks)
                ];
            });

            return response()->json(['bookReservationCheck' => $bookReservationCheck], 200);
        });
    }

    public function get_book_reservation (Request $request) {
        return TransactionUtil::transact(null, function() use ($request) {
            $ttl = now()->addMinutes(env('CACHE_DURATION'));
            $reservationMain = Cache::remember('book_reservations_cache_' . ($request->traceNumber ?? $request->type), $ttl, function () use($request) {
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

                return $request->traceNumber
                    ? $reservations->where('trace_number', $request->traceNumber)->first()
                    : $reservations->orderBy('created_at', 'DESC')->get();
            });

            return response()->json(['reservations' => $reservationMain], 200);
        });
    }

    public function get_extension_request (Request $request) {
        return TransactionUtil::transact(null, function() use ($request) {
            $ttl = now()->addMinutes(env('CACHE_DURATION'));
            $extensionMain = Cache::remember('book_extensions_extension_cache_' . ($request->libraryId), $ttl, function () use($request) {
                return ExtensionRequest::with([
                    'extendingBooks',
                    'extendingBooks.bookReservation',
                    'extendingBooks.bookReservation.books',
                    'extendingBooks.bookReservation.books.catalog',
                    'extendingBooks.bookReservation.books.catalog.genre'
                ])->where([
                    'book_res_id' => $request->libraryId,
                    'user_id' => $request->userId
                ])->orderBy('created_at', 'DESC')->get();
            });

            return response()->json(['extensionRequests' => $extensionMain], 200);
        });
    }

    public function get_books_that_can_extend (Request $request) {
        return TransactionUtil::transact(null, function() use ($request) {
            $ttl = now()->addMinutes(env('CACHE_DURATION'));
            $booksThatCanExtend = Cache::remember('get_books_that_can_extend_' . ($request->libraryId . '_' . $request->userId), $ttl, function () use($request) {
                return BookReservation::with([
                    'bookRes',
                    'books',
                    'books.catalog',
                    'books.catalog.genre'
                ])->where([
                    'book_res_id' => $request->libraryId,
                    'status' => "RECEIVED"
                ])->whereRaw("DATEDIFF(to_date, from_date) < 12")->get();
            });

            return response()->json(['booksThatCanExtend' => $booksThatCanExtend], 200);
        });
    }

    public function submit_extension_request (ExtensionFormRequest $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $this_request = new ExtensionRequest;
            $this_request->user_id = $request->userId;
            $this_request->book_res_id = $request->bookResId;
            $this_request->purpose = $request->purpose;
            $this_request->save();

            foreach ($request->bookData as $value) {
                $this_book_extension_request = new BookExtensionRequest;
                $this_book_extension_request->book_reservation_id = $value['bookReservationId'];
                $this_book_extension_request->extension_request_id = $this_request->id;
                $this_book_extension_request->date_of_extension = $value['dateOfExtension'];
                $this_book_extension_request->current_to_date = $value['currentToDate'];
                $this_book_extension_request->save();

                $bookRes = BookReservation::find($value['bookReservationId']);
                $bookRes->status = 'EXTENDING';
                $bookRes->save();
            }

            $bookRes = BookRes::find($request->bookResId);
            $bookRes->status = 'EXTENDING';
            $bookRes->save();

            AuditHelper::log($request->user()->id, "Submitted a book reservation extension request. ID#" . $this_request->id);

            if(env('USE_EVENT')) {
                event(
                    new BELibrary(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've successfully submitted a book reservation extension request. ID#" . $this_request->id], 201);
        });
    }

    public function update_extension_request (Request $request) {
        return TransactionUtil::transact(null, function() use ($request) {
            $this_request = BookExtensionRequest::find($request->documentId);
            $this_request->status = $request->status;
            $this_request->save();

            $bR = BookReservation::find($this_request->book_reservation_id);
            $bR->status = "RECEIVED";
            if($request->status === "APPROVED") $bR->to_date = $this_request->date_of_extension;
            $bR->save();

            $checkIfNeedMainTableToUpdate = BookExtensionRequest::where('extension_request_id', $request->extensionReqId)
                ->whereIn("status", ['CANCELLED', 'APPROVED', 'REJECTED']);
            $isExist = $checkIfNeedMainTableToUpdate->clone()->exists();

            if($isExist) {
                $d = $checkIfNeedMainTableToUpdate->clone()->first();
                $bookRes = BookRes::find($d->extensionRequest->book_res_id);
                $bookRes->status = "ACTIVE";
                $bookRes->save();
            }

            AuditHelper::log($request->user()->id, "Updated a book reservation extension request.");

            if(env('USE_EVENT')) {
                event(
                    new BELibrary(''),
                    new BEAuditTrail(''),
                );
            }

            return response()->json(['message' => "You've successfully updated a book reservation extension request."], 201);
        });
    }

    public function update_reservation (UpdateBookRequest $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $this_book = BookReservation::find($request->documentId);
            $this_book->status = $request->status;
            $this_book->save();

            if(!is_null($this_book->book_copy_id)){
                $book_copy = BookCopy::find($this_book->book_copy_id);

                switch ($request->status) {
                    case in_array($request->status, ["RETURNED", "REJECTED", "CANCELLED"]):
                        $book_copy->status = "AVAILABLE";
                        break;

                    case in_array($request->status, ["DAMAGED", "LOST"]):
                        $book_copy->status = $request->status;
                        break;

                    case in_array($request->status, ["RECEIVED"]):
                        $book_copy->status = "BORROWED";
                        break;

                    default: break;
                }
                $book_copy->save();
            }

            $book_res = $this_book->whereHas('bookRes', function($q) use ($this_book){
                $q->where('id', $this_book->book_res_id);
            })
            ->whereNotIn('status', ['CANCELLED', 'REJECTED', 'LOST', 'DAMAGED', 'RETURNED'])
            ->exists();

            if(!$book_res) {
                $record = BookRes::find($this_book->book_res_id);
                $record->status = "FOR CSM";
                $record->save();
            }

            AuditHelper::log($request->user()->id, "Updated book reservation status. ID#" . $request->documentId);

            if(env('USE_EVENT')) {
                event(
                    new BELibrary(''),
                    new BEAuditTrail(''),
                );
            }

            // Cache::forget('book_reservations_cache');
            return response()->json(['message' => "You've updated a book request. ID#" . $request->documentId], 200);
        });
    }

    public function get_available_books (Request $request) {
        return TransactionUtil::transact(null, function() use ($request) {
            $ttl = now()->addMinutes(env('CACHE_DURATION'));

            $adjustedBooks = Cache::remember('available_books_cache', $ttl, function () use($request) {
                $user = User::findOrFail($request->userId);

                $record = EnrolledCourse::where('user_id', $user->id)
                    ->whereNotIn('enrolled_course_status', ['CANCELLED', 'DECLINED', 'COMPLETED', 'CSFB', 'IR'])
                    ->pluck('training_id');

                $books = Book::with(['catalog.genre'])
                    ->withCount(['copies' => function($query) {
                        return $query->where('status', 'AVAILABLE');
                    }])
                    ->where('status', 'ACTIVE');

                return $books->get()
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
                                ->forNotInUse()
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
                    })
                    ->sortBy(function ($book) {
                        $order = [
                            'RECOMMENDED' => 2,
                            'AVAILABLE' => 4,
                            'REQUESTED' => 1,
                            'OUT OF STOCK' => 3,
                        ];
                        return $order[$book->availabilityStatus] ?? 99;
                    })
                    ->values();
            });

            return response()->json(['books' => $adjustedBooks], 200);
        });
    }

    public function create_walkin_request (CreateWalkInRequest $request) {
        return TransactionUtil::transact($request, function() use ($request) {
            $bookReservations = BookReservation::forUser($request->user()->role === "TRAINER" ? $request->user()->id : $request->borrower)
                ->whereNotIn('status', ['CANCELLED', 'RETURNED', 'REJECTED'])
                ->whereIn('book_id', $request->bookId)
                ->exists();

            if ($bookReservations) {
                return response()->json(['message' => "Duplicate request detected. Borrower can only request each book once, check request list."],  412);
            } else {
                $book_res = new BookRes();
                $book_res->user_id = $request->user()->role === "TRAINER" ? $request->user()->id : $request->borrower;
                $book_res->trace_number = GenerateTrace::createTraceNumber(BookRes::class);
                $book_res->purpose = $request->purpose;
                $book_res->type = $request->type;
                $book_res->save();

                foreach($request->bookId as $book) {
                    $book_record = new BookReservation();
                    $is_e_copy = Book::where('id', $book)->whereNotNull('pdf_copy')->first();

                    $record = BookCopy::where(['book_id' => $book, 'status' => "AVAILABLE"])->first();

                    if (!$is_e_copy) {
                        if($record == null) {
                            return response()->json(['message' => 'One of the book(s) you requested has no available copies at the moment.'], 422);
                        }

                        $record->status = "RESERVED";
                        $record->save();
                    }

                    $book_record->from_date = $request->fromDate;
                    $book_record->to_date = $request->toDate;
                    $book_record->book_copy_id = $record?->id;
                    $book_record->book_res_id = $book_res->id;
                    $book_record->book_id = $book;
                    $book_record->save();
                }

                if(env("USE_EVENT")) {
                    event(
                        new BELibrary(''),
                        new BEAuditTrail('')
                    );
                }

                $action = $request->type === "WALK-IN"
                        ? strtolower($request->type) . " library request for User ID#" . ($request->user()->role === "TRAINER" ? $request->user()->id : $request->borrower)
                        : strtolower($request->type) . " library request";

                AuditHelper::log($request->user()->id, "Created " . $action);
                return response()->json(['message' => "You've created " . $action], 200);
            }
        });
    }

    public function get_pre_data (Request $request) {
        return TransactionUtil::transact(null, function() {
            $genres = BookGenre::withCount(['hasData'])->where('status', 'ACTIVE')->get();
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
}
