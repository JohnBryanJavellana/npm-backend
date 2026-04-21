<?php

namespace App\Utils;

use File;

class ConvertToBase64 {
    public static function generate ($base64String, $type, $filename) {
        $base64String = preg_replace('/^data:' . $type . '\/\w+;base64,/', '', $base64String);
        $decodedString = base64_decode($base64String, true);

        if ($decodedString === false) {
            throw new \Exception('Base64 decoding failed');
        }

        if (!file_put_contents($filename, $decodedString)) {
            throw new \Exception('Failed to save image');
        }

        return $filename;
    }
}
