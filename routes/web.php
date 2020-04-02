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
    return view('welcome');
});

Route::get('/dosen_tetap','DosenTetapController@index');
Route::get('/dosen_tidak_tetap','DosenTidakTetapController@index');
Route::get('/dosen_pembimbing','DosenPembimbingController@index');
Route::get('/dosen_industri','DosenIndustriController@index');
Route::get('/ewmp_dosen','EWMPDosenController@index');
Route::get('/rekognisi_dosen','RekognisiDosenController@index');