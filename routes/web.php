<?php

use App\Http\Controllers\ListingsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/listings', [ListingsController::class, 'index']);

Route::get('/listings/create', [ListingsController::class, 'create']);

Route::post('/listings', [ListingsController::class, 'store']);


Route::get('/listings/{id}', [ListingsController::class, 'show'])->where('id', '[0-9]+');


Route::get('/{non}', function () {
    return redirect('/');
});
