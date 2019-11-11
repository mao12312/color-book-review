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
    return view('guide');
});

Route::get('/book_list','ColorController@book_list');

Route::get('/book/create/{id}', 'ColorController@book_create');

Route::post('/book/create/{id}/store', 'ColorController@book_store');

Route::get('/book/result/{id}', 'ColorController@book_result')->name('book_result');

// Route::get('/book/chart/{id}', 'ColorController@book_chart')->name('book_chart');


Route::get('/author_list','ColorController@author_list');

Route::get('/author/create/{id}', 'ColorController@author_create');

Route::post('/author/create/{id}/store', 'ColorController@author_store');

Route::get('/author/result/{id}', 'ColorController@author_result')->name('author_result');

Route::get('/author/chart/{id}', 'ColorController@author_chart')->name('author_chart');