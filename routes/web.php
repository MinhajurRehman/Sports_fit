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

// Index Page
Route::get('/', function () {
    return view('index');
});

// Index 2 Page
Route::get('/index-2', function () {
    return view('index-2');
});

// about page
Route::get('/about', function () {
    return view('about');
});

// about-2 page
Route::get('/about-2', function () {
    return view('about-2');
});

// Blog page
Route::get('/blog', function () {
    return view('blog');
});

// contact page
Route::get('/contact', function () {
    return view('contact');
});

// team page
Route::get('/team', function () {
    return view('team');
});
