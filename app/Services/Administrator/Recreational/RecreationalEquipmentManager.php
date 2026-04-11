<?php

namespace App\Services\Administrator\Recreational;

use App\Enums\AdministratorReturnResponse;
use App\Models\RAEquipments;
use App\Models\RAEquipmentStock;
use App\Utils\GenerateTrace;
use App\Utils\RemoveFile;
use App\Utils\SaveFile;

class RecreationalEquipmentManager
{
    public function __construct(
        public RemoveFile $removeFile
    ) {}

    /**
     * Summary of createEquipmentCopies
     * @param int $equipmentId
     * @param int $copies
     * @return string[]
     */
    public function createEquipmentCopies(int $equipmentId, int $copies) {
        $qrs = [];
        $dataToInsert = [];

        for ($i = 0; $i < $copies; $i++) {
            $new_book_ui = GenerateTrace::createTraceNumber(RAEquipmentStock::class, '-RAE-', 'unique_identifier', 10, 99);

            $dataToInsert[] = [
                'unique_identifier' => $new_book_ui,
                'r_a_equipments_id' => $equipmentId,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $qrs[] = $new_book_ui;
        }

        RAEquipmentStock::insert($dataToInsert);
        return $qrs;
    }

    /**
     * Summary of createOrUpdate
     * @param object $payload
     * @param bool $isPost
     * @param mixed $equipmentId
     * @return array{message: string, returnedData: string[], status: int}
     */
    public function createOrUpdate(object $payload, bool $isPost, ?int $equipmentId) {
        $this_equipment = RAEquipments::updateOrCreate(['id' => $equipmentId], $payload->only([
            'name',
            'additional_details',
            'availability_status'
        ]));

        $this_equipment->images()->whereNotIn('id', $payload->oldPhotosId)->get()->each(function($attachment) {
            $this->removeFile->removeFile("recreational-activity/inventory/image/$attachment->filename");
            $attachment->delete();
        });

        $dataToReturn = isset($payload->stock) ? $this->createEquipmentCopies($this_equipment->id, $payload->stock) : [];

        if($payload->hasFile('photos')) {
            $photoData = collect($payload->file('photos'))->map(fn($photo) => [
                'filename' => SaveFile::save($photo, "recreational-activity/inventory/image/"),
            ])->toArray();

            $this_equipment->images()->createMany($photoData);
        }

        return [
            'message' => $isPost
                ? AdministratorReturnResponse::RECREATIONALACTIVITYCTRL_CREATED_RECREATIONALACTIVITYEQUIPMENT->value
                : AdministratorReturnResponse::RECREATIONALACTIVITYCTRL_UPDATED_RECREATIONALACTIVITYEQUIPMENT->value,
            'status' => 200,
            'returnedData' => $dataToReturn
        ];
    }

    /**
     * Summary of removeEquipment
     * @param int $equipmentId
     * @return array{message: string, status: int}
     */
    public function removeEquipment(int $equipmentId) {
        $this_equipment = RAEquipments::findOrFail($equipmentId);

        $this_equipment->images()->get()->each(function($image) {
            $this->removeFile->removeFile("recreational-activity/equipment/image/$image->filename");
            $image->delete();
        });

        $this_equipment->delete();

        return [
            'message' => AdministratorReturnResponse::RECREATIONALACTIVITYCTRL_REMOVED_RECREATIONALACTIVITYEQUIPMENT->value,
            'status' => 200
        ];
    }
}
