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
    return view('app.home');
});

Route::get('/php', 'RouteController@php')->name('php');
Route::get('/php_and_mysql', 'RouteController@php_mysql')->name('php_mysql');
Route::get('/ajax', 'RouteController@javascript_ajax')->name('javascript_ajax');

Route::post('/php/array', 'PhpController@arr')->name('array_controller');
Route::post('/php/string', 'PhpController@str')->name('string_controller');


Route::post('/php_and_mysql', 'DatabaseController@index')->name('database_controller');
Route::delete('/php_and_mysql/delete', 'DatabaseController@delete_user')->name('delete_user');
Route::delete('/php_and_mysql/truncate', 'DatabaseController@truncate')->name('truncate');
Route::get('/php_and_mysql/edit/{id}', 'DatabaseController@edit_user')->name('edit_user');
Route::put('/php_and_mysql/edit/{id}', 'DatabaseController@update_user')->name('update_user');
Route::post('/search', 'DatabaseController@search')->name('search');
Route::get('/load_init_data', 'DatabaseController@load_init_data');

Route::post('load_data', 'AjaxController@load_data');
Route::post('create_ajax', 'AjaxController@create_ajax');