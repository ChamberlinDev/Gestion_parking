@extends('layout.app')
@section('content')


<div class="container mt-5">
  <h3 class="text-center">Liste des reparations</h3>
</div>
<div class="mt-3">
<a href="/ajouter-reparation" class=" btn btn-primary">Ajouter un reparation</a>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id_reparation</th>
      <th scope="col">Numero_immatricule</th>
      <th scope="col">Automobile</th>
      <th scope="col">Nom_proprietaire</th>
      <th scope="col">Telephone</th>
      <th scope="col">Date_depot</th>
      <th scope="col">Heure</th>
      <th scope="col">Type_panne</th>
      <th scope="col">Montant</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
  @foreach($reparations as $reparation)
    <tr>
      <th scope="row">{{ $reparation->id }}</th>
      <td>{{ $reparation->numero_immatriculation }}</td>
      <td>{{ $reparation->automobile }}</td>
      <td>{{ $reparation->nom_proprietaire }}</td>
      <td>{{ $reparation->telephone }}</td>
      <td>{{ $reparation->date_depot }}</td>
      <td>{{ $reparation->heure }}</td>
      <td>{{ $reparation->type_panne }}</td>
      <td>{{ $reparation->montant }}</td>
      <td>
      <a class="btn btn-warning" href="/modif_form/{{$reparation->id}}"><i class="bi bi-pencil"></i></a>
      <a class="btn btn-danger" href=""><i class="bi bi-trash"></i></a>

      </td>


    </tr>

    @endforeach
  </tbody>
</table>
@endsection