@extends('layouts.app')

@section('title', 'Réservation')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Votre Réservation</h3>
                </div>
                <div class="card-body">

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{url('/update')}}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="nom" type="text" name="nom" placeholder="Entrer votre Nom"  value="{{ $reservation->nom }}"/>
                                    <label for="nom">Entrer votre Nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="prenoms" type="text" name="prenoms" placeholder="Entrer votre Prénom"value="{{ $reservation->prenoms }}"/>
                                    <label for="prenoms">Entrer votre Prénom</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="sejour" type="text" name="sejour" placeholder="Séjour" value="{{ $reservation->sejour }}"/>
                                    <label for="sejour">Séjour</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="logement" type="text" name="logement" placeholder="Type de Logement" value="{{ $reservation->logement}}"/>
                                    <label for="logement">Type de Logement</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" name="email" placeholder="name@example.com" value="{{ $reservation->email }}"/>
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="telephone" type="tel" name="telephone" placeholder="Téléphone" value="{{ $reservation->telephone }}"/>
                            <label for="telephone">Téléphone</label>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="date_arrivee" type="date" name="date_arrivee" value="{{ $reservation->date_arrivee }}"/>
                                    <label for="date_arrivee">Date Arrivée</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="date_depart" type="date" name="date_depart" value="{{ $reservation->date_depart }}"/>
                                    <label for="date_depart">Date Départ</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-block">Modifier</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
