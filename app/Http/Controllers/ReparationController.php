<?php

namespace App\Http\Controllers;

use App\Models\Reparation;
use Illuminate\Http\Request;

class ReparationController extends Controller
{
    //
    public function liste(){
        $reparations=Reparation::all();
        return view('Reparations.liste', compact('reparations'));
    }

    public function ajoutForm(){
        return view('Reparations.ajouter');
    }
    public function modif_form($id){
        $reparation=Reparation::find($id);
        return view('Reparations.update', compact('reparation'));
    }
    public function ajout_save(Request $request){
        $request->validate([
            'numero_immatriculation'=>'required',
            'automobile'=>'required',
            'nom_proprietaire'=>'required',
            'telephone'=>'required',
            'date_depot'=>'required',
            'heure'=>'required',
            'type_panne'=>'required',
            'montant'=>'required'
        ]);

        $reparation=new Reparation();
        $reparation->numero_immatriculation=$request->numero_immatriculation;
        $reparation->automobile=$request->automobile;
        $reparation->nom_proprietaire=$request->nom_proprietaire;
        $reparation->telephone=$request->telephone;
        $reparation->date_depot=$request->date_depot;
        $reparation->heure=$request->heure;
        $reparation->type_panne=$request->type_panne;
        $reparation->montant=$request->montant;

        $reparation->save();
        return redirect('/liste-reparation');

    }

    public function update_reparation(Request $request, $id){
        $reparation=Reparation::find($id);
        $request->validate([
            'numero_immatriculation'=>'required',
            'automobile'=>'required',
            'nom_proprietaire'=>'required',
            'telephone'=>'required',
            'date_depot'=>'required',
            'heure'=>'required',
            'type_panne'=>'required',
            'montant'=>'required'
        ]);

        $reparation->numero_immatriculation=$request->numero_immatriculation;
        $reparation->automobile=$request->automobile;
        $reparation->nom_proprietaire=$request->nom_proprietaire;
        $reparation->telephone=$request->telephone;
        $reparation->date_depot=$request->date_depot;
        $reparation->heure=$request->heure;
        $reparation->type_panne=$request->type_panne;
        $reparation->montant=$request->montant;

        $reparation->update();
        return redirect('/liste-reparation');


    }
}
