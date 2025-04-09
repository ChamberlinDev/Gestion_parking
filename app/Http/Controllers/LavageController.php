<?php

namespace App\Http\Controllers;

use App\Models\Lavage;
use Illuminate\Http\Request;

class LavageController extends Controller
{
    //
    public function ajoutForm(){
        return view('lavages.ajouter');
    }
    public function liste(){
        $lavages=Lavage::all();
        return view('lavages.liste', compact('lavages'));
    }
    public function modif_form($id){
        $lavage=Lavage::find($id);
        return view('lavages.update', compact('lavage'));
    }

    public function ajout_save(Request $request){
        $request->validate([
            'numero_immatriculation'=>'required',
            'automobile'=>'required',
            'nom_proprietaire'=>'required',
            'telephone'=>'required',
            'date_depot'=>'required',
            'heure'=>'required',
            'montant'=>'required'
        ]);

        $lavage=new Lavage();
        $lavage->numero_immatriculation=$request->numero_immatriculation;
        $lavage->automobile=$request->automobile;
        $lavage->nom_proprietaire=$request->nom_proprietaire;
        $lavage->telephone=$request->telephone;
        $lavage->date_depot=$request->date_depot;
        $lavage->heure=$request->heure;
        $lavage->montant=$request->montant;

        $lavage->save();
        return redirect('/liste-lavage');

    }

    public function update_lavage(Request $request, $id){
        $lavage=Lavage::find($id);
        $request->validate([
            'numero_immatriculation'=>'required',
            'automobile'=>'required',
            'nom_proprietaire'=>'required',
            'telephone'=>'required',
            'date_depot'=>'required',
            'heure'=>'required',
            'montant'=>'required'
        ]);
        $lavage->numero_immatriculation=$request->numero_immatriculation;
        $lavage->automobile=$request->automobile;
        $lavage->nom_proprietaire=$request->nom_proprietaire;
        $lavage->telephone=$request->telephone;
        $lavage->date_depot=$request->date_depot;
        $lavage->heure=$request->heure;
        $lavage->montant=$request->montant;

        $lavage->update();
        return redirect('/liste-lavage');

    }
}
