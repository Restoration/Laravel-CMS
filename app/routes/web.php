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

Auth::routes();
// Top
Route::get('/home', 'HomeController@index')->name('home');
// Article
Route::get('/article', 'ArticleController@index');
Route::get('/article/create', 'ArticleController@create');
Route::post('/article/create', 'ArticleController@store');
Route::get('/article/edit/{id}', 'ArticleController@edit');
Route::post('/article/edit', 'ArticleController@update');
Route::get('/article/delete/{id}', 'ArticleController@confirm');
Route::post('/article/delete', 'ArticleController@delete');
// File
Route::get('/file/index', 'FileController@index');
Route::get('/file/add', 'FileController@add');
Route::post('/file/upload', 'FileController@upload');
Route::get('/file/edit/{id}', 'FileController@edit');
Route::post('/file/delete', 'FileController@delete');
