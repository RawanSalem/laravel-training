<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('signup/details', function () {
    return view('profile_type');
})->name('profile_type');

Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.home')->middleware("auth:webadmin");
Route::get('admin/login', [AdminController::class, 'index'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login'])->name('admin_login_auth');
Route::get('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::get('signup/client/register', [ClientController::class, 'create'])->name('client_register');
Route::post('signup/client/register', [ClientController::class, 'store'])->name('client_register_user');

Route::get('signup/freelancer/register', [FreelancerController::class, 'create'])->name('freelancer_register');
Route::post('signup/freelancer/register', [FreelancerController::class, 'store'])->name('register_user');

Route::get('login', [AuthController::class, 'index'])->name('user.login');
Route::post('login', [AuthController::class, 'login'])->name('login_auth');
Route::get('logout', [AuthController::class, 'logout'])->name('user_logout');

Route::get('client/profile', function () {
    return view('auth.client.dashboard', array('user' => Auth::user()));
})->middleware("auth:web");
Route::get('freelancer/profile', function () {
    return view('auth.freelancer.dashboard', array('user' => Auth::user()));
})->middleware("auth:web");

Route::resource('admin/services', ServiceController::class)->name('*', 'admin.services.services')->middleware("auth:webadmin");

Route::resource('admin/users', UserController::class)->name('*', 'admin.users.users')->middleware("auth:webadmin");