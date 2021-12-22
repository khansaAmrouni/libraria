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





Route::get('/404', function () {
    return view('library.404');
});

Route::get('/blog', function () {
    return view('library.blog');
});

Route::get('/blog-detail', function () {
    return view('library.blog-detail');
});

Route::get('/books-media-detail-v1', function () {
    return view('library.books-media-detail-v1');
});

Route::get('/books-media-detail-v2', function () {
    return view('library.books-media-detail-v2');
});

Route::get('/books-media-gird-view-v1', function () {
    return view('library.books-media-gird-view-v1');
});

Route::get('/books-media-gird-view-v2', function () {
    return view('library.books-media-gird-view-v2');
});

Route::get('/books-media-list-view', function () {
    return view('library.books-media-list-view');
});

Route::get('/cart', function () {
    return view('library.cart');
});

Route::get('/contact', function () {
    return view('library.contact');
});

Route::get('/home-v2', function () {
    return view('library.home-v2');
});

Route::get('/home-v3', function () {
    return view('library.home-v3');
});

Route::get('/index-2', function () {
    return view('library.index-2');
});

Route::get('/news-events-detail', function () {
    return view('library.news-events-detail');
});

Route::get('/news-events-list-view', function () {
    return view('library.news-events-list-view');
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
