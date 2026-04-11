<?php

namespace App\Utils;

use Illuminate\Support\Facades\File;

class SaveFile
{
    public static function save($file, $path)
    {
        try {
            if ($file) {
                $destination = public_path($path);
                $file_requested = $file;

                if (!File::exists($destination)) {
                    File::makeDirectory($destination, 0755, true);
                }

                $filename_requested = GenerateUniqueFilename::generate($file_requested);
                $file_requested->move($destination, $filename_requested);
                return $file_requested ? $filename_requested : null;
            }
        } catch (\Exception $e) {
            return response()->json(['message' => "Something went wrong! Please try again"], 422);
        }
    }
}
