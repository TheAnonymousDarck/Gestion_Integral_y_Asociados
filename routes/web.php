<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
})->name('welcome');

Route::get('/about', fn () => Inertia::render('Guest/About', [
    'canLogin' => Route::has('login'),
    'canRegister' => Route::has('register'),
]))->name('about');
Route::get('/contact', fn () => Inertia::render('Guest/Contact', [
    'canLogin' => Route::has('login'),
    'canRegister' => Route::has('register'),
]))->name('contact');
Route::get('/prices', fn () => Inertia::render('Guest/Prices', [
    'canLogin' => Route::has('login'),
    'canRegister' => Route::has('register'),
]))->name('prices');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

//require __DIR__.'/guest.php';
