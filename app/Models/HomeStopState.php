<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HomeStopState extends Model
{
    use HasFactory;

    protected $table = "home_stop_states";
    protected $fillable = [
        "owner",
        "house",
        "stats_stoped_day",
    ];

    function Owner(): BelongsTo
    {
        return $this->belongsTo(User::class, "owner");
    }

    function House(): BelongsTo
    {
        return $this->belongsTo(House::class, "house");
    }
}
