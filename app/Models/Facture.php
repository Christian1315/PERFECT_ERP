<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Facture extends Model
{
    use HasFactory;

    protected $fillable = [
        "owner",
        "payement",
        "location",
        "type",
        "status",
        "facture",
        "comments",
        "amount",
        "begin_date",
        "end_date",
    ];

    function Owner(): BelongsTo
    {
        return $this->belongsTo(User::class, "owner");
    }

    function Location(): BelongsTo
    {
        return $this->belongsTo(Location::class, "location");
    }

    function Type(): BelongsTo
    {
        return $this->belongsTo(FactureType::class, "type");
    }

    function Status(): BelongsTo
    {
        return $this->belongsTo(FactureStatus::class, "status");
    }

    function Payement(): BelongsTo
    {
        return $this->belongsTo(Payement::class, "payement");
    }
}
