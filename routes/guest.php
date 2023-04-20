<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Guest Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::inertia('/about', 'Guest/About')->name('about');
Route::get('/contact', fn () => Inertia::render('Guest/Contact') )->name('contact');
//Route::get('/about', fn () => Inertia::render('Guest/About') )->name('about');
