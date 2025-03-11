<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index' , [EmployeeController::class, 'index']) ;
Route::post('/store-form', [EmployeeController::class,'store']) ;
//Route::get('/view' , [EmployeeController::class, 'view']) ;  debug route
Route::get('/user/{id}', [EmployeeController::class,'update'])  ;


