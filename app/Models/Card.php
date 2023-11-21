<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        "consular",
        "mandate",
        "card_img",
        "reference",
        "company"
    ];

    function consular(): BelongsTo
    {
        return $this->belongsTo(ElectedConsular::class, "consular");
    }

    function mandate(): BelongsTo
    {
        return $this->belongsTo(Mandate::class, "mandate");
    }

    function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, "company");
    }
}
