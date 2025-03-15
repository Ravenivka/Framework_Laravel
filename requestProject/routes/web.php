<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index' , [EmployeeController::class, 'index']) ;
Route::post('/store-form', [EmployeeController::class,'store']) ;
//Route::get('/view' , [EmployeeController::class, 'view']) ;  debug route
Route::get('/user/{id}', [EmployeeController::class,'update'])  ;

Route::get('/show' , [BookController::class, 'show']) ;
Route::post('/book-store', [BookController::class,'store']) ;


