<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/autenticar', [App\Http\Controllers\AutenticarController::class, 'index'])->name('autenticar');

Route::get('/buscarlogin', [App\Http\Controllers\AutenticarController::class, 'buscarlogin'])->name('buscarlogin');

