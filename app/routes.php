<?php

Route::get('/', 'HomeController@showWelcome');
Route::post('enviar-email', 'HomeController@sendEmail');
Route::get('proyectos', 'HomeController@showProjects');


Route::get('login', 'AuthController@showLogin');
Route::post('login', 'AuthController@postLogin');
Route::get('logout', 'AuthController@logOut');


Route::group(['before' => 'auth'], function()
{
    Route::resource('sections', 'SectionsController');
});
