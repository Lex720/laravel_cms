@extends('_layout')

@section('title')

	Visionary Projects CMS

@stop

@section('content')

	<h1 align="center">Authentication system</h1>

	<div class="container">

		{{ Form::open(['url' => 'login', 'method' => 'POST', 'autocomplete' => 'on', 'class' => 'form-signin']) }}

			@if(Session::has('error_message'))
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					{{ Session::get('error_message') }}
				</div>
			@endif

			<h2 class="form-signin-heading">Log in</h2>
			
			{{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username', 'autofocus' => '']) }}
			{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
			
			<div class="checkbox">
				<label> {{ Form::checkbox('remember', true) }} Remember me </label>
			</div>

			{{ Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) }}

		{{ Form::close() }}

	</div>

@stop