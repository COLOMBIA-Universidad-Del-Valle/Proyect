<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\Router;

Route::get('/', [HomeController::class, 'index']);
Route::get('/log.php', [HomeController::class, 'log']);
route::get('/register.php', [HomeController::class, 'register']);


