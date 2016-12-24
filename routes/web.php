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

Route::get('/',[ 'as' => 'index', 'uses' => 'ArticleController@index']);
Route::get('/page/{page}', [ 'as' => 'page', 'uses' => 'ArticleController@index']);
Route::resource('article','ArticleController',['only'=>['show']]);
Route::resource('category','CategoryController',['only'=>['show']]);
Route::resource('tag','TagController',['only'=>['show']]);
Route::get('article/{id}/comment', 'ArticleController@comments');
Route::get('comment/{id}','CommentController@show');