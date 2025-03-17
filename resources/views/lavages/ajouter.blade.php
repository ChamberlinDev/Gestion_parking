@extends('layout.app')
@section('content')
<div class="container mt-5">
    <h2 class="text-primary text-center mt-5">Enregistrer un lavage</h2>
    <hr>
    <form action="/ajout_save" method="POST">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Numéro d'immatriculation</label>
                    <input type="text" name="numero_immatriculation" class="form-control" placeholder="exemple: DK-3234-T" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Type d'automobile</label>
                    <select name="automobile" id="automobile" class="form-control" required>
                        <option value="">Sélectionnez un type</option>
                        <option value="voiture">Voiture</option>
                        <option value="moto">Moto</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Nom du propriétaire</label>
                    <input type="text" class="form-control" name="nom_proprietaire" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Téléphone</label>
                    <input type="text" class="form-control" name="telephone" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Date de dépôt</label>
                    <input type="date" class="form-control" name="date_depot" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Heure</label>
                    <input type="time" class="form-control" name="heure" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Montant</label>
                    <input type="text" class="form-control" name="montant" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3 mx-2">Enregistrer</button>
        <a class="btn btn-danger mt-3 mx-2" href="/liste">Annuler</a>
    </form>
</div>
@endsection
