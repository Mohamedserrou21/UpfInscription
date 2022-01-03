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
Route::get('/Acceuil',[AfficheController::class,'acceuil']);
// Route::get('/pre_inscription', function () {
//     return view('pre_inscription');
// });
Route::get('/pre_inscription',[AfficheController::class,'pre_inscription']);

Route::get('/dashboard_upf',[AfficheController::class,'adminpanel']);

Route::get('/Admission',[AfficheController::class,'admission']);

// Route::get('/Admission', function () {
//     return view('admission');
// });
// Route::get('/dashboard_upf', function () {
//     return view('adminpanel');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/condidat', function () {
    return view('userpanel');
});