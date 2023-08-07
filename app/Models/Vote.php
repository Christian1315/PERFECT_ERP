<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "organisation",
        "status",
    ];

    function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, "owner");
    }
}
