<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userform', [\App\Http\Controllers\FormProcessorController::class, 'index']);
Route::post('/store_form', [\App\Http\Controllers\FormProcessorController::class, 'store']);