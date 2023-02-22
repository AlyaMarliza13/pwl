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
    echo "Selamat Datang";
});

Route::get('/about', function () {
    echo "2141720004 || Alya Marliza Koesnanto";
});

Route::get('/articles/{id}', function () {
    echo "Halaman Artikel 1";
});

Route::get('/articles/{id}', function () {
    echo "Halaman Artikel 2";
});
