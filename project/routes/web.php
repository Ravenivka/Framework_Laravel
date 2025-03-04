<?php

use Illuminate\Support\Facades\Route;






Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/userform', [\App\Http\Controllers\FormProcessorController::class, 'index']);
Route::post('/store_form', [\App\Http\Controllers\FormProcessorController::class, 'store']);

Route::get('/',  [\App\Http\Controllers\RazorController::class, 'home']);
Route::get('/contact',  [\App\Http\Controllers\RazorController::class, 'contact']);
