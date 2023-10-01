<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CancelPaymentController extends Controller
{
    public function __invoke(Request $request)
    {
        return redirect()->route('create.payment')
                        ->with('error', $response['message'] ?? 'You have canceled the transaction. ');
    }
}
