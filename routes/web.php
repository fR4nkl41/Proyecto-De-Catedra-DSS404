<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EntrenadorController;



Route::get('/', function () {
    return redirect()->route('login');
});

Route::resource('planes', PlanController::class);
Route::resource('horarios', HorarioController::class);
Route::resource('inscripciones', InscripcionController::class);
Route::resource('usuarios', UsuarioController::class);
Route::resource('entrenadores', EntrenadorController::class);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/registro', [AuthController::class, 'showRegistro'])->name('registro');
Route::post('/registro', [AuthController::class, 'registro']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});