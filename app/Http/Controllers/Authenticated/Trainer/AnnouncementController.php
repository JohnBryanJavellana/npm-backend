<?php

namespace App\Http\Controllers\Authenticated\Trainer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrainingScheduleAnnouncement;
use App\Utils\TransactionUtil;

class AnnouncementController extends Controller
{
    public function Announcement(Request $request)
    {

        if ($request->has('title') && $request->has('content')) {
            // Merge trainer & training_id
            $request->merge([
                // 'title' => $request->title,
                // 'content' => $request->content,
                "trainer" => $request->user()->id,
                "training_id" => (int) $request->training_id
            ]);

            // Validate creation data
            $validated = $request->validate([
                'training_id' => 'required|exists:trainings,id',
                'trainer'     => 'required|exists:users,id',
                'title'       => 'required|string|max:255',
                'content'     => 'required|string'
            ]);

            $announcement = TrainingScheduleAnnouncement::create([
                "training_id" => $validated["training_id"],
                "trainer"     => $request["trainer"],
                "title"       => $request["title"],
                "content"     => $request["content"]
            ]);

            return response()->json([
                "message" => "Announcement created successfully",
                "data" => $announcement
            ], 201);
        }

        $trainingId = $request->training_id;
        $announcements = TrainingScheduleAnnouncement::where('training_id', $trainingId)
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json([
            "message" => "Announcements fetched successfully",
            "data" => $announcements
        ], 200);
    }

    public function AnnouncementDelete(Request $request)
    {
        $id = $request->id;

        TrainingScheduleAnnouncement::where('id', $id)->delete();

        return response()->json([
            // "message" => "Announcement removed successfully",
            "deleted_id" => $id
        ], 200);
    }


    public function AnnouncementUpdate(Request $request)
    {
        $id = $request->id;

        TrainingScheduleAnnouncement::where('id', $id)->update([
            "title" => $request->title,
            "content" => $request->content
        ]);

        return response()->json([
            // "message" => "Announcement updated successfully",
            "update_id" => $id
        ], 200);
    }
}
