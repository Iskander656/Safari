<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApartmentsController;

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