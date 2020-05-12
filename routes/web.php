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
Route::group(['middleware' => 'guest'], function () {
    Route::get('/mitra/login', 'MitraController@showLogin')->name('mitralogin');
    Route::post('/mitra/login', 'MitraController@doLogin')->name('mitralogin');
    Route::get('/mitra/register', 'MitraController@create')->name('mitraregis');
    Route::post('/mitra/register', 'MitraController@store')->name('mitraregis');
});

Route::get('/mitra/marketoptions', 'MitraController@marketOptions');
Route::get('/mitra/profile', 'MitraController@index')->name('mitraprofile');
Route::get('/mitra/logout', 'MitraController@destroy')->name('mitralogout');
Route::get('/mitra/order', 'MitraController@showOrder');


Route::get('/mitra/notification', function() {
    return view('mitra.notifikasi');
});

Route::get('/mitra/history', function() {
    return view('mitra.history');
});

Route::get('/buyer/marketOptions', function() {
    return view('pembeli.opsiPasar');
});

Route::get('/buyer/marketOrder', function() {
    return view('pembeli.orderPasar');
});

Route::get('/mitra/stock', function() {
    return view('mitra.stok');
});

Route::get('/buyer/history', function() {
    return view('pembeli.history');
});

Route::get('/buyer/register', function() {
    return view('pembeli.daftar');
});

Route::get('/buyer/profile', function() {
    return view('pembeli.profil');
});