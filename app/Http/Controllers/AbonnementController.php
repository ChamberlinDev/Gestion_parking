<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbonnementController extends Controller
{
    //
    public function contact(){
        return view('contact');
    } 
    
    public function liste(){
        return view('Abonnement.liste');
    }

    public function ajoutForm(){
        return view('Abonnement.ajouter');
    }
}
