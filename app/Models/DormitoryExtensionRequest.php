<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class DormitoryExtensionRequest extends Model
{
    use HasFactory;

    protected $guarded = ["id"];
    protected $table = 'dormitory_extension_requests';
    
    protected $fillable = [
        'dormitory_tenant_id',
        'trace_number',
        'old_end_date',
        'new_end_date',
        'status',
        'purpose'
    ];
    
    protected $casts = [
        'old_end_date' => 'date',
        'new_end_date' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function tenant()
    {
        return $this->belongsTo(DormitoryTenant::class, "dormitory_tenant_id", "id");
    }
    public function dormitoryTenant(): BelongsTo
    {
        return $this->belongsTo(DormitoryTenant::class, 'dormitory_tenant_id');
    }

    /**
     * Scopes
     */

    public function scopeForUser(Builder $query, int $userId)
    {
        return $query->whereRelation("tenant","user_id", "=", $userId);
    }
    public function scopeStatus(Builder $query, array $status)
    {
        return $query->whereIn("status", $status);
    }
    
}
