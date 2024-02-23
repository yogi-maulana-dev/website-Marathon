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
    return view('welcome');
});

Route::get('/race-maps', function () {
    return view('race-maps');
});

Route::get('/race-pack-collection', function () {
    return view('race-pack-collection');
});
Route::get('/rules-regulations', function () {
    return view('rules-regulations');
});
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/contact', function () {
    return view('contact');
});



