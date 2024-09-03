<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payments; 

class PaymentController extends Controller
{

    public function index()
    {
        $payments = Payments::all();
        return view('payment.index', compact('payments'));
    }

    public function showPaymentForm()
    {
        return view('payment.process'); 
    }

    public function store3(Request $request)
    {
        // Récupérer le type de méthode de paiement
        $paymentMethod = $request->input('payment_method');

        // Obtenir les règles de validation en fonction de la méthode de paiement
        $rules = array_merge([
            'payment_method' => 'required|string',
        ], $this->getValidationRules($paymentMethod));

        // Validation des données
        $validatedData = $request->validate($rules);
    
        // Création et stockage des données
        $payment = new Payments();
        $payment->payment_method = $validatedData['payment_method']; 
    
        if ($paymentMethod === 'mobile') {
            $payment->phone_number = $validatedData['phone_number'];
            $payment->pin_code = $validatedData['pin_code'];
        } elseif ($paymentMethod === 'card') {
            $payment->card_number = $validatedData['card_number'];
            $payment->expiry_date = $validatedData['expiry_date'];
            $payment->cvv = $validatedData['cvv'];
        }
    
        try {
            $payment->save();
            // Redirection avec message de succès
            return redirect()->route('payment.form')->with('success', 'Paiement traité avec succès.');
        } catch (\Exception $e) {
            // Redirection avec message d'erreur
            return redirect()->back()->withErrors(['error' => 'Une erreur est survenue lors du traitement du paiement : ' . $e->getMessage()]);
        }
    }
    
    /**
     * Retourne les règles de validation selon la méthode de paiement.
     *
     * @param string|null $paymentMethod
     * @return array
     */
    private function getValidationRules($paymentMethod)
    {
        if ($paymentMethod === 'mobile') {
            return [
                'phone_number' => 'required|string|max:15',
                'pin_code' => 'required|string|min:4|max:6',
            ];
        } elseif ($paymentMethod === 'card') {
            return [
                'card_number' => 'required|string|size:16',
                'expiry_date' => 'required|string|size:10',
                'cvv' => 'required|string|size:4',
            ];
        }
        return [];
    }

    public function show($id)
    {
        $payment = Payments::findOrFail($id);
        return view('payment.show', compact('payment'));
    }



    public function update(Request $request, $id)
    {
    $rules = $this->getValidationRules($request->input('payment_method'));

    $validatedData = $request->validate($rules);

    $payment = Payments::findOrFail($id);
    $payment->payment_method = $request->input('payment_method');

    if ($request->input('payment_method') === 'mobile') {
        $payment->phone_number = $validatedData['phone_number'];
        $payment->pin_code = $validatedData['pin_code'];
    } elseif ($request->input('payment_method') === 'card') {
        $payment->card_number = $validatedData['card_number'];
        $payment->expiry_date = $validatedData['expiry_date'];
        $payment->cvv = $validatedData['cvv'];
    }

    try {
        $payment->save();
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }

    return redirect()->route('payment.index')->with('success', 'Paiement mis à jour avec succès.');
  }


    /**
     * Affiche le formulaire d'édition d'un paiement.
     */
    public function edit($id)
    {
        $payment = Payments::findOrFail($id);
        return view('payment.edit', compact('payment'));
    }

    /**
     * Supprime un paiement.
     */
    public function destroy($id)
    {
        $payment = Payments::findOrFail($id);
        $payment->delete();

        return redirect()->route('payment.index')->with('success', 'Paiement supprimé avec succès.');
    }
}
