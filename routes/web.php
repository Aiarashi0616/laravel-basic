<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VendorController;

Route::get('/hello', [HelloController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});
 Route::get('/posts', [HelloController::class, 'index']);
 Route::get('/products/{id}', [ProductController::class, 'show']);
 Route::get('/vendors/{id}', [VendorController::class, 'show']);



