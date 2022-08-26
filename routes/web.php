<?php

use App\Http\Controllers\Web3LoginController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/web3-login-message', [Web3LoginController::class,'message']);
Route::post('/web3-login-verify', [Web3LoginController::class,'verify']);
