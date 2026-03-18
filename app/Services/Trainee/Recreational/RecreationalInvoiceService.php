<?php

namespace App\Services\Trainee\Recreational;

use App\Models\RAInvoices;

class RecreationalInvoiceService {
    public function __construct(
        protected RAInvoices $raInvoiceModel
    ) {}

    public function getUserInvoice($userId)
    {
        return $this->raInvoiceModel->query()
        ->forUser($userId)
        ->pending()
        ->get();
    }
}