<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {
    return view('guest.pages.welcome');
})->name('home');

Route::get('/login', [LoginController::class, 'create'])
    ->name('login.create');

Route::post('/login', [LoginController::class, 'store'])
    ->name('login.store');

Route::post('/logout', [LoginController::class, 'destroy'])
    ->name('login.destroy');

Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
})->name('dashbord');


// Route::get('/login',[LoginController::class, 'store']);
// Route::get('/',[LoginController::class, 'index']);



/**
 * 1 diskpart
 * 2 list disk
 * 3 select disk 3
 * 4 clean
 *
 *
 *
 */
