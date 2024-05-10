<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PizzaController;
use  App\Http\Controllers\sendWelcomeEmailController;
use App\Http\Controllers\AccountVerifyController;
use App\Mail\WelcomeMail;

Route::get('/', function () {
    return view('home');
});


// pizzas controller routes
Route::get('/pizzas', [PizzaController::class, 'index']);
Route::get('/pizzas/{id}', [PizzaController::class, 'show']);

// user controller routes
Route::get('/user/mailing', [sendWelcomeEmailController::class, 'index']);
Route::get('/user/verify/account/{token}', [AccountVerifyController::class, 'index']);