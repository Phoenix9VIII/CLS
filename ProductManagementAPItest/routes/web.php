<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// List all products
Route::get('/products', [ProductController::class, 'index']);

// Get a specific product
Route::get('/products/{id}', [ProductController::class, 'show']);

// Create a new product
Route::post('/products', [ProductController::class, 'store']);

// Update a product
Route::put('/products/{id}', [ProductController::class, 'update']);

// Delete a product
Route::delete('/products/{id}', [ProductController::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');
});
