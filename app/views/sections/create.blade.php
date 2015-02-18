@extends('layout')

@section('title')

	CMS Laravel

@stop

@section('content')

  <h1>New section</h1>

 	{{ Form::open(['route' => ['sections.store'], 'method' => 'POST']) }}

 		@include ('sections/partials/fields')

 		<p>
 			{{ Form::submit('Create section') }}
 		</p>

 	{{ Form::close() }}

@stop