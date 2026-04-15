<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DormitoryTransfer extends Model
{
    use HasFactory;
    
    protected $table = 'dormitory_transfers';
    
    protected $fillable = [
        'dormitory_tenant_id',
        'processed_by',
        'trace_number',
        'accommodation',
        'status_of_occupancy',
        'room_type',
        'status',
        'process_type',
        'reason'
    ];
    
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected $guarded = ["id"];

    // Keep this one with return type (better for IDE support)
    public function dormitoryTenant(): BelongsTo
    {
        return $this->belongsTo(DormitoryTenant::class, 'dormitory_tenant_id');
    }

    // Or keep this one without return type (simpler)
    // public function tenant()
    // {
    //     return $this->belongsTo(DormitoryTenant::class, "dormitory_tenant_id", "id");
    // }

    public function processedByUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'processed_by');
    }

    /** Scopes */
    public function scopeForUser(Builder $query, int $userId)
    {
        return $query->whereRelation("dormitoryTenant", "user_id", "=", $userId);
    }

    public function scopeForTenant(Builder $query, int $documentId)
    {
        return $query->where("dormitory_tenant_id", $documentId);
    }
    
    public function scopeStatus(Builder $query, array $status)
    {
        return $query->whereIn("status", $status);
    }
}