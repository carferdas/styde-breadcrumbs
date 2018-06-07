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
    return view('home');
})->name('home');

Route::get('/genres', 'GenreController@index')->name('genres');
Route::get('/genres/{genre}', 'GenreController@show')->name('genres.show');
Route::get('/movies/{movie}', 'MovieController@show')->name('movies.show');
