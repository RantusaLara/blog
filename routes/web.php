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

Route::get('/lara', function () {
    return view('test');
});

Route::get('/posts', 'PostsController@index');

Route::post('/posts/{id}', 'PostsController@posodobi');

Route::get('/posts/{id}', 'PostsController@show');

Route::get('/posts/{id}/edit', 'PostsController@edit');

Route::get('/posts/{id}/delete', 'PostsController@destroy');



Route::get('/nova', function () {
    return view('nova');
});

Route::post('/vnos', 'PostsController@vnos');

Route::get('/izpis', 'PostsController@izpis');
