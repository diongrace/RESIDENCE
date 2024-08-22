@extends('layouts.app')

@section('content')
    <h1>Liste des Réservations</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénoms</th>
                <th scope="col">Séjour</th>
                <th scope="col">Logement</th>
                <th scope="col">Email</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Date Arrivée</th>
                <th scope="col">Date Départ</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $reservation->nom }}</td>
                    <td>{{ $reservation->prenoms }}</td>
                    <td>{{ $reservation->sejour }}</td>
                    <td>{{ $reservation->logement }}</td>
                    <td>{{ $reservation->email }}</td>
                    <td>{{ $reservation->telephone }}</td>
                    <td>{{ $reservation->date_arrivee }}</td>
                    <td>{{ $reservation->date_depart }}</td>
                    <td>
                        <!-- Liens vers les actions de détails, édition et suppression -->
                        <a href="{{ route('gestions.update', $reservation->id) }}" class="btn btn-info">Modifier</a>
                        <a href="{{ route('gestions.edit', $reservation->id) }}" class="btn btn-warning">Éditer</a>
                        <form action="{{ route('reservation.destroy', $reservation->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach 
        </tbody>
    </table>
@endsection
