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
        // \Log::info("data", [$request->all()]);
        $request->merge([
            "trainer" => $request->user()->id,
            "training_id" => (int) $request->training_id
        ]);
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
            "data"
            => $announcement,
            201
        ]);
    }
}
