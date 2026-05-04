<?php

namespace App\Console\Commands;

use App\Models\Credit;
use App\Models\DormitoryTenant;
use App\Utils\GenerateTrace;
use Carbon\Carbon;
use Illuminate\Console\Command;

class SetTenantAsOffset extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:set-tenant-as-offset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $today = Carbon::today()->startOfDay();
        $offsets = DormitoryTenant::whereDate('offset_check_out_date', $today)->get();

        foreach($offsets as $offset) {
            $offset->update([ 'tenant_status' => "OFFSET" ]);
            Credit::create([
                'user_id' => $offset->user_id,
                'reference_number' => GenerateTrace::createTraceNumber(Credit::class, '-CREDIT-', 'reference_number'),
                'reason' => 'OFFSET GUEST',
                'type' => 'CREDIT',
                'amount' => 999
            ]);

            $offset->boarder()->increment('credits', 999);
        }
    }
}
