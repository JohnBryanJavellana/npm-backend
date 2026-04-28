<?php

namespace App\Models;

use App\Enums\RequestStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DormitoryTenant extends Model 
{
    protected $guarded = ['id'];
    
    protected $fillable = [
        'dormitory_room_id', 
        'user_id', 
        'trace_number', 
        'check_in_datetime', 
        'check_out_datetime',
        'accommodation', 
        'status_of_occupancy', 
        'room_type', 
        'tenant_status', 
        'process_type',
        'purpose',
        'remarks',
        'payment_remarks',
        'offset_check_out_date',
        'transfer_type',
    ];

    protected $casts = [
        'check_in_datetime' => 'datetime',
        'check_out_datetime' => 'datetime',
        'offset_check_out_date' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public const MALE = "MALE";
    public const FEMALE = "FEMALE";
    public const COUPLE = "COUPLE";

    // Main relationship for room (camelCase - preferred for Laravel)
    public function dormitoryRoom(): BelongsTo
    {
        return $this->belongsTo(DormitoryRoom::class, 'dormitory_room_id');
    }

    // Alias for snake_case version (for backward compatibility)
    public function dormitory_room(): BelongsTo
    {
        return $this->dormitoryRoom();
    }

    public function boarder(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function trainee(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tenant_invoices(): HasMany
    {
        return $this->hasMany(DormitoryInvoice::class, 'dormitory_tenant_id');
    }

    public function dormitory_histories(): HasMany
    {
        return $this->hasMany(DormitoryTenantHistory::class, 'dormitory_tenant_id');
    }

    public function transferRequest(): HasMany
    {
        return $this->hasMany(DormitoryTransfer::class, 'dormitory_tenant_id');
    }

    public function extendRequest(): HasMany
    {
        return $this->hasMany(DormitoryExtensionRequest::class, 'dormitory_tenant_id');
    }

    public function borrowedItems(): HasMany
    {
        return $this->hasMany(DormitoryItemBorrowing::class);
    }

    public function coupleSupportingDocuments()
    {
        return $this->hasMany(DormitoryTenantSupDoc::class);
    }

    public function services()
    {
        return $this->hasMany(DormitoryReqService::class, 'dormitory_tenant_id');
    }

    public function isExpired()
    {
        return $this->tenant_to_date < now();
    }

    /**
     * SCOPES
     */
    public function scopeForUser($query, int $userId)
    {
        return $query->where("user_id", $userId);
    }

    public function scopeForStatus($query, array $status)
    {
        return $query->whereIn("tenant_status", $status);
    }

    public function scopeActive(Builder $query)
    {
        return $query->whereIn("tenant_status", RequestStatus::ActiveDomitoryRequests());
    }

    public function scopeApprovedActive(Builder $query)
    {
        return $query->whereIn("tenant_status", [RequestStatus::APPROVED->value, RequestStatus::ACTIVE->value]);
    }
}