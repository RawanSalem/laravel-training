<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('dashboard', [UserController::class, 'dashboard']); 
Route::get('allUsers', [UserController::class, 'allUsers'])->name('users-list');; 
Route::get('login', [UserController::class, 'index'])->name('login');
Route::post('custom-login', [UserController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [UserController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [UserController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [UserController::class, 'signOut'])->name('signout');