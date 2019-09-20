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

Route::get('/', 'BlogController@index');

Route::prefix('blog')->group(function () {
    Route::get('/', 'BlogController@index')->name('blog.home');
    Route::get('/create', 'BlogController@getCreatePage')->name('blog.create.view');
    Route::get('/all', "BlogController@all")->name('blog.all');
    Route::post('/blog/create', "BlogController@create")->name('blog.create.submit');
    Route::get('/edit/{post_id}', 'BlogController@getEditPage')->name('blog.edit.view');
});
