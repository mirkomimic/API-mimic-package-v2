<?php

use App\Controllers\Auth\SessionController;
use App\Controllers\UserController;
use App\Http\Route;

require_once './vendor/autoload.php';

session_start();

Route::post('login', [SessionController::class, 'login']);
Route::post('logout', [SessionController::class, 'logout']);
Route::post('register', [UserController::class, 'store']);
