<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    //
    protected $fillable=[
        'numero_abonnement',
        'nom_client',
        'telephone',
        'date_abonnement',
        'mois',
        'automobile',
        'numero_immatricule',
        'statut'
    ];
}
