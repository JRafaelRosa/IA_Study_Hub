<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\LoginController;
use App\Http\Controllers\web\IndexController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'form']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/home', [IndexController::class, 'index']);
