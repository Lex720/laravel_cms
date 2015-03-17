@extends('_layout')

@section('title')

	Visionary Projects CMS

@stop

@section('content')

  <h1>Nueva seccion</h1>

 	{{ Form::open(['route' => 'sections.store', 'method' => 'POST']) }}

 		@include ('sections/partials/fields')

 		<p>
 			{{ Form::submit('Crear seccion') }}
 		</p>

 	{{ Form::close() }}

 	<p>
		{{ HTML::linkRoute('sections.index', 'Regresar') }}
	</p>

@stop