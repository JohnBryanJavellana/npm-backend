<?php

namespace App\Services\Administrator\Dormitory;

use App\Models\DormitoryTenant;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;

class DormitoryOffsetManager
{
    /**
     * Summary of setOffsetDate
     * @param object $offsetDate
     * @param int $dormitoryTenantId
     * @return array{message: string, status: int}
     */
    public function setOffsetDate(string $offsetDate, int $dormitoryTenantId): array
    {
        DormitoryTenant::lockForUpdate()
            ->whereKey($dormitoryTenantId)
            ->update(['offset_check_out_date' => Carbon::parse($offsetDate)]);

        return ['message' => 'Success!', 'status' => Response::HTTP_OK];
    }
}
