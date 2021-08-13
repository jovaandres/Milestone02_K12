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

Route::get('/', 'NewsController@home')->name('home.home');

Route::get('/news-list', 'NewsController@news_list')->name('home.news');

Route::get('/about', 'NewsController@about')->name('home.about');

Route::get('/lapor', 'NewsController@lapor')->name('home.lapor');

Route::post('/lapor', 'NewsController@store')->name('lapor.submit');

Route::post('/news-list/upvote', 'NewsController@upvote')->name('news.upvote');

Route::post('/news-list/downvote', 'NewsController@downvote')->name('news.downvote');

Route::get('/testing', 'NewsController@index');
