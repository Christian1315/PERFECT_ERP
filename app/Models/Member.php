<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "img",
        "phone",
        "email"
    ];

    function belong_to_organisation(): BelongsTo
    {
        return $this->belongsTo(Organisation::class, "organisation");
    }

    function belong_to_admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class, "admin");
    }
}
