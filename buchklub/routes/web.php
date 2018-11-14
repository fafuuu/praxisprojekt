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

Route::get('/books', 'BooksController@index');

Route::post('/books', 'BooksController@store');

Route::get('/books/create', 'BooksController@create');

Route::get('/books/notfound', 'BooksController@notfound');

Route::get('/books/{book}', "BooksController@show");

Route::post('/books/{book}/refs', 'BookRefsController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
