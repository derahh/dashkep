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

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');

Route::get('/', function () {
    return view('welcome');
});

//method view
Route::get('/dosen_tetap','DosenTetapController@index');
Route::get('/dosen_tidak_tetap','DosenTidakTetapController@index');
Route::get('/dosen_pembimbing','DosenPembimbingController@index');
Route::get('/dosen_industri','DosenIndustriController@index');
Route::get('/ewmp_dosen','EWMPDosenController@index');
Route::get('/rekognisi_dosen','RekognisiDosenController@index');

//method export
Route::get('/dosen_tetap/export','DosenTetapController@export_excel');
Route::get('/dosen_tidak_tetap/export','DosenTidakTetapController@export_excel');
Route::get('/dosen_pembimbing/export','DosenPembimbingController@export_excel');
Route::get('/dosen_industri/export','DosenIndustriController@export_excel');
Route::get('/ewmp_dosen/export','EWMPDosenController@export_excel');
Route::get('/rekognisi_dosen/export','RekognisiDosenController@export_excel');

//method create
Route::post('/dosen_tetap/create','DosenTetapController@store');
Route::post('/dosen_tidak_tetap/create','DosenTidakTetapController@store');
Route::post('/dosen_pembimbing/create','DosenPembimbingController@store');
Route::post('/dosen_industri/create','DosenIndustriController@store');
Route::post('/ewmp_dosen/create','EWMPDosenController@store');
Route::post('/rekognisi_dosen/create','RekognisiDosenController@store');

//method delete
Route::post('/dosen_tetap/delete/{id}','DosenTetapController@destroy');
Route::post('/dosen_tidak_tetap/delete/{id}','DosenTidakTetapController@destroy');
Route::post('/dosen_pembimbing/delete/{id}','DosenPembimbingController@destroy');
Route::post('/dosen_industri/delete/{id}','DosenIndustriController@destroy');
Route::post('/ewmp_dosen/delete/{id}','EWMPDosenController@destroy');
Route::post('/rekognisi_dosen/delete/{id}','RekognisiDosenController@destroy');

//method update
Route::post('/dosen_tetap/update/{id}','DosenTetapController@update');
Route::post('/dosen_tidak_tetap/update/{id}','DosenTidakTetapController@update');
Route::post('/dosen_pembimbing/update/{id}','DosenPembimbingController@update');
Route::post('/dosen_industri/update/{id}','DosenIndustriController@update');
Route::post('/ewmp_dosen/update/{id}','EWMPDosenController@update');
Route::post('/rekognisi_dosen/update/{id}','RekognisiDosenController@update');