<?php

use Illuminate\Support\Facades\Route;
 
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/users', 'UserController');
 
Route::get('/admin/create', 'UserController@create');
Route::get('/admin/{user}/edit', 'UserController@edit');
 
 
 
 