<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Locataire extends Model
{
    use HasFactory;

    protected $fillable = [
        "owner",
        "email",
        "sexe",
        "prenom",
        "phone",
        "piece_number",
        "mandate_contrat",
        "comments",
        "name",
        "adresse",
        "card_id",
        "card_type",
        "departement",
        "country",
    ];

    function Owner(): BelongsTo
    {
        return $this->belongsTo(User::class, "owner");
    }

    function CardType(): BelongsTo
    {
        return $this->belongsTo(CardType::class, "card_type");
    }

    function Departement(): BelongsTo
    {
        return $this->belongsTo(Departement::class, "departement");
    }

    function Country(): BelongsTo
    {
        return $this->belongsTo(Country::class, "country");
    }
}
