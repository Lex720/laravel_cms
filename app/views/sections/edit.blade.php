@extends('_layout')

@section('title')

  Visionary Projects CMS

@stop

@section('content')

  <h1>Editar "{{ $sections->name }}"</h1>

 	{{ Form::model($sections, ['route' => ['sections.update', $sections->id], 'method' => 'PUT']) }}

 		@include ('sections/partials/fields')

 		<p>
 			{{ Form::submit('Actualizar') }}
 		</p>

 	{{ Form::close() }}

 	<p>
		{{ HTML::linkRoute('sections.index', 'Regresar') }}
	</p>

@stop