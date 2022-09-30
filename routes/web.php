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
    return view('index');
});


Route::get('/about', function () {
    $judul = 'About Us';
    return view('about', ['judul' => $judul]);
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});
Route::get('/cs', function () {
    return view('customer');
});