<?php

use Illuminate\Support\Facades\Route;
USE App\Http\Controllers\productsController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/datos', [productsController::class,'index']);
Route::get('/datos/create', [productsController::class,'create']);
Route::post('/datos/store', [productsController::class,'store']);
Route::delete('/datos/{id}', [productsController::class,'destroy']);
Route::get('/datos/edit/{id}', [productsController::class,'edit']);
Route::PATCH('/datos/update/{id}', [productsController::class,'update']);
    
    