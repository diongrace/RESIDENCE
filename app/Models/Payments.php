<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;

    protected $fillable = ['payment_method', 'phone_number', 'pin_code', 'card_number', 'expiry_date', 'cvv'];
}
