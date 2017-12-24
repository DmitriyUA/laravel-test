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
Route::get('/html_and_css', 'RouteController@html_css')->name('html_css');
Route::get('/javascript(jquery)_and_ajax', 'RouteController@javascript_ajax')->name('javascript_ajax');

Route::post('/php', 'ArrayController@index')->name('array_controller');
Route::post('/php_and_mysql', 'DatabaseController@index')->name('database_controller');
Route::delete('/php_and_mysql/delete', 'DatabaseController@delete_user')->name('php_mysql_delete');
Route::delete('/php_and_mysql/truncate', 'DatabaseController@truncate')->name('truncate');