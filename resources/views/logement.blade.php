@extends('layouts.app')

@section('title', 'Choisir un Logement')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Choisir un Logement</h3></div>
                <div class="card-body">
                    
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('logements.store') }}" method="post">
                        @csrf

                        <!-- Type de Logement -->
                        <div class="form-floating mb-3">
                            <select class="form-select" id="logementType" name="logement" required>
                                <option value="">-- Sélectionner le type de logement --</option>
                                <option value="appartement">Appartement</option>
                                <option value="maison">Maison</option>
                                <option value="studio">Studio</option>
                                <option value="chambre">Chambre</option>
                            </select>
                            <label for="logementType">Type de Logement</label>
                        </div>

                        <!-- Ville ou Localisation -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="localite" name="localite" type="text" placeholder="Entrez la ville ou la localisation" required />
                            <label for="localite">Ville ou Localisation</label> <!-- Correction du label -->
                        </div>

                        <!-- Nombre de Chambres -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="chambres" name="chambres" type="number" placeholder="Nombre de chambres" min="1" required />
                            <label for="chambres">Nombre de Chambres</label>
                        </div>

                        <!-- Bouton de Recherche -->
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-block">Rechercher</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
