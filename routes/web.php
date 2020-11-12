<?php

use App\Http\Controllers\Semestre7Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//principal del sitio
//Route::get('/', HomeController::class, 'index');
Route::get('/', [App\Http\Controllers\DCreditoController::class, 'index'])->name('home');

Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});

Route::get('usuario/{id}', [App\Http\Controllers\UserController::class, 'show']);

Auth::routes();

Route::get('dC/crear', [App\Http\Controllers\DCreditoController::class, 'create'])->name('detalle.crear');
Route::post('dC/', [App\Http\Controllers\DCreditoController::class, 'store'])->name('detalle.store');


Route::post('tC/', [App\Http\Controllers\DCTelefonoController::class, 'store'])->name('telefono.store');

Route::post('mC/', [App\Http\Controllers\DCMailController::class, 'store'])->name('mail.store');

Route::post('gC/', [App\Http\Controllers\DCGestionController::class, 'store'])->name('gestion.store');

Route::get('dC/{id}', [App\Http\Controllers\DCreditoController::class, 'show'])->name('detalle.show');

Route::get('/codigos', [App\Http\Controllers\DCGestionController::class, 'getCodigos'])->name('codigos');

Route::view('dC/blank', 'detalleCredito.slick');

Route::get('datatables/creditos', [App\Http\Controllers\DatatableController::class, 'credito'])->name('datable.credito');
