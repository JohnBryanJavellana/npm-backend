<?php

namespace App\Services\Administrator\Dormitory;

use App\Enums\AdministratorReturnResponse;
use App\Jobs\SaveAvatar;
use App\Models\DormitoryRoom;
use App\Models\DormitoryRoomImage;
use App\Utils\AuditHelper;
use App\Enums\AdministratorAuditActions;
use App\Utils\GenerateTrace;
use App\Utils\RemoveFile;
use Illuminate\Database\Eloquent\Model;

class DormitoryRoomManager
{
    public function __construct(
        public RemoveFile $removeFile
    ) {}

    /**
     * Summary of createOrUpdate
     * @param mixed $payload
     * @param mixed $isPost
     */
    public function createOrUpdate(object $payload, bool $isPost) {
        $this_room = DormitoryRoom::updateOrCreate(['id' => $payload->documentId], $payload->only([
            'room_name',
            'room_slot',
            'dormitory',
            'room_type',
            'guest_gender',
            'wing',
            'floor',
            'room_cost',
            'accommodation',
            'guest_cost',
            'remarks'
        ]));

        $this->roomImages($this_room, $payload?->data_room_image ?? [], $payload?->room_image ?? []);
        AuditHelper::log(
            $payload->user()->id,
            $isPost
                ? AdministratorAuditActions::DORMITORYCTRL_CREATED_DORMITORY->value
                : AdministratorAuditActions::DORMITORYCTRL_UPDATED_DORMITORY->value . " ID#{$this_room->id}"
        );

        return $this_room;
    }

    /**
     * Summary of roomImages
     * @param mixed $roomInstance
     * @param array $oldImages
     * @param array $newImages
     * @return void
     */
    private function roomImages(Model $roomInstance, ?array $oldImages = [], array $newImages = []) {
        if($oldImages) {
            $roomInstance->roomImages()->whereNotIn('id', $oldImages)->get()->each(function($attachment) {
                $this->removeFile->removeFile("room-images/$attachment->filename");
            });

            $roomInstance->roomImages()->whereNotIn('id', $oldImages)->delete();
        }

        if(\count($newImages) > 0) {
            foreach($newImages as $image) {
                $image_name = GenerateTrace::createTraceNumber(DormitoryRoomImage::class, '-DRI-', 'filename') . '.png';
                $roomInstance->roomImages()->create([
                    'dormitory_room_id' => $roomInstance->id,
                    'filename' => $image_name
                ]);

                SaveAvatar::dispatch($image, $image_name, "room-images", false, true, '');
            }
        }
    }

    /**
     * Summary of removeRoom
     * @param mixed $currentUserId
     * @param int $roomId
     */
    public function removeRoom(int $currentUserId, int $roomId) {
        $thisRoom = DormitoryRoom::withCount([
            'hasData'
        ])->lockForUpdate()->findOrFail($roomId);

        if($thisRoom->has_data_count <= 0) {
            $this->roomImages($thisRoom, [], []);

            $thisRoom->delete();
            AuditHelper::log($currentUserId, AdministratorAuditActions::DORMITORYCTRL_REMOVED_DORMITORYROOM->value . " ID#$roomId");

            return [
                'message' => AdministratorReturnResponse::DORMITORYCTRL_REMOVED_DORMITORYROOM->value,
                'status' => 200
            ];
        }

        return [
            'message' => AdministratorReturnResponse::DORMITORYCTRL_ERR_DORMITORYROOM->value,
            'status' => 409
        ];
    }
}
