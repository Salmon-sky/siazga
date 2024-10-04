<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tesController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HaziqController;
use App\Http\Controllers\EkaController;
use App\Http\Controllers\KocakController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/tes', [tesController::class, 'index']);
Route::get('/test', [TestController::class, 'index']);
Route::get('/haziq', [HaziqController::class, 'index']);
Route::get('/eka', [EkaController::class, 'index']);
Route::get('/kocak', [KocakController::class, 'index']);

