@extends('layout.app')
@section('content')

<div class="container mt-5">
    <h3 class="text-center text-black">Affichage de vos informations</h3>
    <hr>
    <form>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="">Nom utilisateur</label>
                <input type="text" name="name" class="form-control" value="{{$user->name}}" readonly>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" value="{{$user->email}}" readonly>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-6">
            <div class="form-group">
                <label for="">Mot de passe</label>
                <input type="password" name="password" class="form-control" value="{{$user->password}}" readonly>
            </div>
        </div>
    </div>
    </form>
    <ul class="mt-4">
        <li>
            <a href="/edit">
                <span>Modifier le compte</span>
            </a>
        </li>
        <li>
            <a href="/suppression-deconnexion">
                <span class="text-danger">Supprimer le compte</span>
            </a>
        </li>
        <li>
            <a href="">
                <span>Deconnexion</span>
            </a>
        </li>
    </ul>

</div>


@endsection