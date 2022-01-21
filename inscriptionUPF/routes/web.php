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

Route::get('/Admission',[AfficheController::class,'admission']);
Route::get('/FBS', function () {
    return view('fbs');
 });
 Route::get('/ESMAB', function () {
     return view('esmab');
 });
// Route::get('/', function () {
//     return view('acceuil');
// });
Route::get('/',[AfficheController::class,'acceuil'])->name('acceuil');
// Route::get('/pre_inscription', function () {
//     return view('pre_inscription');
// });


Route::resource('signalisation','App\Http\Controllers\MoviesController');
 Route::group(['middleware' => 'auth'], function () {

    Route::get('/pre_inscription',[AfficheController::class,'pre_inscription'])->name('pre_inscription');

Route::get('/dashboard_upf',[AfficheController::class,'etudiantDashboard']);



 
 
 Route::resource('Inscription','App\Http\Controllers\ArticuloController');
   });
 
Route::group(['middleware' => ['auth','role:admin']], function () {


 Route::resource('Admin/Inscription','App\Http\Controllers\ArticuloController');
 Route::resource('Admin/signalisation','App\Http\Controllers\MoviesController');
 Route::get('/administration_upf',[AfficheController::class,'adminpanel']);
 Route::get('/FSI', function () {
    return view('fsi');
});

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');