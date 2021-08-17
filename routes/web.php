<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login_auth', [AuthController::class, 'login'])->name('login_auth'); 


Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard']);
    Route::get('userList', [DashboardController::class, 'userList'])->name('users_list'); 
    Route::get('userRegistration', [UserController::class, 'userRegistration'])->name('register_user');
    Route::post('registration', [UserController::class, 'registration'])->name('register_create');  
    Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

});