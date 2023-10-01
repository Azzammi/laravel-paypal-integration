<?php

use App\Http\Controllers\CancelPaymentController;
use App\Http\Controllers\HandlePaymentController;
use App\Http\Controllers\SuccessPaymentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('payment', 'paypal.index')->name('create.payment');
Route::get('handle-payment', HandlePaymentController::class)->name('make.payment');
Route::get('cancel-payment', CancelPaymentController::class)->name('cancel.payment');
Route::get('payment-success', SuccessPaymentController::class)->name('success.payment');
