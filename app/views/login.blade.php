@extends('_layout')

@section('title')

	Visionary Projects CMS

@stop

@section('content')

	<h1 align="center">Autenticación</h1>

	<div class="container">

		{{ Form::open(['url' => 'login', 'method' => 'POST', 'autocomplete' => 'on', 'class' => 'form-signin']) }}

			@if(Session::has('error_message'))
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					{{ Session::get('error_message') }}
				</div>
			@endif

			<h2 class="form-signin-heading">Ingrese sus datos:</h2>
			
			{{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username', 'autofocus' => '']) }}
			{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
			
			<div class="checkbox">
				<label> {{ Form::checkbox('remember', true) }} ¿Recordar? </label>
			</div>

			{{ Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) }}

		{{ Form::close() }}

	</div>

@stop