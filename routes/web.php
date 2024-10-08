<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $title = 'Layout base - HOME';
    return view('home', compact('title'));
})->name('home');

Route::get('/comics', function () {
    return view('comics');
})->name('comics');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');
