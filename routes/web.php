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

Route::get('/mitra/login', function() {
    return view('mitra.login');
});

Route::get('/mitra/register', function() {
    return view('mitra.register');
});

Route::get('/mitra/marketOptions', function() {
    return view('mitra.opsiPasar');
});

Route::get('/mitra/profile', function() {
    return view('mitra.profil');
});

Route::get('/mitra/order', function() {
    return view('mitra.order');
});


Route::get('/notification', function() {
    return view('mitra.notifikasi');
});

Route::get('/history', function() {
    return view('mitra.history');
});

Route::get('/buyer/marketOptions', function() {
    return view('pembeli.opsiPasar');
});

