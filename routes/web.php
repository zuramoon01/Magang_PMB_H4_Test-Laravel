<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return "Respon ini diterima dari path / dengan method GET";
});

Route::get('/books/add', 'BookController@create');
Route::get('/books/edit/{id}', 'BookController@edit');

Route::get('/books', 'BookController@index');
Route::post('/books', 'BookController@store');

Route::get('/books/{id}', 'BookController@show');
Route::put('/books/{id}', 'BookController@update');
Route::delete('/books/{id}', 'BookController@destroy');