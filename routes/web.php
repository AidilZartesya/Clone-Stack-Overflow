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





Auth::routes();
Route::get('/', function () {
    return view('index');
});


Route::get('/pertanyaan','PertanyaanController@index');
Route::get('/pertanyaan/create', 'PertanyaanController@create')->middleware('auth');
Route::post('/pertanyaan', 'PertanyaanController@store');
Route::get('/pertanyaan/{id}', 'PertanyaanController@show'); // menampilkan detail pertanyaan dengan id
Route::get('/pertanyaan/{id}/delete','PertanyaanController@delete');

Route::get('/jawaban/{id}','JawabanController@index');
Route::post('/pertanyaan/komentar/{id}','PertanyaanController@kometar_pertanyaan');
Route::post('/jawaban/komentar/{id}','PertanyaanController@kometar_jawaban');
Route::post('/jawaban/{id}','JawabanController@store');

