<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [RegisterController::class, 'login']);
Route::post('/register', [RegisterController::class,'register']);

Route::middleware('auth:api')->group(function(){
    Route::resource('products', ProductController::class);
});


