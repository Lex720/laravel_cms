<?php

Route::get('/', function()
{
    return View::make('index');
});


Route::group(['before' => 'auth'], function()
{
    Route::resource('sections', 'SectionsController');
});


Route::get('login', 'AuthController@showLogin');
Route::post('login', 'AuthController@postLogin');
Route::get('logout', 'AuthController@logOut');
