<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('autenticar');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/autenticar', [App\Http\Controllers\AutenticarController::class, 'index'])->name('autenticar');

Route::POST('/buscarlogin', [App\Http\Controllers\AutenticarController::class, 'buscarlogin'])->name('buscarlogin');

// Route::get('/bienvenida', [MiControlador::class, 'bienvenido'])->name('bienvenido');

Route::get('/mostrar', function () {
    dd(Session::all()); // Ver todos los datos de la sesión
});



Route::middleware(['web'])->group(function () {

    



});
