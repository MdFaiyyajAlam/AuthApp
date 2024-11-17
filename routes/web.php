<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\TestUser;
use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/inner', [UserController::class,'innerPage']
)->name('innerPage')->middleware(['auth','IsUserValid:admin']);

Route::get('/dashboard',[UserController::class, 'dashboardPage'])->name('dashboardPage')
->middleware(['auth','IsUserValid:admin']);

Route::get('/dashboard/user-profile', [UserController::class, 'userprofile'])->name('userprofile')
    ->middleware(['auth', 'IsUserValid:admin']);

// Route::middleware(['ok-user'])->group(function(){
//     Route::get('/inner',[UserController::class, 'innerPage']
//     )->name('innerPage');

//     Route::get('/dashboard', [UserController::class, 'dashboardPage'])->name('dashboardPage')->withoutMiddleware([TestUser::class]);
// });

Route::view('register','register')->name('register');
Route::post('/registerStore',[UserController::class,'registerStore'])->name('registerStore');

Route::view('login','login')->name('login');


Route::post('/login',[UserController::class,'loginMatch'])->name('loginMatch');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
