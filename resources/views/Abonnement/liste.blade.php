@extends('layout.app')
@section('content')

<div class=" container mt-3">
  <h3 class="text-center">Liste des abonnements</h3>
<a href="/ajouter-abonnement" class="btn btn-primary">Ajouter un abonnement</a>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Numero d'abonnement</th>
      <th scope="col">Nom du proprietaire</th>
      <th scope="col">Telephone</th>
      <th scope="col">Automobile</th>
      <th scope="col">Numero immatricule</th>
      <th scope="col">Date d'abonnement</th>
      <th scope="col">Mois</th>
      <th scope="col">Montant</th>
      <th scope="col">Statut</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
@endsection