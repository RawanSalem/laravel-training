<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('login',[AuthController::class, 'index'])->name('login');
Route::post('login_auth', [AuthController::class, 'login'])->name('login_auth'); 

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard']);
    Route::get('userList', [DashboardController::class, 'userList'])->name('users_list'); 
    Route::get('userRegistration', [UserController::class, 'userRegistration'])->name('register_user');
    Route::post('registration', [UserController::class, 'registration'])->name('register_create');    
    Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

    Route::get('services', [ServiceController::class, 'index'])->name('index');
    Route::post('services', [ServiceController::class, 'store'])->name('store');
    Route::get('services/create', [ServiceController::class, 'create'])->name('create');
    Route::get('services/{service}', [ServiceController::class, 'show'])->name('show');
    Route::put('services/{service}', [ServiceController::class, 'update'])->name('update');
    Route::delete('services/{service}', [ServiceController::class, 'destroy'])->name('destroy');
    Route::get('services/{service}/edit', [ServiceController::class, 'edit'])->name('edit');

});

// Route::resource('services', ServiceController::class);

// Route::get('services', [ServiceController::class, 'index'])->name('index');
// Route::post('services', [ServiceController::class, 'store'])->name('store');
// Route::get('services/create', [ServiceController::class, 'create'])->name('create');
// Route::get('services/{service}', [ServiceController::class, 'show'])->name('show');
// Route::put('services/{service}', [ServiceController::class, 'update'])->name('update');
// Route::delete('services/{service}', [ServiceController::class, 'destroy'])->name('destroy');
// Route::get('services/{service}/edit', [ServiceController::class, 'edit'])->name('edit');


// Route::get('/{lang}',function ($lang) {
//     App::setlocale($lang);
//     return view('auth.login');
// })->name('login');

// Route::post('login_auth', [AuthController::class, 'login'])->name('login_auth'); 


// Route::middleware('auth')->group(function () {
//     Route::get('dashboard', [DashboardController::class, 'dashboard']);
//     Route::get('userList', [DashboardController::class, 'userList'])->name('users_list'); 
//     Route::get('userRegistration', [UserController::class, 'userRegistration'])->name('register_user');
//     Route::post('registration', [UserController::class, 'registration'])->name('register_create');  
//     Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

// });

// // Route::resource('services', ServiceController::class);

// Route::get('services', [ServiceController::class, 'index'])->name('index');
// Route::post('services', [ServiceController::class, 'store'])->name('store');
// Route::get('services/create', [ServiceController::class, 'create'])->name('create');
// Route::get('services/{service}', [ServiceController::class, 'show'])->name('show');
// Route::put('services/{service}', [ServiceController::class, 'update'])->name('update');
// Route::delete('services/{service}', [ServiceController::class, 'destroy'])->name('destroy');
// Route::get('services/{service}/edit', [ServiceController::class, 'edit'])->name('edit');

