<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::group(["prefix"=>"gestion_salle", "as"=>"gestion_salle."], function ()
{
    Route::get('/', "GestionSalleDeClasse\SalleController@index")->name("index");
});
Route::group(["prefix"=>"gestion_tfe", "as"=>"gestion_tfe."], function ()
{
    Route::get('/', "GestionSalleDeClasse\SalleController@index")->name("index");
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');








