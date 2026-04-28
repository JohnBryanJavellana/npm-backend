<?php
namespace App\Utils;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class GenerateQR {
    protected $manager;

    public function __construct() {
        $this->manager = new ImageManager(new Driver());
    }

    public function generate($filename, $content, $qrText = null, $path) {
        $qr_path = public_path($path . $filename);

        QrCode::format('png')
            ->size(500)
            ->style('round')
            ->margin(1)
            ->backgroundColor(255, 255, 255)
            ->generate($content, $qr_path);

        $img = $this->manager->read($qr_path)->resizeCanvas(500, 560, 'ffffff', false);
        return $img->save($qr_path);
    }
}
