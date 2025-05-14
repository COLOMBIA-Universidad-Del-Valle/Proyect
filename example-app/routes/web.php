<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\Router;
use App\Http\Controllers\UsuarioController;

Route::post('/registrar', [UsuarioController::class, 'registrar'])->name('registrar.usuario');




Route::post('/recuperar-password', [UsuarioController::class, 'recuperarPassword'])->name('recuperar.password');


Route::get('/', [HomeController::class, 'index']);

Route::get('/index2', [HomeController::class, 'index2']);

route::get('/index', [HomeController::class, 'index']);

Route::get('/log', [HomeController::class, 'log']);

Route::get('/register', [HomeController::class, 'register']);

Route::get('/password_recovery', [HomeController::class, 'pas']);

Route::get('/job', [HomeController::class, 'job']);

Route::get('/price', [HomeController::class, 'price']);

Route::get('/client', [HomeController::class, 'client']);

Route::get('/invoice', [HomeController::class, 'invoice']);

Route::get('/config', [HomeController::class, 'config']);

Route::get('/login', function () {
    return view('ruta.log.log');
})->name('login');

Route::get('/client', function () {
    return view('ruta.job.client');
})->name('client');

Route::get('/index', function () {
    return view('ruta.index');
})->name('index');