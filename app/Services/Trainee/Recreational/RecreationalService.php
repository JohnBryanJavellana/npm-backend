<?php

namespace App\Services\Trainee\Recreational;

use App\Models\RAEquipments;

class RecreationalService {
    public function __construct(
        protected RAEquipments $raequipmentsModel
    ){}

    public function getEquipments()
    {
        return $this->raequipmentsModel->query()
        ->withCount([
            "stocks" => function($query) {
                $query->available()->okayCondition();
            },
        ])
        ->with([
            "relatedFacility"
        ])
        ->available()
        ->get();
    }

    public function getFacilities()
    {
        return;
    }
}