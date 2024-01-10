<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    function Owner(): BelongsTo
    {
        return $this->belongsTo(User::class, "owner");
    }

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

    function Houses(): HasMany
    {
        return $this->hasMany(House::class, "proprietor")->with(["Rooms"]);
    }
}
