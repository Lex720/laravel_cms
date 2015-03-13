<?php

class AuthController extends BaseController {
 
    public function showLogin()
    {
        // Verificamos si hay sesión activa
        if (Auth::check())
        {
            // Si tenemos sesión activa mostrará la página deseada
            return Redirect::route('sections.index');
        }
        else 
        {
            // Si no hay sesión activa mostramos el formulario de iniciar sesion
            return View::make('login');
        }
    }
 
    public function postLogin()
    {
        // Obtenemos los datos del formulario
        $data = [
            'username' => Input::get('username'),
            'password' => Input::get('password')
        ];
 
        // Verificamos los datos
        if (Auth::attempt($data, Input::get('remember'))) // Como segundo parámetro pasámos el checkbox para sabes si queremos recordar la contraseña
        {
            // Si nuestros datos son correctos mostramos la página de inicio
            return Redirect::intended('/sections');
        }
        else 
        {
            // Si los datos no son los correctos volvemos al login y mostramos un error
            return Redirect::back()->withInput()->with('error_message', 'Data invalida');
        }
    }
 
    public function logOut()
    {
        // Cerramos la sesión
        Auth::logout();

        // Volvemos al login y mostramos un mensaje indicando que se cerró la sesión
        return Redirect::to('login')->with('error_message', 'Deslogueo correcto');
    }
 
}