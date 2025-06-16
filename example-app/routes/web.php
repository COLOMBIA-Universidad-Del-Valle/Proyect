<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\Router;
use App\Http\Controllers\UsuarioController;

use App\Http\Controllers\CotizacionController;

use App\Http\Controllers\ClienteController;



Route::get('/price', [CotizacionController::class, 'create']);
Route::post('/price', [CotizacionController::class, 'store']);

Route::post('/registrar', [UsuarioController::class, 'registrar'])->name('registrar.usuario');

route::get('/prueba', [HomeController::class, 'prueba']);




Route::post('/password_recovery', [UsuarioController::class, 'recuperarPassword'])->name('recuperar.password');


Route::get('/', [HomeController::class, 'index']);

Route::get('/index2', [HomeController::class, 'index2']);

route::get('/index', [HomeController::class, 'index']);

Route::get('/log', [HomeController::class, 'log']);

Route::post('/log', [UsuarioController::class, 'login'])->name('login.usuario');


Route::get('/register', [HomeController::class, 'register']);

Route::get('/password_recovery', [HomeController::class, 'pas']);

Route::get('/job', [HomeController::class, 'job']);


Route::get('/client', [HomeController::class, 'client']);

Route::get('/invoice', [HomeController::class, 'invoice']);

Route::get('/config', [HomeController::class, 'config']);



Route::get('/job', [HomeController::class, 'job'])
     ->name('vista.job');

Route::post('/log', [UsuarioController::class, 'login'])->name('login.usuario');