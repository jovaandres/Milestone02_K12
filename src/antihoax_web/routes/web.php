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
    return view('home', [
        "title" => "AntiHoax || Home",
        "css" => "home.css"
    ]);
});

Route::get('/news-list', function () {
    return view('news-list', [
        "title" => "AntiHoax || News List",
        "css" => "news-list.css"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "AntiHoax || About Us",
        "css" => "about.css"
    ]);
});

Route::get('/lapor', function () {
    return view('lapor', [
        "title" => "AntiHoax || Laporkan",
        "css" => "lapor.css"
    ]);
});

Route::post('/news-list/cek', 'NewsController@check')->name('news.cek');

Route::get('/testing', 'NewsController@index');
