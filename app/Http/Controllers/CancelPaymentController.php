<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CancelPaymentController extends Controller
{
    public function __invoke(Request $request)
    {
        dd("Your payment has been declined. The payment cancelation page goes here !");
    }
}
