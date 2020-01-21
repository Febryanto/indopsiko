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
    return view('dashboard.home');
});
Route::get('/announce', 'FrontController@getPengumuman')->name('getPengumuman');
Route::get('/dtlPengumuman/{pengumuman}', 'FrontController@getDetailPengumuman')->name('pengumuman.dtl');
Route::get('/client', 'FrontController@getKlien')->name('getKlien');
Route::get('/apply', 'FrontController@getLowongan')->name('getLowongan');
Route::get('/apply/{lowongan}', 'FrontController@getLowonganbyid')->name('getLowonganbyid');
Route::post('/apply', 'FrontController@applylowongan')->name('apply.store');
Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('proper', 'ProPerController');
Route::resource('klien', 'KlienController');
Route::resource('lowongan', 'LowonganController');
Route::resource('berita', 'BeritaController');
Route::resource('pengumuman', 'PengumumanController');
Route::resource('pelamar', 'PelamarController');
Route::get('/getDownloadpelamar/{pelamar}', 'PelamarController@getDownload')->name('getDownload.pelamar');
Route::get('/getExcelpelamar', 'PelamarController@getExcel')->name('getExcel.pelamar');
Route::get('/getPdfpelamar', 'PelamarController@getPdf')->name('getPdf.pelamar');
