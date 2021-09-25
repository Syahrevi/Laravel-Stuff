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
Route::get('/hello', function () {
    return "ma boy";
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/experience', function () {
    return view('experience');
});
Route::get('/portofolio', function () {
    return view('portofolio');
});
Route::get('/demo', function () {
    return view('demo');
 });
Route::get('user/{name?}', function ($name = null) {
    return $name;
});
Route::get('/crud/form', function () {
    return view('/crud/form');
 });
Route::get('/siswa', 'SiswaController@index')->name('siswa.index');
Route::get('/siswa/simpan', 'SiswaController@simpan')->name('siswa.simpan');
Route::post('/siswa', 'SiswaController@prosesSimpan')->name('siswa.prosesSimpan');

Route::get('/datasiswa', 'SiswaController@tampil');
Route::get('/siswa/{siswa}', 'SiswaController@detail');
Route::get('/siswa/hapus/{id}', 'SiswaController@hapus');
