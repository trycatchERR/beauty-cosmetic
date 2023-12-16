<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use App\Models\PaymentProvider;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public static function getPaymentProvidersWithMethods()
    {
        return PaymentMethod::with('payment_providers')->get();
    }
}
