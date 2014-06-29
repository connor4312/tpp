<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',                  ['as' => 'home',     'uses' => 'PagesController@index']);
Route::get('/{category}',        ['as' => 'category', 'uses' => 'PagesController@category']);
Route::get('/{category}/{page}', ['as' => 'page',     'uses' => 'PagesController@page']);

Route::post('/', ['as' => 'search', 'uses' => 'PagesController@search']);