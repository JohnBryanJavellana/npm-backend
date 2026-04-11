<?php

namespace App\Services\Administrator\Library;

use App\Enums\AdministratorReturnResponse;
use App\Models\Book;
use App\Models\BookCatalog;
use App\Models\BookTrainingRelated;
use App\Utils\RemoveFile;
use App\Utils\SaveFile;
use Str;

class LibraryBookManager
{
    public function __construct(
        public RemoveFile $removeFile,
        public LibraryBookCopyManager $libraryBookCopyManager
    ) {}

    /**
     * Summary of createOrUpdate
     * @param object $payload
     * @param bool $isPost
     * @param mixed $bookId
     * @param mixed $catalogId
     * @return array{message: string, returnedData: array, status: int}
     */
    public function createOrUpdate(object $payload, bool $isPost, ?int $bookId, ?int $catalogId) {
        $catalog = BookCatalog::updateOrCreate(['id' => $catalogId], $payload->only([
            'book_genre_id',
            'title',
            'author',
            'abstract',
            'editor',
            'isbn',
            'publisher',
            'type',
            'call_number',
            'file_location',
            'pages',
            'price',
            'publication_year'
        ]));

        $bookData = [
            'book_catalog_id' => $catalog->id,
            'status' => $payload->status,
            'photo' => $payload->photo ? SaveFile::save($payload->photo, "book-uploaded-files/image") : null,
            'pdf_copy' => $payload->pdf_file ? SaveFile::save($payload->pdf_file, "book-uploaded-files/pdf") : null,
        ];

        $this_book = Book::updateOrCreate(['id' => $bookId], array_filter($bookData));
        $dataToReturn = $payload->copies && $payload->copies > 0
            ? $this->libraryBookCopyManager->createBookCopies($this_book->id, $payload->copies)
            : [];

        if (isset($payload->training_id)) {
            $this_book->trainings()->sync($payload->training_id);
        }

        return [
            'message' => $isPost
                ? AdministratorReturnResponse::LIBRARYCTRL_CREATED_LIBRARYBOOK->value
                : AdministratorReturnResponse::LIBRARYCTRL_UPDATED_LIBRARYBOOK->value,
            'status' => 200,
            'returnedData' => $dataToReturn
        ];
    }

    /**
     * Summary of removeBook
     * @param int $bookId
     * @return array{message: string, status: int}
     */
    public function removeBook(int $bookId) {
        $this_book = Book::lockForUpdate()->findOrFail($bookId);

        $this->removeFile->removeFile("book-uploaded-files/image/$this_book->photo");
        $this->removeFile->removeFile("book-uploaded-files/pdf/$this_book->pdf_copy");
        $this_book->delete();

        return [
            'message' => AdministratorReturnResponse::LIBRARYCTRL_REMOVED_LIBRARYBOOK->value,
            'status' => 200
        ];
    }
}
