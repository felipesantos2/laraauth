<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[LoginController::class, 'index']);
// Route::get('/login',[LoginController::class, 'create']);
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
