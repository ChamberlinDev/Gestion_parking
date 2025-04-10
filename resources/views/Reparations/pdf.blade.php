<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
     

    </tr>

    @endforeach
  </tbody>
</table>
</body>
</html>