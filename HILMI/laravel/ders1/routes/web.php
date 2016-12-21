<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/basit', function () {
    return view('basit-view');
});

Route::get('ogrencig','Sorgu@index');

Route::get('login-degerlendir','Sorgu@login');

Route::get('/login', function () {
    return view('login-form');
});