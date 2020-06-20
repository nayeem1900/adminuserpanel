<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Website\PageController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::group(['prefix'=>'users'], function(){

    Route::get('/view', 'Backend\UserController@view')->name('users.view');
    Route::get('/add', 'Backend\UserController@view')->name('users.add');
    Route::post('/store', 'Backend\UserController@view')->name('users.store');

    Route::get('/edit/{id}', 'Backend\UserController@view')->name('users.edit');
    Route::post('/edit/{id}', 'Backend\UserController@view')->name('users.edit');
    Route::post('/update/{id}', 'Backend\UserController@view')->name('users.update');
    Route::get('/delete/{id}', 'Backend\UserController@view')->name('users.delete');
});

Route::group(['prefix'=>'sliders'], function(){

    Route::get('/view', 'Backend\UserController@view')->name('sliders.view');
    Route::get('/add', 'Backend\UserController@view')->name('sliders.add');
    Route::post('/store', 'Backend\UserController@view')->name('sliders.store');

    Route::get('/edit/{id}', 'Backend\UserController@view')->name('sliders.edit');
    Route::post('/edit/{id}', 'Backend\UserController@view')->name('sliders.edit');
    Route::post('/update/{id}', 'Backend\UserController@view')->name('sliders.update');
    Route::get('/delete/{id}', 'Backend\UserController@view')->name('sliders.delete');
});