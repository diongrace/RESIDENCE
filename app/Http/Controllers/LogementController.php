<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logements; // Update this line

class LogementController extends Controller
{
    public function create1()
    {
        return view('logement');
    }

    public function store2(Request $request)
    {
        $request->validate([
            'logement' => 'required|string|max:255',
            'localite' => 'required|string|max:255',
            'chambres' => 'required|integer|min:1|max:10',
        ]);

        $logement = new Logements(); // Update this line
        $logement->logement = $request->logement;
        $logement->localite = $request->localite;
        $logement->chambres = $request->chambres;

        $logement->save();

        return redirect()->route('logement')->with('success', 'Inscription effectuée avec succès.');
    }
}

