@extends('layout')

@section('title')

	Visionary Projects CMS

@stop

@section('content')

  <h1>New section</h1>

 	{{ Form::open(['route' => 'sections.store', 'method' => 'POST']) }}

 		@include ('sections/partials/fields')

 		<p>
 			{{ Form::submit('Create section') }}
 		</p>

 	{{ Form::close() }}

 	<p>
		{{ HTML::linkRoute('sections.index', 'Back') }}
	</p>

@stop