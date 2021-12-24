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
    return view('acceuil');
});
Route::get('/pre_inscription', function () {
    return view('pre_inscription');
});
Route::get('/Admission', function () {
    return view('admission');
});
Route::get('/dashboard_upf', function () {
    return view('adminpanel');
});

Route::get('/condidat', function () {
    return view('userpanel');
});
