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

Route::group(['prefix' => App\Http\Middleware\Language::getLocale()], function(){

    Route::get('/', function () {
        return view('app.home');
    });

    Route::get('/php', 'RouteController@php')->name('php');
    Route::get('/file', 'RouteController@file')->name('file');
    Route::get('/mysql', 'RouteController@mysql')->name('php_mysql');
    Route::get('/ajax', 'RouteController@ajax')->name('javascript_ajax');

    Route::post('/php/array', 'PhpController@arr')->name('array_controller');
    Route::get('/download/{path}', 'DownloadController@index')->name('download');
    Route::post('/save_file_content', 'FileController@saveFileContent')->name('save_file_content');
    Route::post('/create_file', 'FileController@createFile')->name('create_file');
    Route::delete('/delete_file', 'FileController@deleteFile')->name('delete_file');

    Route::post('/mysql', 'DatabaseController@index')->name('database_controller');
    Route::delete('/mysql/delete', 'DatabaseController@deleteUser')->name('delete_user');
    Route::delete('/truncate', 'DatabaseController@truncate')->name('truncate');
    Route::get('/mysql/edit/{id}', 'DatabaseController@editUser')->name('edit_user');
    Route::put('/mysql/edit/{id}', 'DatabaseController@updateUser')->name('update_user');
    Route::post('/mysql/search', 'DatabaseController@search')->name('search');

    Route::get('/load_init_data', 'DatabaseController@loadInitData')->name('init_data');

    Route::post('load_data', 'AjaxController@loadData');
    Route::post('create_ajax', 'AjaxController@createAjax');

    Route::get('/change_locale', 'LanguageController@change_locale')->name('locale');

});

Route::get('/change_locale/{lang}', function ($lang) {

    $referer = url()->previous();
    $parse_url = parse_url($referer, PHP_URL_PATH);

    $segments = explode('/', $parse_url);

    if (in_array($segments[1], App\Http\Middleware\Language::$languages)) {

        unset($segments[1]);
    }

    if ($lang != App\Http\Middleware\Language::$mainLanguage){
        array_splice($segments, 1, 0, $lang);
    }


    $url = request()->root().implode("/", $segments);

    if(parse_url($referer, PHP_URL_QUERY)){
        $url = $url.'?'. parse_url($referer, PHP_URL_QUERY);
    }
    return redirect($url);

})->name('locale');