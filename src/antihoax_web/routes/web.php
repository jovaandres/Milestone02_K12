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
    return view('home');
});

Route::get('/news-list', 'NewsController@news_list')->name('home.news');
Route::post('/news-list', 'NewsController@cek_news')->name('news.cek');

Route::get('/about', function () {
    return view('about');
});

Route::get('/lapor', function () {
    return view('lapor');
});
Route::post('/lapor', 'NewsController@store')->name('home.lapor');
