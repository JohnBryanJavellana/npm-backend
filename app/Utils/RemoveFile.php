<?php

namespace App\Utils;

class RemoveFile
{
    public static function removeFile(string $path)
    {
        if(file_exists(public_path($path))){
            unlink(public_path($path));
        }
    }
}
