@extends('layout.app')
@section('content')
<div class=" container mb-3 mt-3">
<h3 class="text-center">Liste des lavages</h3>
<a href="/ajouter-lavage" class="btn btn-primary">Enregistrer un lavage</a>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id_lavage</th>
      <th scope="col">Numero_immatricule</th>
      <th scope="col">Automobile</th>
      <th scope="col">Nom_proprietaire</th>
      <th scope="col">Telephone</th>
      <th scope="col">Date_depot</th>
      <th scope="col">Heure</th>
      <th scope="col">Montant</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
  @foreach($lavages as $lavage)
    <tr>
      <th scope="row">{{ $lavage->id }}</th>
      <td>{{ $lavage->numero_immatriculation }}</td>
      <td>{{ $lavage->automobile }}</td>
      <td>{{ $lavage->nom_proprietaire }}</td>
      <td>{{ $lavage->telephone }}</td>
      <td>{{ $lavage->date_depot }}</td>
      <td>{{ $lavage->heure }}</td>
      <td>{{ $lavage->montant }}</td>
      <td>
      <a class="btn btn-warning" href="/modif_form/{{$lavage->id}}"><i class="bi bi-pencil"></i></a>
      <a class="btn btn-danger" href=""><i class="bi bi-trash"></i></a>

      </td>


    </tr>

    @endforeach
  </tbody>
</table>
@endsection