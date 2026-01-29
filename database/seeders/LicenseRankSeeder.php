<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{
    License,
    Rank
};

class LicenseRankSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $licenses = [
            ['license' => 'Master Mariner', 'short_name' => 'MM'],
            ['license' => 'Chief Mate', 'short_name' => 'CM'],
            ['license' => 'Officer-in-Charge of a Navigational Watch', 'short_name' => 'OIC-NW'],
            ['license' => 'GMDSS Radio Operator', 'short_name' => 'GMDSS'],
            ['license' => 'Chief Engineer Officer', 'short_name' => 'CEO'],
            ['license' => 'Second Engineer Officer', 'short_name' => '2EO'],
            ['license' => 'Officer-in-Charge of an Engineering Watch', 'short_name' => 'OIC-EW'],
            ['license' => 'Electro-Technical Officer', 'short_name' => 'ETO'],
        ];

        $ranks = [
            ['name' => 'Captain / Master', 'short_name' => 'CAPT', 'type' => 'Deck Officer'],
            ['name' => 'Chief Officer', 'short_name' => 'C/O', 'type' => 'Deck Officer'],
            ['name' => 'Second Officer', 'short_name' => '2/O', 'type' => 'Deck Officer'],
            ['name' => 'Third Officer', 'short_name' => '3/O', 'type' => 'Deck Officer'],
            ['name' => 'Deck Cadet', 'short_name' => 'D/CDT', 'type' => 'Deck Officer'],
            ['name' => 'Boatswain (Bosun)', 'short_name' => 'BSN', 'type' => 'Deck Rating'],
            ['name' => 'Able Seafarer Deck', 'short_name' => 'AB', 'type' => 'Deck Rating'],
            ['name' => 'Ordinary Seaman', 'short_name' => 'OS', 'type' => 'Deck Rating'],
            ['name' => 'Chief Engineer', 'short_name' => 'C/E', 'type' => 'Engine Officer'],
            ['name' => 'Second Engineer', 'short_name' => '2/E', 'type' => 'Engine Officer'],
            ['name' => 'Third Engineer', 'short_name' => '3/E', 'type' => 'Engine Officer'],
            ['name' => 'Fourth Engineer', 'short_name' => '4/E', 'type' => 'Engine Officer'],
            ['name' => 'Engine Cadet', 'short_name' => 'E/CDT', 'type' => 'Engine Officer'],
            ['name' => 'Fitter', 'short_name' => 'FTR', 'type' => 'Engine Rating'],
            ['name' => 'Oiler / Motorman', 'short_name' => 'OLR', 'type' => 'Engine Rating'],
            ['name' => 'Wiper', 'short_name' => 'WPR', 'type' => 'Engine Rating'],
            ['name' => 'Chief Cook', 'short_name' => 'CK', 'type' => 'Steward'],
            ['name' => 'Messman', 'short_name' => 'MSM', 'type' => 'Steward'],
        ];

        foreach ($licenses as $license) {
            $main_license = new License();
            $main_license->license = $license['license'];
            $main_license->short_name = $license['short_name'];
            $main_license->save();
        }

        foreach ($ranks as $rank) {
            $main_rank = new Rank();
            $main_rank->name = $rank['name'];
            $main_rank->short_name = $rank['short_name'];
            $main_rank->type = $rank['type'];
            $main_rank->save();
        }
    }
}
