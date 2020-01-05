<?php

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
    return view('beranda');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('proper', 'ProPerController');
Route::resource('klien', 'KlienController');
Route::resource('lowongan', 'LowonganController');
Route::resource('berita', 'BeritaController');
Route::resource('pengumuman', 'PengumumanController');
