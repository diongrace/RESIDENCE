<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all(); 
        
        return view('gestions.reservationlist', compact('reservations')); 
    }

    public function create()
    {
        return view('gestions.reservation');
    }

    public function store(Request $request)
    {

        $reservation = new Reservation();
        $reservation->nom = $request->nom;
        $reservation->prenoms = $request->prenoms;
        $reservation->sejour = $request->sejour;
        $reservation->logement = $request->logement;
        $reservation->email = $request->email;
        $reservation->telephone = $request->telephone;
        $reservation->date_arrivee = $request->date_arrivee;
        $reservation->date_depart = $request->date_depart;
        $reservation->save();
        return redirect('/gestions/reservation')->with('success', 'Réservation effectuée avec succès.');
    }

    public function show($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('gestions.show', compact('reservation'));
    }

    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('gestions.edit', compact('reservation'));
    }

    public function update(Request $request, $id)
    {

        Reservation(); $reservation->nom = $request['nom']; 
        $reservation->prenoms = $request['prenoms']; 
        $reservation->sejour = $request['sejour'];
         $reservation->logement = $request['logement'];
          $réservation->email = $request['email']; 
          $réservation->telephone = $request['telephone']; 
          $réservation->date_arrivee = $request['date_arrivee']; 
          $réservation->date_depart = $request['date_depart'];
        $reservation->save();
        return redirect('/gestions/reservation')->with('success', 'Réservation mise à jour avec succès.');
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();
        return redirect('/gestions/reservationlist')->with('success', 'Réservation supprimée avec succès.');
    }
}
