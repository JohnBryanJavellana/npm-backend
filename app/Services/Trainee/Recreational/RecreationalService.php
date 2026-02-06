<?php

namespace App\Services\Trainee\Recreational;

use App\Models\RAEquipmentRequest;
use App\Models\RAEquipments;

class RecreationalService {
    public function __construct(
        protected RAEquipments $raequipmentsModel,
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
            "images:id,r_a_equipments_id,filename",
            "relatedFacility.facility",
        ])
        ->available()
        ->get(["id", "name", "additional_details", "availability_status"]);
    }

    public function getFacilities()
    {
        return;
    }


    public function storeRecreationalRequests()
    {
        
    }
}