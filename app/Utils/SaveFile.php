<?php

namespace App\Utils;

class SaveFile
{
    public static function save($file, $path)
    {
        try {
            if($file){
                $file_requested = $file;

                \Log::info('🌵2', ['' => $file_requested]);
                \Log::info('🌵3', ['' => $path]);

                $filename_requested = GenerateUniqueFilename::generate($file_requested);
                $file_requested->move(public_path($path), $filename_requested);

                \Log::info('🌵', ['' => $file_requested]);

                return $file_requested ? $filename_requested : null;
            }
        } catch(\Exception $e) {
            throw $e;
            return response()->json(['message' => "Something went wrong! Please try again"], 422);
        }
    }
}
