<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'house',
        'room',
        'locataire',
        'type',

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
        'owner'
    ];
}
