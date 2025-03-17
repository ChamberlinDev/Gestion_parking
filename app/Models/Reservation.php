<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    protected $fillable=[
        'numero_immatricule',
        'automobile',
        'nom_client',
        'telephone',
        'date_reservation',
        'heure',
        'montant'
    ];
}
