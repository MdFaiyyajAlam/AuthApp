<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inner', [UserController::class,'innerPage']
)->name('innerPage')->middleware(ValidUser::class);

Route::get(
    '/dashboard',
    [UserController::class, 'dashboardPage']
)->name('dashboardPage')
->middleware(ValidUser::class);

Route::view('register','register')->name('register');
Route::post('/registerStore',[UserController::class,'registerStore'])->name('registerStore');

Route::view('login','login')->name('login');


Route::post('/login',[UserController::class,'loginMatch'])->name('loginMatch');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
