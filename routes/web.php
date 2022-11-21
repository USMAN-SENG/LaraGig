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

// All Listings
Route::get('/listings', [ListingsController::class, 'index']);

// Show Create Form
Route::get('/listings/create', [ListingsController::class, 'create'])->middleware('auth');

// Store Listing Data
Route::post('/listings', [ListingsController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/listings/{id}/edit', [ListingsController::class, 'edit'])->where('id', '[0-9]+')->middleware('auth');

// Single Listing
Route::get('/listings/{id}', [ListingsController::class, 'show'])->where('id', '[0-9]+');

// Update Listing
Route::patch('/listings/{id}', [ListingsController::class, 'update'])->where('id', '[0-9]+')->middleware('auth');

// Delete Listing
Route::delete('/listings/{id}', [ListingsController::class, 'destroy'])->where('id', '[0-9]+')->middleware('auth');

// Manage Listings , show the posts user made
Route::get('/listings/manage', [ListingsController::class, 'manage'])->middleware('auth');
//////////////////

//////////////////////Users

// show a Register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest'); // for guest middleware , we need to check if our Home route in Providers/RouteServiseProvider

// create new user
Route::post('/users', [UserController::class, 'store']);

// logout user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// show a login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// login the user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


Route::get('/{non}', function () {
    return redirect('/');
});
