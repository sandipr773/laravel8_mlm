<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;


Route::get('/',[HomeController::class,'index'])->name('user.home');
Route::get('/login',[LoginController::class,'index'])->name('user.login');
Route::get('/register',[RegisterController::class,'index'])->name('user.register');
