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

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/', 'UrusPagesController@getHome');
Route::get('/contact', 'UrusPagesController@getContact');
Route::get('/about', 'UrusPagesController@getAbout');

#daftar
Route::get('/login', 'UrusPagesController@getLogin');
Route::get('/daftar', 'UrusPagesController@getDaftar');

#Pages Staf
Route::get('/staf', 'UrusPagesController@getStaf');
Route::get('/waris', 'UrusPagesController@getWaris');
Route::get('/akaun', 'UrusPagesController@getAkaun');
Route::get('/senarai', 'UrusStafController@getSenarai');

#Maklumat Staf
Route::post('/daftar/submit', 'DaftarStafController@daftarAkaun');
Route::post('/login/submit', 'DaftarStafController@daftarMasuk');
Route::post('/staf/submit', 'UrusStafController@submitStaf');
Route::post('/waris/submit', 'UrusStafController@submitWaris');
Route::post('/akaun/submit', 'UrusStafController@submitAkaun');


				
