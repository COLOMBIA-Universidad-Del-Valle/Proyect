<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\Router;

Route::get('/', [HomeController::class, 'index']);

Route::get('/log', [HomeController::class, 'log']);

Route::get('/register', [HomeController::class, 'register']);

Route::get('/job', [HomeController::class, 'job']);

Route::get('/price', [HomeController::class, 'price']);

Route::get('/client', [HomeController::class, 'client']);

Route::get('/invoice', [HomeController::class, 'invoice']);

Route::get('/config', [HomeController::class, 'config']);