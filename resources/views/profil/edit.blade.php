@extends('layout.app')
@section('content')

<div class="container mt-5">
    <h3 class="text-center text-black">Modification de vos informations</h3>
    <form action="/modif_profil" method="post">
        @csrf
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="">Nom utilisateur</label>
                <input type="text" name="name" class="form-control" value="{{$user->name}}" >
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" value="{{$user->email}}">
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-6">
            <div class="form-group">
                <label for="">Mot de passe</label>
                <input type="password" name="password" class="form-control" value="{{$user->password}}" >
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="">Confirmer mot de passe</label>
                <input type="password" name="confirm_password" class="form-control" >
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-warning mt-2">Modifier</button>
    </form>
    <ul class="mt-4">
        <li>
            <a href="/edit">
                <span>Modifier le compte</span>
            </a>
        </li>
        <li>
            <a href="">
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