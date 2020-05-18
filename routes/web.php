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

Route::get('/mitra/marketoptions', 'MitraController@marketOptions')->name('mitrahome');
Route::get('/mitra/logout', 'MitraController@destroy')->name('mitralogout');
Route::get('/mitra/order', 'MitraController@showOrder')->name('notifikasi');
Route::get('/mitra/stock/vegetable', 'MitraController@displayStokSayur');
Route::post('/mitra/stock/vegetable', 'MitraController@updateStokSayur');
Route::get('/mitra/stock/{id}/delete', 'MitraController@destroyStok');
Route::get('/mitra/stock/fish', 'MitraController@displayStokIkan');
Route::post('/mitra/stock/fish', 'MitraController@updateStokIkan');
Route::get('/mitra/profile', 'MitraController@index')->name('mitraprofile');
Route::get('/mitra/editprofile', 'MitraController@editProfile')->name('mitraeditprofile');
Route::post('/mitra/profile', 'MitraController@updateProfile')->name('mitraprofile');
Route::get('/mitra/history', 'MitraController@historyOrder');
Route::get('/mitra/ubahpassw', 'MitraController@ubahPassw')->name('ubahpassw');

Route::get('/mitra/ubahpassword', 'MitraController@ubahPassw')->name('mitraubahpw');
Route::post('/mitra/ubahpassword', 'MitraController@updatePassw')->name('mitraubahpw');

Route::get('/pembeli/login', 'UserController@showLogin')->name('pembelilogin');
Route::post('/pembeli/login','UserController@doLogin')->name('pembelilogin');
Route::get('/pembeli/register', 'UserController@showRegister')->name('pembeliregis');
Route::post('/pembeli/register','UserController@doRegister')->name('pembeliregis');
Route::get('/pembeli/profile','UserController@showProfile')->name('pembeliprofile');
Route::get('/pembeli/history','UserController@historyUser');
Route::get('/pembeli/order/sayur','UserController@orderPasarSayur')->name('pembeliorders');

Route::get('/pembeli/order/ikan','UserController@orderPasar')->name('pembeliorderss');
Route::get('/pembeli/editprofile', 'UserController@editProfile')->name('editprofile');

Route::get('/pembeli/editprofile', 'UserController@editProfile')->name('pembelieditprofile');
Route::post('/pembeli/profile', 'UserController@updateProfile')->name('pembeliprofile');


Route::get('/mitra/notification', function() {
    return view('mitra.notifikasi');
});

Route::get('mitra/changePassword', function() {
    return view('mitra.ubahpassword');
});

Route::get('/buyer/marketOptions', function() {
    return view('pembeli.opsiPasar');
});

Route::get('/buyer/marketOrder', function() {
    return view('pembeli.orderPasar');
});

Route::get('/buyer/register', function() {
    return view('pembeli.register');
});

Route::get('/buyer/detail', function() {
    return view('pembeli.detail');
});

Route::get('/buyer/profile', function() {
    return view('pembeli.profil');
});

Route::get('/test', 'TestController@index');

Route::get('/admin/login', function() {
    return view('admin.login');
});

Route::get('/admin/dashboard', function() {
    return view('admin.dashboard');
});

Route::get('/admin/userManagement', function() {
    return view('admin.userManagement');
});

Route::get('/admin/addUser', function() {
    return view('admin.addUser');
});

Route::get('/admin/changeUser', function() {
    return view('admin.editUser');
});
