<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


//login
Route::get('/',[UserController::class,'login'])->name('login');

//register
Route::get('/register',[UserController::class,'register'])->name('register');
Route::post('register',[UserController::class, 'registerStore'])->name('register.store');
Route::resource('users',UserController::class);

