@extends('layouts.app')

@section('title', 'Paiement')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Choisissez votre Méthode de Paiement</h3>
                </div>
                <div class="card-body">
                    <!-- Payment Method Selection -->
                    <div class="form-group mb-4">
                        <label for="paymentMethod">Méthode de Paiement</label>
                        <select id="paymentMethod" class="form-control" onchange="showPaymentForm()">
                            <option value="">Choisissez une option</option>
                            <option value="mobile">Paiement Mobile</option>
                            <option value="card">Carte Bancaire</option>
                        </select>
                    </div>

                    <!-- Mobile Payment Form -->
                    <div id="mobilePaymentForm" class="payment-form" style="display: none;">
                        <form action="{{ route('payment.process') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="phoneNumber">Numéro de Téléphone</label>
                                <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" placeholder="Entrer votre numéro de téléphone" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="pinCode">Code PIN</label>
                                <input type="password" id="pinCode" name="pinCode" class="form-control" placeholder="Entrer votre code PIN" />
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Payer par Mobile</button>
                        </form>
                    </div>

                    <!-- Card Payment Form -->
                    <div id="cardPaymentForm" class="payment-form" style="display: none;">
                        <form action="{{ route('payment.process') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="cardNumber">Numéro de Carte</label>
                                <input type="text" id="cardNumber" name="cardNumber" class="form-control" placeholder="Entrer le numéro de votre carte" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="expiryDate">Date d'Expiration</label>
                                <input type="text" id="expiryDate" name="expiryDate" class="form-control" placeholder="MM/AA" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="cvv">Code de Sécurité (CVV)</label>
                                <input type="text" id="cvv" name="cvv" class="form-control" placeholder="Entrer le code CVV" />
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Payer par Carte</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showPaymentForm() {
        var paymentMethod = document.getElementById('paymentMethod').value;
        var mobileForm = document.getElementById('mobilePaymentForm');
        var cardForm = document.getElementById('cardPaymentForm');
        
        if (paymentMethod === 'mobile') {
            mobileForm.style.display = 'block';
            cardForm.style.display = 'none';
        } else if (paymentMethod === 'card') {
            mobileForm.style.display = 'none';
            cardForm.style.display = 'block';
        } else {
            mobileForm.style.display = 'none';
            cardForm.style.display = 'none';
        }
    }
</script>
@endsection
