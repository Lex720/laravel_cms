<?php

Route::get('/', 'HomeController@showWelcome');

Route::resource('sections', 'SectionsController');

/*Route::get('prueba', function()
{
    return View::make('prueba');
});*/