<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    
    public function showPaymentForm()
    {
        return view('payment.process'); 
    }

    
    public function processPayment(Request $request)
    {
        $paymentMethod = $request->input('paymentMethod');
        
        
        $this->validate($request, $this->getValidationRules($paymentMethod));
        
        // Traiter le paiement en fonction de la méthode choisie
        if ($paymentMethod === 'mobile') {
            $this->processMobilePayment($request);
        } elseif ($paymentMethod === 'card') {
            $this->processCardPayment($request);
        }

        return redirect()->route('payment.form')->with('success', 'Paiement traité avec succès.');
    }

   
    private function getValidationRules($paymentMethod)
    {
        if ($paymentMethod === 'mobile') {
            return [
                'phoneNumber' => 'required|string|max:15',
                'pinCode' => 'required|string|min:4|max:6',
            ];
        } elseif ($paymentMethod === 'card') {
            return [
                'cardNumber' => 'required|string|size:16',
                'expiryDate' => 'required|string|size:5',
                'cvv' => 'required|string|size:3',
            ];
        }
        return [];
    }

    // Traiter le paiement mobile
    private function processMobilePayment(Request $request)
    {
        $phoneNumber = $request->input('phoneNumber');
        $pinCode = $request->input('pinCode');
        
    }

    // Traiter le paiement par carte
    private function processCardPayment(Request $request)
    {
        $cardNumber = $request->input('cardNumber');
        $expiryDate = $request->input('expiryDate');
        $cvv = $request->input('cvv');
        
    }
}

