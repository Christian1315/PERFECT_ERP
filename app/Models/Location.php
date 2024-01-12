<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'house',
        'room',
        'locataire',
        'type',
        "status",
        "payment_mode",

        "moved_by",
        "move_date",
        "move_comments",

        "suspend_by",
        "suspend_date",
        "suspend_comments",

        'caution_bordereau',
        'loyer',
        'water_counter',
        'water_counter',
        'prestation',
        'numero_contrat',

        'comments',
        'img_contrat',
        'caution_water',
        'echeance_date',
        'latest_loyer_date',
        'electric_counter',
        'img_prestation',
        'caution_electric',
        'integration_date',
        'owner',
        'visible',
        "delete_at",
        "caution_number",
        "total_amount"
    ];

    function Owner(): BelongsTo
    {
        return $this->belongsTo(User::class, "owner");
    }

    function House(): BelongsTo
    {
        return $this->belongsTo(House::class, "house")->with(["Owner", "Proprietor", "Type", "Supervisor", "City", "Country", "Departement", "Quartier", "Zone"]);
    }

    function Locataire(): BelongsTo
    {
        return $this->belongsTo(Locataire::class, "locataire")->with(["Owner", "CardType", "Departement", "Country"]);
    }

    function Type(): BelongsTo
    {
        return $this->belongsTo(LocationType::class, "type");
    }

    function Status(): BelongsTo
    {
        return $this->belongsTo(LocationStatus::class, "status");
    }

    function Room(): BelongsTo
    {
        return $this->belongsTo(Room::class, "room")->with(["Owner", "House", "Nature", "Type"]);
    }
}
