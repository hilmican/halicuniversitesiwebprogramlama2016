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

Route::get('/kayit-form', function () {
    return view('kayit-form');
});

Route::get('/kayit-form2', function () {
    return view('kayit-form2');
});

Route::get('/ogrenci-kayit', 'Ogrenciler@kayit');

Route::get('/ogrenci-listele', 'Ogrenciler@listele');

Route::get('/ogrenci-listele2', 'Ogrenciler@listele2');

Route::get('/ogrenci-sil', 'Ogrenciler@sil');

Route::get('/arrayOrnek', 'Ogrenciler@arrayOrnek');

Route::get('/t', function () {
    return view('test2');
});

Route::get('/listele-blade', function () {
    return view('listele');
});