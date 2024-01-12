<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payement extends Model
{
    use HasFactory;

    protected $fillable = [
        "owner",
        "client",
        "module",
        "status",
        "type",
        "amount",
        "reference",
        "phone",
        "comments",
        "start_date",
        "end_date",
    ];

    function Owner(): BelongsTo
    {
        return $this->belongsTo(User::class, "owner");
    }

    function Module(): BelongsTo
    {
        return $this->belongsTo(PaiementModule::class, "module");
    }

    function Type(): BelongsTo
    {
        return $this->belongsTo(PaiementType::class, "type");
    }

    function Client(): BelongsTo
    {
        return $this->belongsTo(User::class, "client");
    }

    function Status(): BelongsTo
    {
        return $this->belongsTo(PaiementStatus::class, "status");
    }
}
