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

Auth::routes();

Route::group(['middleware' => 'auth'], function() {

    /*
        Home
    */

    Route::get('/', 'HomeController@index')->name('index');

    /*
        Users
    */
    
    Route::get('/users', 'UserController@index')->name('users.index');
    Route::get('/users/create', 'UserController@create')->name('users.create');
    Route::get('/users/{id}', 'UserController@show')->name('users.show');
    Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');

    Route::post('/users/create', 'UserController@store')->name('users.store');
    Route::post('/users/{id}/edit', 'UserController@update')->name('users.update');

    Route::delete('/users/{id}/delete', 'UserController@destroy')->name('users.destroy');

    /*
        Groups
    */
    Route::get('/groups', 'GroupController@index')->name('groups.index');
    Route::get('/groups/create', 'GroupController@create')->name('users.create');
    Route::get('/groups/{id}', 'GroupController@show')->name('users.show');
    Route::get('/groups/{id}/edit', 'GroupController@edit')->name('users.edit');

    /*
        Computers
    */
    
    Route::get('/computers', 'ComputerController@index')->name('computers.index');
    Route::get('/computers/create', 'ComputerController@create')->name('computers.create');
    Route::get('/computers/{id}', 'ComputerController@show')->name('computers.show');
    Route::get('/computers/{id}/edit', 'ComputerController@edit')->name('computers.edit');

    Route::post('/computers/create', 'ComputerController@store')->name('computers.store');
    Route::post('/computers/{id}/edit', 'ComputerController@update')->name('computers.update');

    Route::delete('/computers/{id}/delete', 'ComputerController@destroy')->name('computers.destroy');

});