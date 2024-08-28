@extends('layouts.app')

@section('title', 'Détails du Paiement')

@section('content')
<div class="container">
    <h2 class="my-4 text-center">Détails du Paiement</h2>

    <!-- Afficher les messages de succès ou d'erreur -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Détails du paiement -->
    <div class="card">
        <div class="card-header">
            <h3>Détails du Paiement #{{ $payment->id }}</h3>
        </div>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item"><strong>Méthode de Paiement:</strong> {{ $payment->payment_method }}</li>
                <li class="list-group-item"><strong>Numéro de Téléphone:</strong> {{ $payment->phone_number ?? 'N/A' }}</li>
                <li class="list-group-item"><strong>Code PIN:</strong> {{ $payment->pin_code ?? 'N/A' }}</li>
                <li class="list-group-item"><strong>Numéro de Carte:</strong> {{ $payment->card_number ?? 'N/A' }}</li>
                <li class="list-group-item"><strong>Date d'Expiration:</strong> {{ $payment->expiry_date ?? 'N/A' }}</li>
                <li class="list-group-item"><strong>CVV:</strong> {{ $payment->cvv ?? 'N/A' }}</li>
                <li class="list-group-item"><strong>Date de Création:</strong> {{ $payment->created_at->format('d/m/Y H:i') }}</li>
            </ul>
        </div>
        <div class="card-footer">
            <a href="{{ route('payment.index') }}" class="btn btn-secondary">Retour à la Liste</a>
        </div>
    </div>
</div>
@endsection
