<?php

namespace App\Services\Trainee\Recreational;

use App\Models\Equipment;
use App\Models\Facility;

class RecreationalService {
    public function __construct(
        protected Equipment $equipmentModel,
        protected Facility $facilityModel
    ) {}

    public function getEquipments()
    {
        return $this->equipmentModel->query()
        ->withCount([
            "inventories" => function($query) {
                $query->where([
                    "condition_status" => "GOOD",
                    "availability_status" => "AVAILABLE"
                ]);
            },
        ])
        ->with([
            "relatedFacility"
        ])
        ->available()
        ->get();
    }
}