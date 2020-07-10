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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pertanyaan/show', 'PertanyaanController@show'); // menampilkan detail pertanyaan dengan id
Route::get('/pertanyaan','PertanyaanController@index');
Route::get('/pertanyaan/{id}', 'PertanyaanController@show'); // menampilkan detail pertanyaan dengan id


Route::get('/pertanyaan/create', 'PertanyaanController@create')->middleware('auth');
Route::post('/pertanyaan', 'PertanyaanController@store');
Route::get('/pertanyaan/{id}/delete','PertanyaanController@delete');

