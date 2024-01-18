<?php

namespace App\Models;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "name",
        'username',
        'email',
        'password',
        'organisation',
        "phone",
        "is_archive",
        "profil_id",
        "rang_id",
        "pass_code_active",
        "pass_code",
        "compte_actif",
        "active_compte_code",
        "organisation",
        "is_super_admin",
        "is_admin"
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    #ONE TO ONE/REVERSE RELATIONSHIP(UN UTILISATEUR NE PEUT QU'AVOIR UN SEUL RANG)
    function rang(): BelongsTo
    {
        return $this->belongsTo(Rang::class, 'rang_id');
    }

    #ONE TO MANY/INVERSE RELATIONSHIP (UN USER PEUT APPARTENIR A PLUISIEURS PROFILS)
    function profil(): BelongsTo
    {
        return $this->belongsTo(Profil::class, 'profil_id');
    }

    function my_admins(): HasMany
    {
        return $this->hasMany(Admin::class, "owner");
    }

    function as_admin(): HasOne
    {
        return $this->hasOne(Admin::class, "as_user");
    }

    function belong_to_organisation(): BelongsTo
    {
        return $this->belongsTo(Organisation::class, "organisation");
    }

    ####_____NEW FUNCTIONS
    function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, "roles_users", "user_id", "role_id");
    }

    function drts(): HasMany
    {
        return $this->hasMany(Right::class, "user_id")->with(["action", "rang", "profil"]);
    }

    function affected_rights(): BelongsToMany
    {
        // return $this->belongsToMany(Right::class, "user_id")->with(["rang", "action", "profil"]);
        return $this->belongsToMany(Right::class, "rights_users", "user_id", "right_id")->with(["rang", "action", "profil"]);
    }
}
