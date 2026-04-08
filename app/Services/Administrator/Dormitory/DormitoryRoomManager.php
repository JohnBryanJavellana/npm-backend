<?php

namespace App\Services\Administrator\Dormitory;

use App\Enums\AdministratorReturnResponse;
use App\Jobs\SaveAvatar;
use App\Models\DormitoryRoom;
use App\Models\DormitoryRoomImage;
use App\Utils\AuditHelper;
use App\Enums\AdministratorAuditActions;
use App\Utils\GenerateTrace;
use App\Utils\TransactionUtil;
use Illuminate\Database\Eloquent\Model;

class DormitoryRoomManager
{
    /**
     * Summary of createOrUpdate
     * @param mixed $payload
     * @param mixed $isPost
     */
    public function createOrUpdate(object $payload, bool $isPost) {
        // For creation, generate a new trace number. For update, find by ID.
        $this_room = DormitoryRoom::updateOrCreate(
            ['id' => $payload->documentId],
            $payload->only([
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
            ])
        );

        // Handle room images separately since they require file handling and may involve multiple records.
        $this->roomImages($this_room, $payload?->data_room_image, $payload?->room_image);

        // Log the appropriate audit action based on whether it's a creation or update.
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
        // If there are old images, delete the records that are not in the oldImages array and also delete the files from storage.
        if($oldImages) {
            $roomInstance->roomImages()->whereNotIn('id', $oldImages)->get()->each(function($attachment) {
                if(file_exists(public_path("room-images/$attachment->filename"))) {
                    unlink(public_path("room-images/$attachment->filename"));
                }
            });

            $roomInstance->roomImages()->whereNotIn('id', $oldImages)->delete();
        }

        // If there are new images, create new records for them and save the files to storage.
        if(\count($newImages) > 0) {
            foreach($newImages as $image) {
                $image_name = GenerateTrace::createTraceNumber(DormitoryRoomImage::class, '-DRI-', 'filename') . '.png';
                $roomInstance->roomImages()->create([
                    'dormitory_room_id' => $roomInstance->id,
                    'filename' => $image_name
                ]);

                // Dispatch a job to save the image to storage. The SaveAvatar job is used here for simplicity.
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
        // Lock the room record for update and check if it has any related data (e.g., reservations).
        // If it does, return an error response. If not, delete the room and its images, and log the audit action.
        $thisRoom = DormitoryRoom::withCount([
            'hasData'
        ])->lockForUpdate()->findOrFail($roomId);

        // If there are no related data, delete the room images and the room itself.
        if($thisRoom->has_data_count <= 0) {
            $this->roomImages($thisRoom, [], []);

            $thisRoom->delete();
            AuditHelper::log($currentUserId, AdministratorAuditActions::DORMITORYCTRL_REMOVED_DORMITORYROOM->value . " ID#$roomId");

            // Return a success response indicating that the room has been deleted.
            return [
                'message' => AdministratorReturnResponse::DORMITORYCTRL_REMOVED_DORMITORYROOM->value,
                'status' => 200
            ];
        }

        // If there are related data, return an error response indicating that the room cannot be deleted.
        return [
            'message' => AdministratorReturnResponse::DORMITORYCTRL_ERR_DORMITORYROOM->value,
            'status' => 409
        ];
    }
}
