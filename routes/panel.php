<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
|
*/


Route::resource('products', 'ProductController');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
