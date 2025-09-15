<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/tolojanahary-completez-votre-reservation', function () {
    return file_get_contents(public_path('tolojanahary-completez-votre-reservation.html'));
});

Route::get('/tolojanahary-paiement', function () {
    return file_get_contents(public_path('tolojanahary-paiement.html'));
});