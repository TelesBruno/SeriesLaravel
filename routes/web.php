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

use App\Http\Controllers\SeriesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', 'SeriesController@index')->name('series');

Route::get('/series/adicionar', 'SeriesController@create')->name('adicionar');

Route::post('/series/adicionar', 'SeriesController@store');

Route::delete('/series/{id}', 'SeriesController@destroy')->name('remover');
 