<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});
Route::get('/home', function() {
    return view('home.index');
});
Route::get('/apartments', function() {
    return view('apartments.index');
});