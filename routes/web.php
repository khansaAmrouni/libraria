<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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



/* Route::get('/signin', function () {
    return view('library.signin');
})->name('signin'); */

/* Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome'); */






Route::get('/', function () {
    return view('library.index');
})->name('index');






Route::get('/blog', [BlogController::class, 'show_all_blogs'])->name('blog');




Route::get('/blog-detail', function () {
    return view('library.blog-detail');
})->name('blog-detail');

Route::get('/books-media-detail-v1', function () {
    return view('library.books-media-detail-v1');
})->name('books-media-detail-v1');

Route::get('/books-media-detail-v2', function () {
    return view('library.books-media-detail-v2');
})->name('books-media-detail-v2');

Route::get('/books-media-gird-view-v1', function () {
    return view('library.books-media-gird-view-v1');
})->name('books-media-gird-view-v1');

Route::get('/books-media-gird-view-v2', function () {
    return view('library.books-media-gird-view-v2');
})->name('books-media-gird-view-v2');

Route::get('/books-media-list-view', function () {
    return view('library.books-media-list-view');
})->name('books-media-list-view');

Route::get('/cart', function () {
    return view('library.cart');
})->name('cart');

Route::get('/contact', function () {
    return view('library.contact');
})->name('contact');


Route::get('/news-events-detail', function () {
    return view('library.news-events-detail');
})->name('news-events-detail');

Route::get('/news-events-list-view', function () {
    return view('library.news-events-list-view');
})->name('news-events-list-view');

Route::get('/news-events-list-view', function () {
    return view('library.news-events-list-view');
})->name('news-events-list-view');

Route::get('/services', function () {
    return view('library.services');
})->name('services');





Route::get('/checkout', function () {
    return view('library.checkout');
})->name('checkout');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('/disconnect', function () {
    Auth::logout();


    return redirect('/');
})->name('disconnect');