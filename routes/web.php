<?php

use App\Http\Controllers\Semestre7Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//principal del sitio
Route::get('/', HomeController::class, 'index');

//index del modulo Licenciatura
Route::get('licenciatura', [Semestre7Controller::class, 'index']);

//create del modulo semestre
Route::get('licenciatura/semestres', [Semestre7Controller::class, 'semestre']);

//horarios de clases del semestre
Route::get('licenciatura/{h}', [Semestre7Controller::class, 'show']);


// Example Routes
//Route::get('/', HomeController::class);
//Route::view('/', 'welcome');
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});

Route::get('usuario/{id}', [App\Http\Controllers\UserController::class, 'show']);


route::get('allie/slick', [App\Http\Controllers\allieController::class, 'index']);
/*Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
