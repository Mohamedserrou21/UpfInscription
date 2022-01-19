<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AfficheController;
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


// Route::get('/', function () {
//     return view('acceuil');
// });
Route::get('/',[AfficheController::class,'acceuil'])->name('acceuil');
// Route::get('/pre_inscription', function () {
//     return view('pre_inscription');
// });
Route::get('/pre_inscription',[AfficheController::class,'pre_inscription'])->name('pre_inscription');

Route::get('/administration_upf',[AfficheController::class,'adminpanel']);
Route::get('/dashboard_upf',[AfficheController::class,'etudiantDashboard']);

Route::resource('Inscription','App\Http\Controllers\ArticuloController');
Route::get('/Admission',[AfficheController::class,'admission']);
Route::get('/ADMIN', function () {
    return view('admin');
});
 Route::get('/FSI', function () {
     return view('fsi');
 });
 Route::get('/FBS', function () {
    return view('fbs');
});
 Route::get('/ESMAB', function () {
     return view('esmab');
 });

 Route::resource('signalisation','App\Http\Controllers\MoviesController');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');