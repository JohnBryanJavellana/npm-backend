<?php

namespace App\Services\Administrator\Library;

use App\Enums\AdministratorReturnResponse;
use App\Models\BookCopy;
use App\Utils\GenerateTrace;

class LibraryBookCopyManager
{
    /**
     * Summary of createBookCopies
     * @param int $bookId
     * @param int $copies
     * @return array
     */
    public function createBookCopies(int $bookId, int $copies) {
        $qrs = [];
        $dataToInsert = [];

        for ($i = 0; $i < $copies; $i++) {
            $new_book_ui = GenerateTrace::createTraceNumber(BookCopy::class, '-BOOK-', 'unique_identifier', 10, 99);

            $dataToInsert[] = [
                'unique_identifier' => $new_book_ui,
                'book_id' => $bookId,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $qrs[] = $new_book_ui;
        }

        BookCopy::insert($dataToInsert);
        return $qrs;
    }

    /**
     * Summary of updateBookCopy
     * @param int $bookCopyId
     * @param string $status
     * @return bool|int
     */
    public function updateBookCopy(int $bookCopyId, string $status) {
        $this_book_copy = BookCopy::lockForUpdate()
            ->findOrFail($bookCopyId)
            ->update(['status' => $status]);

        return $this_book_copy;
    }

    /**
     * Summary of removeBookCopy
     * @param int $bookCopyId
     * @return array{message: string, status: int}
     */
    public function removeBookCopy(int $bookCopyId) {
        BookCopy::findOrFail($bookCopyId)->delete();
        return [
            'message' => AdministratorReturnResponse::LIBRARYCTRL_REMOVED_LIBRARYBOOKCOPY->value,
            'status' => 200
        ];
    }
}
