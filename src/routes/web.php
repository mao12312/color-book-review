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
    return view('guide1');
});

Route::get('/guide2', function () {
    return view('guide2');
});

Route::get('/book_list','ColorController@book_list');

Route::get('/book/create/{id}', 'ColorController@book_create');

Route::post('/book/create/{id}/store', 'ColorController@book_store');
