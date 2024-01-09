<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;


// GET - POST - PATCH - PUT - DELETE
Route::get('/', [GeneralController::class, 'homepage']);

Route::get('/about', [GeneralController::class, 'about']);

Route::get('/contact', [GeneralController::class, 'contact']);

/*************************Products Routes ******************/
Route::get('/products/create', [ProductController::class, 'create'])->name('products.new');
Route::post('/products', [ProductController::class, 'store'])->name('products.save');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.view');
Route::get('/products', [ProductController::class, 'index'])->name('products.list');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.delete');

/*************************Products Routes ******************/

/*************************    Customers   ******************/
Route::get('/clients/create', [ClientController::class, 'create']);
Route::post('/clients', [ClientController::class, 'store']);
Route::get('/clients/{id}/edit', [ClientController::class, 'edit']);
Route::put('/clients/{id}', [ClientController::class, 'update']);
Route::get('/clients/{id}', [ClientController::class, 'show']);
Route::get('/clients', [ClientController::class, 'index']);
Route::delete('/clients/{id}', [ClientController::class, 'destroy']);
/*************************    Customers   ******************/
/*************************    User   ******************/
Route::get('/users', [UserController::class, 'index'])->name('users.list');
/*************************    User  ******************/

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/categories/{id}', function ($id) {
    // return "You're checking Category $id";
    return view('show', ["id" => $id]);
});

Route::get('/search', function () {
    // $pname = $_GET["pname"];
    // return "You're Searching for $pname";
    $pname = request('pname');
    // return view('search', ["pname" => $pname]);
    // OR 
    // return view('search')->with(["pname" => $pname]);
    return view('search', compact('pname'));
});

// Route -> Controller -> Method -> Model -> View
// The 7 Restfull Methods:
    // 1- create -> Calls The "New" View.
    // 2- store -> Saves New Data or New Record.
    // 3- edit -> Calls The Edit Page.
    // 4- update -> Saves Updated Record To Database.
    // 5- show -> Fetches & Shows 1 Record From A Database Table.
    // 6- index -> Fetches & Shows All Record From A Database Table.
    // 7- destroy -> Deletes 1 Record From A Database Table.