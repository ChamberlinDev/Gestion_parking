<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reparation extends Model
{
    //
    protected $fillable=[
        'numero_immatriculation',
        'automobile',
        'nom_proprietaire',
        'telephone',
        'date_depot',
        'heure',
        'type_panne',
        'montant'
    ];
}
