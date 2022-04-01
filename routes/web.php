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
    return view('welcome');
});

Route::get('/services-single', function () {
    return view('pages/services-single');
});

Route::get('/post-single', function () {
    return view('pages/post-single');
});

Route::get('/gallery-cobbles', function () {
    return view('pages/gallery-cobbles');
});

Route::get('/about-style-1', function () {
    return view('pages/about-style-1');
});

Route::get('/contacts', function () {
    return view('pages/contacts');
});

Route::get('/team-single', function () {
    return view('pages/team-single');
});

Route::get('/homepage-boxed', function () {
    return view('pages/homepage-boxed');
});

Route::get('/shortcodes', function () {
    return view('pages/shortcodes');
});

Route::get('/typography', function () {
    return view('pages/typography');
});

Route::get('/team', function () {
    return view('pages/team');
});

Route::get('/team-single', function () {
    return view('pages/team-single');
});

Route::get('/gallery-grid', function () {
    return view('pages/gallery-grid');
});

Route::get('/gallery-cobbles', function () {
    return view('pages/gallery-cobbles');
});

Route::get('/gallery-masonry', function () {
    return view('pages/gallery-masonry');
});

Route::get('/support', function () {
    return view('pages/support');
});

Route::get('/customization', function () {
    return view('pages/customization');
});

Route::get('/video-tutorials', function () {
    return view('pages/video-tutorials');
});

Route::get('/about-style-1', function () {
    return view('pages/about-style-1');
});

Route::get('/about-style-2', function () {
    return view('pages/about-style-2');
});

Route::get('/services', function () {
    return view('pages/services');
});

Route::get('/blog-streampage', function () {
    return view('pages/blog-streampage');
});

Route::get('/blog-classic-2-columns', function () {
    return view('pages/blog-classic-2-columns');
});

Route::get('/blog-classic-3-columns', function () {
    return view('pages/blog-classic-3-columns');
});

Route::get('/blog-chess-2-columns', function () {
    return view('pages/blog-chess-2-columns');
});

Route::get('/blog-chess-4-columns', function () {
    return view('pages/blog-chess-4-columns');
});

Route::get('/blog-chess-6-columns', function () {
    return view('pages/blog-chess-6-columns');
});

Route::get('/email', 'EmailController@create');
Route::post('/email', 'App\Http\Controllers\EmailController@sendEmail')->name('send.email');