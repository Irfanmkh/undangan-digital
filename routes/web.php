<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/checkout/{template}', [CheckoutController::class, 'show']);
Route::post('/checkout/{template}', [CheckoutController::class, 'proccess']);
