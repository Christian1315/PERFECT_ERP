<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Proprietor extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'email',
        'sexe',
        'piece_number',
        'mandate_contrat',
        'comments',
        'adresse',
        'city',
        'country',
        'card_type',
        "owner"
    ];

    function City(): BelongsTo
    {
        return $this->belongsTo(City::class, "city");
    }

    function Country(): BelongsTo
    {
        return $this->belongsTo(Country::class, "country");
    }

    function TypeCard(): BelongsTo
    {
        return $this->belongsTo(CardType::class, "card_type");
    }
}