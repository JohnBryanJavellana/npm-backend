<?php

namespace App\Services\Administrator\Cashier;

use App\Enums\Administrator\CashierEnum;
use App\Enums\AdministratorReturnResponse;
use App\Models\ChargeCategory;
use App\Utils\DocumentExistenceChecker;

class CashierChargeCategoryManager
{
    public function __construct(
        public DocumentExistenceChecker $documentExistenceChecker
    ) {}

    /**
     * Summary of createOrUpdate
     * @param object $payload
     * @param bool $isPost
     * @return array{message: string, status: int}
     */
    public function createOrUpdate(object $payload, bool $isPost, ?int $documentId) {
        $isChargeCategoryExists = $this->documentExistenceChecker->checkForExistence(ChargeCategory::class, ['name' => $payload->name], $documentId);

        if($isChargeCategoryExists) {
            return ['message' => "Charge Category already exist.", 'status' => 409];
        }

        $this_or = ChargeCategory::updateOrCreate( ['id' => $documentId], $payload->only([
            'name'
        ]));

        return [
            'message' => $isPost
                ? AdministratorReturnResponse::CASHIERCTRL_CREATED_CHARGECATEGORY->value
                : AdministratorReturnResponse::CASHIERCTRL_UPDATED_CHARGECATEGORY->value . "ID#$this_or->id",
            'status' => 200
        ];
    }

    /**
     * Summary of removeChargeCategory
     * @param int $chargeCategoryId
     * @return array{message: string, status: int}
     */
    public function removeChargeCategory(int $chargeCategoryId) {
        $this_charge_category = ChargeCategory::withCount([
            'hasData',
        ])->lockForUpdate()->findOrFail($chargeCategoryId);

        if($this_charge_category->has_data_count > 0) {
            return [
                'message' => AdministratorReturnResponse::CASHIERCTRL_ERR_CHARGECATEGORY->value,
                'status' => 409
            ];
        }

        $this_charge_category->delete();
        return [
            'message' => AdministratorReturnResponse::CASHIERCTRL_REMOVED_CHARGECATEGORY->value,
            'status' => 200
        ];
    }
}
