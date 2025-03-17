<?php

use Illuminate\Support\Facades\Route;

Route::get('/laravel', function () {
    return view('welcome');
});
Route::get('/home', [App\Http\Controllers\UserController::class,'home']) ;
Route::post('/store', [App\Http\Controllers\UserController::class,'store']) ;
Route::get('/add', [App\Http\Controllers\UserController::class,'add']) ;
Route::get('/user/{id}', [App\Http\Controllers\UserController::class,'show']) ;

Route::get('/view/{id}', [App\Http\Controllers\PdfGeneratorController::class,'view']) -> name('view');
Route::get('/save/{id}', [App\Http\Controllers\PdfGeneratorController::class,'save']) ;

