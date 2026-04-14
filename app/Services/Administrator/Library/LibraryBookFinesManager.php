<?php

namespace App\Services\Administrator\Library;

use App\Enums\AdministratorReturnResponse;
use App\Models\LibraryInvoice;
use App\Utils\GenerateTrace;

class LibraryBookFinesManager
{
    /**
     * Summary of createOrUpdate
     * @param object $payload
     * @param bool $isPost
     * @param int $libraryInvoiceId
     * @return array{message: string, status: int}
     */
    public function createOrUpdate(object $payload, bool $isPost, ?int $libraryInvoiceId) {
        $preparedData = $payload->only(['user_id', 'book_res_id', 'description', 'invoice_amount', 'invoice_status']);

        if($isPost) {
            $preparedData['trace_number'] = GenerateTrace::createTraceNumber(LibraryInvoice::class, '-RFINE-', 'trace_number', 10, 99);
        }

        LibraryInvoice::updateOrCreate(['id' => $libraryInvoiceId], $preparedData);

        return [
            'message' => $isPost
                ? AdministratorReturnResponse::LIBRARYCTRL_CREATED_LIBRARYREQUESTFINE->value
                : AdministratorReturnResponse::LIBRARYCTRL_UPDATED_LIBRARYREQUESTFINE->value,
            'status' => 200
        ];
    }

    /**
     * Summary of removeFine
     * @param mixed $libraryInvoiceId
     * @return array{message: string, status: int}
     */
    public function removeFine($libraryInvoiceId) {
        LibraryInvoice::lockForUpdate()
            ->findOrFail($libraryInvoiceId)
            ->delete();

        return [
            'message' => AdministratorReturnResponse::LIBRARYCTRL_REMOVED_LIBRARYFINE->value,
            'status' => 200
        ];
    }
}
