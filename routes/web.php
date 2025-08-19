<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApartmentsController;
use App\Http\Controllers\Admin\ApartmentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\RoleMiddleware;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index']);
Route::get('/contact', fn() => view('contact.index'))->name('contact');

Route::get('/apartments', [ApartmentsController::class, 'index'])->name('apartments.index');
Route::get('/apartments/{id}', [ApartmentsController::class, 'show'])->name('apartments.show');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

/*
|--------------------------------------------------------------------------
| User & Admin Routes
|--------------------------------------------------------------------------
*/
// Admin-only
Route::middleware([RoleMiddleware::class . ':admin'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'index']);
});

// User + Admin
Route::middleware([RoleMiddleware::class . ':user,admin'])->group(function () {
    Route::resource('my-apartments', ApartmentController::class);
});

/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->middleware([RoleMiddleware::class . ':admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('apartments', ApartmentController::class);
    Route::resource('locations', LocationController::class);
});
