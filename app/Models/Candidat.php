<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Candidat extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "img",
        "description",
        "organisation"
    ];

    function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, "owner");
    }

    function belong_to_organisation(): BelongsTo
    {
        return $this->belongsTo(Organisation::class, "organisation");
    }
}
