<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">


    <title>Document lavage</title>
</head>
<body>
    <h3 class="text-center">Liste des lavages</h3>
    <table class="table table-border">
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
        </tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>