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
Route::get('/','moviesController@index')->name('movies.index');
Route::get('/movies/{movies}','moviesController@show')->name('movies.show');

Route::get('/tvseries','TvController@index')->name('tv.index');
Route::get('/tv/{id}','TvController@show')->name('tv.show');





Auth::routes();


