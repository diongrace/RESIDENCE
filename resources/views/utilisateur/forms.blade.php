@extends('layouts.app')

@section('title', 'Inscription')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Inscription</h3>
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

                    <form action="{{ route('utilisateur.store') }}" method="post">
                        @csrf

                        <!-- Nom et Prénoms -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="nom" name="nom" type="text" placeholder="Enter your last name" required />
                                    <label for="nom">Nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="prenoms" name="prenoms" type="text" placeholder="Enter your first name" required />
                                    <label for="prenoms">Prénoms</label>
                                </div>
                            </div>
                        </div>

                        <!-- Adresse E-mail -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required />
                            <label for="email">Adresse E-mail</label>
                        </div>

                        <!-- Numéro de Téléphone -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="telephone" name="telephone" type="tel" placeholder="Enter your phone number" required />
                            <label for="phone">Numéro de Téléphone</label>
                        </div>

                        <!-- Type d'Utilisateur -->
                        <div class="form-floating mb-3">
                            <select class="form-select" id="statut" name="statut" required>
                                <option value="locataire">Chercheur de Logement</option>
                                <option value="visiteur">Visiteur</option>
                                <option value="propriétaire">Propriétaire</option>
                                <option value="propriétaire">Locataire</option>
                            </select>
                            <label for="userType">Vous êtes :</label>
                        </div>

                        <!-- Mot de Passe et Confirmation -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="Password" name="password" type="password" placeholder="Create a password" required />
                                    <label for="inputPassword">Mot de Passe</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="PasswordConfirm" name="password_confirmation" type="password" placeholder="Confirm password" required />
                                    <label for="inputPasswordConfirm">Confirmer le Mot de Passe</label>
                                </div>
                            </div>
                        </div>

                        <!-- Conditions d'Utilisation -->
                        <div class="form-check mb-3">
                            <input class="form-check-input" id="terms" name="terms" type="checkbox" required />
                            <label class="form-check-label" for="terms">J'accepte les <a href="#">conditions d'utilisation</a></label>
                        </div>

                        <!-- Bouton d'Inscription -->
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-block">Créer un Compte</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
