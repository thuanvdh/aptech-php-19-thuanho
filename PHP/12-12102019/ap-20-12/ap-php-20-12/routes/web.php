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

Route::get('/articles','ArticleController@index')->name('articles.index');

Route::get('articles/create','ArticleController@create')->name('articles.create');

Route::get('articles/{id}/edit','ArticleController@edit')->name('articles.edit');

Route::put('/articles/{id}/edit','ArticleController@update')->name('articles.update');

Route::get('/articles/{id}','ArticleController@show')->name('articles.show');

Route::delete('/articles/{id}','ArticleController@destroy')->name('articles.destroy');

Route::post('/articles','ArticleController@store')->name('articles.store');






Route::get('/categories','CategoryController@index')->name('categories.index');

Route::get('categories/create','CategoryController@create')->name('categories.create');

Route::get('categories/{id}/edit','CategoryController@edit')->name('categories.edit');

Route::put('/categories/{id}/edit','CategoryController@update')->name('categories.update');

Route::get('/categories/{id}','CategoryController@show')->name('categories.show');

Route::delete('/categories/{id}','CategoryController@destroy')->name('categories.destroy');

Route::post('/categories','CategoryController@store')->name('categories.store');



















