<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        "owner",
        "house",
        "nature",
        "type",
        "loyer",
        "number",
        "comments",

        "security",
        "rubbish",
        "vidange",
        "cleaning",
        "water_counter",
        "water_discounter",
        "electric_counter",
        "electric_discounter",
        "publish",
        "home_banner",

        "water_counter_text",
        "water_discounter_text",
        "principal_img",
        "total_amount",
        "visible",
        "delete_at"
    ];

    function Owner(): BelongsTo
    {
        return $this->belongsTo(User::class, "owner");
    }

    function House(): BelongsTo
    {
        return $this->belongsTo(House::class, "house");
    }

    function Nature(): BelongsTo
    {
        return $this->belongsTo(RoomNature::class, "nature");
    }

    function Type(): BelongsTo
    {
        return $this->belongsTo(RoomType::class, "type");
    }

    function Locations(): HasMany
    {
        return $this->hasMany(Location::class, "room")->with(["Locataire", "House", "Room","Type"]);
    }
}
