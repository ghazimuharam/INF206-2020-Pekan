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
Route::get('/mitra/notifikasi', 'MitraController@showOrder')->name('notifikasi');
Route::post('/mitra/notifikasi', 'MitraController@acceptOrder')->name('notifikasi');
Route::get('/mitra/order/detail', 'MitraController@orderDetails')->name('orderdetails');
Route::get('/mitra/stock/vegetable', 'MitraController@displayStokSayur');
Route::post('/mitra/stock/vegetable', 'MitraController@updateStokSayur');
Route::get('/mitra/stock/{id}/delete', 'MitraController@destroyStok');
Route::get('/mitra/stock/fish', 'MitraController@displayStokIkan');
Route::post('/mitra/stock/fish', 'MitraController@updateStokIkan');
Route::get('/mitra/profile', 'MitraController@index')->name('mitraprofile');
Route::get('/mitra/editprofile', 'MitraController@editProfile')->name('mitraeditprofile');
Route::post('/mitra/profile', 'MitraController@updateProfile')->name('mitraprofile');
Route::get('/mitra/history', 'MitraController@historyOrder')->name('mitrahistory');
Route::get('/mitra/ubahpassword', 'MitraController@ubahPassw')->name('mitraubahpw');
Route::post('/mitra/ubahpassword', 'MitraController@updatePassw')->name('mitraubahpw');

Route::get('/pembeli/login', 'UserController@showLogin')->name('pembelilogin');
Route::post('/pembeli/login','UserController@doLogin')->name('pembelilogin');
Route::get('/pembeli/logout','UserController@destroy')->name('pembelilogout');
Route::get('/pembeli/register', 'UserController@showRegister')->name('pembeliregis');
Route::post('/pembeli/register','UserController@doRegister')->name('pembeliregis');
Route::get('/pembeli/profile','UserController@showProfile')->name('pembeliprofile');
Route::post('/pembeli/profile', 'UserController@updateProfile')->name('pembeliprofile');
Route::get('/pembeli/history','UserController@historyUser')->name('pembelihistory');
Route::get('/pembeli/order/ikan','UserController@orderPasarIkan')->name('pembeliorderi');
Route::get('/pembeli/order/sayur','UserController@orderPasarSayur')->name('pembeliorders');
Route::get('/pembeli/order/{name}/{id}','UserController@orderDetails')->name('pembeliorderdetails');
Route::post('/pembeli/order/{name}/{id}','UserController@submitDetails')->name('pembeliorderdetails');
Route::get('/pembeli/editprofile', 'UserController@editProfile')->name('pembelieditprofile');
Route::get('/pembeli/editprofile', 'UserController@editProfile')->name('pembelieditprofile');
Route::get('/pembeli/marketoptions', 'UserController@marketOptions')->name('pembelihome');
Route::get('/pembeli/ubahpassword', 'UserController@ubahPassw')->name('pembeliubahpw');
Route::post('/pembeli/ubahpassword', 'UserController@updatePassw')->name('pembeliubahpw');

Route::get('/test', 'MitraController@testNotif');
Route::get('/user/order/push','MitraController@push')->name('push');
Route::post('/user/order/push','MitraController@pushpost');
Route::get('/test', 'TestController@index');

Route::get('/admin/login', 'AdminController@showLogin')->name('adminlogin');
Route::post('/admin/login', 'AdminController@doLogin')->name('adminlogin');
Route::get('/admin/dashboard', 'AdminController@index')->name('adminhome');
Route::get('/admin/logout', 'AdminController@destroy')->name('adminlogout');
Route::get('/admin/userManagement', 'AdminController@userManagement')->name('adminusermanagement');
Route::get('/admin/deleteUser/{id}', 'AdminController@userDelete')->name('admindeleteuser');
Route::get('/admin/search', 'AdminController@userSearch')->name('adminsearch');

Route::get('/admin/register', function() {
    return view('admin.register');
});

Route::get('/admin/addUser', function() {
    return view('admin.addUser');
});

Route::get('/admin/changeUser', function() {
    return view('admin.editUser');
});
