<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortenController;
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

// Handles the index form
Route::get('/', function () {
    return view('index');
});

// Handles the post request to create the short url
Route::post('/shorten', 'App\Http\Controllers\ShortenController@createShortUrl');

// Handles the /abcdefgh url and redirects to full site.
Route::get('/{shortCode}', [ShortenController::class, 'findOriginalUrl']);