<?php

Route::get('/', 'HomeController@showWelcome');
Route::post('enviar-email', 'HomeController@sendEmail');


Route::get('login', 'AuthController@showLogin');
Route::post('login', 'AuthController@postLogin');
Route::get('logout', 'AuthController@logOut');

Route::resource('sections', 'SectionsController');

/*Route::group(['before' => 'auth'], function()
{
    Route::resource('sections', 'SectionsController');
});*/
