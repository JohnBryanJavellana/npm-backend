<?php

namespace App\Services\Administrator\Library;

use App\Enums\AdministratorReturnResponse;
use App\Models\BookGenre;
use App\Utils\DocumentExistenceChecker;


class LibraryBookEntryManager
{
    public function __construct(
        public DocumentExistenceChecker $documentExistenceChecker
    ) {}

    /**
     * Summary of createOrUpdate
     * @param object $payload
     * @param bool $isPost
     * @param mixed $bookEntryId
     * @return array{message: string, status: int}
     */
    public function createOrUpdate(object $payload, bool $isPost, ?int $bookEntryId)
    {
        $isBookEntryExists = $this->documentExistenceChecker->checkForExistence(BookGenre::class, [
            'name' => $payload->name,
            'category' => $payload->category
        ], $bookEntryId);

        if($isBookEntryExists) {
            return ['message' => "Book Entry already exist.", 'status' => 409];
        }

        BookGenre::updateOrCreate(['id' => $bookEntryId], $payload->only([
            'name',
            'category',
            'status'
        ]));

        return [
            'message' => $isPost
                ? AdministratorReturnResponse::LIBRARYCTRL_CREATED_LIBRARYBOOKENTRY->value
                : AdministratorReturnResponse::LIBRARYCTRL_UPDATED_LIBRARYBOOKENTRY->value,
            'status' => 200
        ];
    }

    /**
     * Summary of removeBookEntry
     * @param int $bookEntryId
     * @return array{message: string, status: int}
     */
    public function removeBookEntry(int $bookEntryId) {
        BookGenre::findOrFail($bookEntryId)->delete();
        return [
            'message' => AdministratorReturnResponse::LIBRARYCTRL_REMOVED_LIBRARYBOOKENTRY->value,
            'status' => 200
        ];
    }
}
