@extends('admin.layouts.master')
@section('content')

<div class="row">
    <div class="col-12 p-4">
        <div class="jumbotron ">
                <h1 class="display-3">Bienvenu, </strong></h1>
                <p class="lead">Vous etes sur la page d'administration du site IVOIRE GREEN BTP (https://ivoiregreenbtp.com/).</p>
                <hr class="my-4">
                <p>Dans cette partie vous avez la possibilité de :</p>
                <li>Afficher tous les messages ou requêtes des clients provenant du site principal https://ivoiregreenbtp.com/</li>
                <li>Faire des annonces sécurisées de ventes potentielles de terrains. </li>
                <li>Effectuer des annonces sur d'éventuelles ventes immobilières</li>
                {{-- <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p> --}}
        </div>
    </div>
</div>

@endsection
