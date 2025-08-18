<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApartmentsController;
use App\Http\Controllers\Admin\ApartmentController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return view('home.index');
});
Route::get('/home', function() {
    return view('home.index');
});
Route::get('/contact', function(){
    return view('contact.index');
});
Route::get('/apartments', [ApartmentsController::class, 'index'])->name('apartments.index');

Route::get('/apartments', [ApartmentsController::class, 'index'])->name('apartments.index');
Route::get('/apartments/{id}', [ApartmentsController::class, 'show'])->name('apartments.show');

// Admin routes
Route::prefix('admin')->name('admin.')->group(function (){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('apartments', ApartmentController::class);
});