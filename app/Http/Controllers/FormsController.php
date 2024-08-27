<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forms; // Assurez-vous que le modèle est bien importé

class FormsController extends Controller
{
    public function create()
    {
        return view('utilisateur.forms'); // Retirez le slash initial
    }

    public function store1(Request $request)
    {
        // Validation des données
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenoms' => 'required|string|max:255',
            'email' => 'required|email|unique:forms,email',
            'telephone' => 'required|string|max:15',
            'statut' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Création et stockage des données
        $forms = new Forms();
        $forms->nom = $request->nom;
        $forms->prenoms = $request->prenoms;
        $forms->email = $request->email;
        $forms->telephone = $request->telephone;
        $forms->statut = $request->statut;
        $forms->password = bcrypt($request->password); // Hashage du mot de passe
        $forms->save();

        return redirect()->route('utilisateur.forms')->with('success', 'Inscription effectuée avec succès.');
    }
}
