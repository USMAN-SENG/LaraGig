<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    // Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $txt = "Hello world!";
    return view('about', ['txt' => $txt]);
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/layout', function () {
    return view('components.layout');
});

//////////////////// Listings
Route::get('/listings', [ListingsController::class, 'index']);

Route::get('/listings/create', [ListingsController::class, 'create']);

Route::post('/listings', [ListingsController::class, 'store']);

Route::get('/listings/{id}/edit', [ListingsController::class, 'edit'])->where('id', '[0-9]+');


Route::get('/listings/{id}', [ListingsController::class, 'show'])->where('id', '[0-9]+');

Route::patch('/listings/{id}', [ListingsController::class, 'update'])->where('id', '[0-9]+');

Route::delete('/listings/{id}', [ListingsController::class, 'destroy'])->where('id', '[0-9]+');

//////////////////

//////////////////////Users

Route::get('/register', [UserController::class, 'create']);

Route::post('/users', [ListingsController::class, 'store']);


Route::get('/{non}', function () {
    return redirect('/');
});
