<?php

use Illuminate\Support\Facades\Route;

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
    return view('library.index');
});



Route::get('/news-events-detail', function () {
    return view('library.news-events-detail');
});




Route::get('/news-events-list-view', function () {
    return view('library.news-events-list-view');
});




Route::get('/services', function () {
    return view('library.services');
});




Route::get('/signin', function () {
    return view('library.signin');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
