<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "latitude",
        "longitude",
        "comments",
        "proprietor",
        "type",
        "supervisor",
        "city",
        "country",
        "departement",
        "quartier",
        "zone",
        "owner"
    ];

    function Owner(): BelongsTo
    {
        return $this->belongsTo(User::class, "owner");
    }

    function Proprietor(): BelongsTo
    {
        return $this->belongsTo(Proprietor::class, "proprietor");
    }

    function Type(): BelongsTo
    {
        return $this->belongsTo(HouseType::class, "type");
    }

    function Supervisor(): BelongsTo
    {
        return $this->belongsTo(User::class, "supervisor");
    }

    function City(): BelongsTo
    {
        return $this->belongsTo(City::class, "city");
    }

    function Country(): BelongsTo
    {
        return $this->belongsTo(Country::class, "country");
    }

    function Departement(): BelongsTo
    {
        return $this->belongsTo(Departement::class, "departement");
    }

    function Quartier(): BelongsTo
    {
        return $this->belongsTo(Quarter::class, "quartier");
    }

    function Zone(): BelongsTo
    {
        return $this->belongsTo(Zone::class, "proprietor");
    }
}
