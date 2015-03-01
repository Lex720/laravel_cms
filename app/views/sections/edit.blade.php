@extends('layout')

@section('title')

  Visionary Projects CMS

@stop

@section('content')

  <h1>Edit section "{{ $sections->name }}"</h1>

 	{{ Form::model($sections, ['route' => ['sections.update', $sections->id], 'method' => 'PUT']) }}

 		@include ('sections/partials/fields')

 		<p>
 			{{ Form::submit('Update section') }}
 		</p>

 	{{ Form::close() }}

 	<p>
		{{ HTML::linkRoute('sections.index', 'Back') }}
	</p>

@stop