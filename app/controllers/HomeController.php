<?php

class HomeController extends BaseController {

	protected $rules = array 
	(
		'name' => 'regex:/^[a-zA-Z\s]*$/|min:3|max:80',
		'email' => 'email|between:3,80',
		'subject' => 'regex:/^[a-zA-Z\s0-9]+$/|min:3|max:80',
		'message' => 'between:3,500',
	);

	public function showWelcome()
	{
		return View::make('index');
	}

	public function sendEmail()
	{

    	$data = array
		(
			'name'		=>	Input::get('name'),
			'email'		=>	Input::get('email'),
			'subject'	=>	Input::get('subject'),
			'msg'		=>	Input::get('message')
		);

		$name = $data['name'];
    	$email = $data['email'];
    	$subject = $data['subject'];

		$validator = Validator::make($data, $this->rules);

		if ($validator->passes())
		{
			Mail::send('emails.template', $data, function($message) use ($name, $email, $subject)
	        {
	        	$message->from($email, $name);
	            $message->to('info@visiopro.com.ve', 'Visionary Projects');
	            $message->subject($subject);
	        });

	        return Redirect::to(URL::previous().'#contact')->with('message', '¡Mensaje enviado con exito!');
		}
		else 
		{
			return Redirect::to(URL::previous().'#contact')->withInput()->withErrors($validator->messages());
		}
	}


}
