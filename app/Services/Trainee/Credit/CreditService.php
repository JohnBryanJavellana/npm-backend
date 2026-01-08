<?php

namespace App\Services\Trainee\Credit;

use App\Models\Credit;

class CreditService {   
    public function __construct(
        private Credit $creditModel
    )
    {}

    public function getUserAudit($userId)
    {
        return $this->creditModel->forUser($userId)->get();
    }

    public function storeUserAudit($validated, $userId)
    {
        $this->creditModel->create([
            "user_id" => $userId,
            "reference_number" => $validated["ref_number"],
            "reason" => config("creditReason.deduct.0"),
            "type" => "DEDUCT",
            "total_amount" => $validated["total_amount"],
        ]);
    }
}