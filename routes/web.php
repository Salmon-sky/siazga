<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tes', [tesController::class, 'kjiik']);
