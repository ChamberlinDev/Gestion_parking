<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;
use App\Models\Lavage;
use App\Models\Reparation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function home(){
        $user= Auth::user();

        $nbre_lavage=Lavage::count();
        $nbre_reparation=Reparation::count();
        $nbre_abonement=Abonnement::count();
        return view('home', compact('nbre_lavage', 'nbre_reparation', 'nbre_abonement'));
    }
}
