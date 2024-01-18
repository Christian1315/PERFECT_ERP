<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PaiementInitiation extends Model
{
    use HasFactory;

    protected $fillable = [
        "manager",
        "status",
        "amount",
        "comments",
        "proprietor"
    ];


    function Manager(): BelongsTo
    {
        return $this->belongsTo(User::class, "manager");
    }

    function Status(): BelongsTo
    {
        return $this->belongsTo(PaiementInitiationStatus::class, "status");
    }

    function Proprietor(): BelongsTo
    {
        return $this->belongsTo(Proprietor::class, "proprietor");
    }
}
