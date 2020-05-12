<?php

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

Route::get('/mitra/login', 'MitraController@index')->name('mitralogin');
Route::get('/mitra/register', 'MitraController@create')->name('mitraregis');
Route::post('/mitra/register', 'MitraController@store')->name('mitraregis');

Route::get('/mitra/marketOptions', function() {
    return view('mitra.opsiPasar');
});

Route::get('/mitra/profile', function() {
    return view('mitra.profil');
})->name('mitraprofil');

Route::get('/mitra/order', function() {
    return view('mitra.order');
});

Route::get('/buyer/marketOptions', function() {
    return view('pembeli.opsiPasar');
});
