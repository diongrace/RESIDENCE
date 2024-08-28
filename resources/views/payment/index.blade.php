@extends('layouts.app')

@section('title', 'Liste des Paiements')

@section('content')
<div class="container">
    <h2 class="my-4 text-center">Liste des Paiements</h2>

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

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Méthode de Paiement</th>
                <th>Numéro de Téléphone</th>
                <th>Code PIN</th>
                <th>Numéro de Carte</th>
                <th>Date d'Expiration</th>
                <th>CVV</th>
                <th>Date de Création</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($payments as $payment)
                <tr>
                    <td>{{ $payment->id }}</td>
                    <td>{{ $payment->payment_method }}</td>
                    <td>{{ $payment->phone_number ?? 'N/A' }}</td>
                    <td>{{ $payment->pin_code ?? 'N/A' }}</td>
                    <td>{{ $payment->card_number ?? 'N/A' }}</td>
                    <td>{{ $payment->expiry_date ?? 'N/A' }}</td>
                    <td>{{ $payment->cvv ?? 'N/A' }}</td>
                    <td>{{ $payment->created_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ route('payment.edit', $payment->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('payment.destroy', $payment->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center">Aucun paiement trouvé.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
