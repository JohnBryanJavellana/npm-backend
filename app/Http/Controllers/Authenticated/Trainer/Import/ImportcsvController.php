<?php

namespace App\Http\Controllers\Authenticated\Trainer\Import;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Attendance, AttendanceRecord, User};

class ImportcsvController extends Controller
{
    // public function ImportCSV(Request $request)
    // {
    //     $request->validate([
    //         'file' => 'required|mimes:csv,txt',
    //         'training_id' => 'required'
    //     ]);

    //     $attendance = Attendance::where('training_id', $request->training_id)
    //         ->whereDate('training_date', now()->toDateString())
    //         ->firstOrFail();

    //     $rows = array_map('str_getcsv', file($request->file('file')->getRealPath()));
    //     array_shift($rows);

    //     foreach ($rows as $row) {

    //         $user = User::where('student_id', $row[0])
    //             ->where('role', 'TRAINEE')
    //             ->first();

    //         if (!$user) continue;

    //         AttendanceRecord::firstOrCreate(
    //             [
    //                 'attendance_id' => $attendance->id,
    //                 'user_id' => $user->id
    //             ],
    //             [
    //                 'status' => 'PRESENT',
    //                 'time_in' => now()
    //             ]
    //         );
    //     }

    //     return response()->json(['message' => 'CSV Imported Successfully']);
    // }

    public function ImportCSV(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv',
            'training_id' => 'required'
        ]);

        $attendance = Attendance::where('training_id', $request->training_id)
            ->whereDate('training_date', now())
            ->first();

        if (!$attendance) {
            return response()->json(['message' => 'No training today'], 404);
        }

        $rows = array_map('str_getcsv', file($request->file('file')));

        array_shift($rows); 

        foreach ($rows as $row) {

            $user = User::where('student_id', $row[0])
                ->where('role', 'TRAINEE')
                ->first();

            if ($user) {
                AttendanceRecord::create([
                    'attendance_id' => $attendance->id,
                    'user_id' => $user->id,
                    'status' => 'PRESENT',
                    'time_in' => now(),
                ]);
            }
        }

        return response()->json(['message' => 'Imported Successfully']);
    }
}
