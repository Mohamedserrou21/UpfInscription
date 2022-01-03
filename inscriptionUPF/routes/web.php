<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AfficheController;
use Illuminate\Support\Facades\Auth;
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


<<<<<<< HEAD
// Route::get('/', function () {
//     return view('acceuil');
// });
Route::get('/',[AfficheController::class,'acceuil']);
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
=======
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
Route::get('/ESMAB', function () {
    return view('esmab');
});
Route::get('/FBS', function () {
    return view('fbs');
});

Route::get('/FSI', function () {
    return view('fsi');
});
<<<<<<< HEAD
>>>>>>> context_site
=======
>>>>>>> context_site

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
