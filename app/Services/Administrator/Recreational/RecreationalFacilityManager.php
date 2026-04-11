<?php

namespace App\Services\Administrator\Recreational;

use App\Enums\AdministratorReturnResponse;
use App\Models\RAFacility;
use App\Utils\GenerateTrace;
use App\Utils\RemoveFile;
use App\Utils\SaveFile;

class RecreationalFacilityManager
{
    public function __construct(
        public RemoveFile $removeFile
    ) {}

    /**
     * Summary of createOrUpdate
     * @param object $payload
     * @param bool $isPost
     * @param mixed $facilityId
     * @return array{message: string, status: int}
     */
    public function createOrUpdate(object $payload, bool $isPost, ?int $facilityId) {
        $preparedData = $payload->only(['name', 'additional_details', 'location', 'open_time', 'close_time', 'condition_status', 'availability_status']);

        if($isPost) {
            $preparedData['unique_identifier'] = GenerateTrace::createTraceNumber(RAFacility::class, '-RAF-', 'unique_identifier', 10, 99);
        }

        $this_facility = RAFacility::updateOrCreate(['id' => $facilityId], $preparedData);

        $this_facility->images()->whereNotIn('id', $payload->oldPhotosId)->get()->each(function($attachment) {
            $this->removeFile->removeFile("recreational-activity/facility/image/$attachment->filename");
            $attachment->delete();
        });

        if (isset($payload->related_equipment)) {
            $this_facility->relationshipToEquipment()->sync($payload->related_equipment);
        }

        if($payload->hasFile('photos')) {
            $photoData = collect($payload->file('photos'))->map(fn($photo) => [
                'filename' => SaveFile::save($photo, "recreational-activity/facility/image/"),
            ])->toArray();

            $this_facility->images()->createMany($photoData);
        }

        return [
            'message' => $isPost
                ? AdministratorReturnResponse::RECREATIONALACTIVITYCTRL_CREATED_RECREATIONALACTIVITYFACILITY->value
                : AdministratorReturnResponse::RECREATIONALACTIVITYCTRL_UPDATED_RECREATIONALACTIVITYFACILITY->value,
            'status' => 200
        ];
    }

    /**
     * Summary of removeFacility
     * @param int $facilityId
     * @return array{message: string, status: int}
     */
    public function removeFacility(int $facilityId) {
        $this_facility = RAFacility::findOrFail($facilityId);

        $this_facility->images()->get()->each(function($image) {
            $this->removeFile->removeFile("recreational-activity/facility/image/$image->filename");
            $image->delete();
        });

        $this_facility->delete();

        return [
            'message' => AdministratorReturnResponse::RECREATIONALACTIVITYCTRL_REMOVED_RECREATIONALACTIVITYFACILITY->value,
            'status' => 200
        ];
    }
}
