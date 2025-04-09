@extends('layout.app')
@section('content')
<div class="container mt-5">
    <h2 class="text-primary text-center mt-5">Modifier une reparation</h2>
    <hr>
   <form action="/update_reparation/{{$reparation->id}}" method="POST">
    @csrf
   <div class="row">
        <div class="col-6">
        <div class="form-group">
            <label for="">Numero d'immatriculation</label>
            <input type="text" name="numero_immatriculation" class="form-control" value="{{$reparation->numero_immatriculation}}">
        </div>
        </div>
        <div class="col-6">
                <div class="form-group">
                    <label for="">Type d'automobile</label>
                    <select name="automobile" id="automobile" class="form-control" value="{{$reparation->automobile}}" required>
                        <option value="">Sélectionnez un type</option>
                        <option value="voiture">Voiture</option>
                        <option value="moto">Moto</option>
                    </select>
                </div>
            </div>
        <div class="col-6">
        <div class="form-group">
            <label for="">Nom du proprietaire</label>
            <input type="text" class="form-control" name="nom_proprietaire" value="{{$reparation->nom_proprietaire}}">
        </div>
        </div>
        <div class="col-6">
        <div class="form-group">
            <label for="">Telephone</label>
            <input type="text" class="form-control" name="telephone" value="{{$reparation->telephone}}">
        </div>
        </div>
        <div class="col-6">
        <div class="form-group">
            <label for="">Date de depot</label>
            <input type="date" class="form-control" name="date_depot" value="{{$reparation->date_depot}}">
        </div>
        </div>
        <div class="col-6">
        <div class="form-group">
            <label for="">Heure</label>
            <input type="time" class="form-control" name="heure" value="{{$reparation->heure}}">
        </div>
        </div>
        <div class="col-6">
        <div class="form-group">
            <label for="">Type de panne</label>
            <input type="text" class="form-control" name="type_panne" value="{{$reparation->type_panne}}">
        </div>
        </div>
        <div class="col-6">
        <div class="form-group">
            <label for="">Montant</label>
            <input type="number" class="form-control" name="montant" value="{{$reparation->montant}}">
        </div>
        </div>

    </div>
    <button type="submit" class="btn btn-primary mt-3 mx-2">Modifier</button>
    <a class="btn btn-danger mt-3 mx-2" href="/liste-reparation">Annuler</a>

   </form>
</div>

@endsection