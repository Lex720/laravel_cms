@extends('_layout')

@section('title')

	Visionary Projects CMS

@stop

@section('content')

	<h1> {{ $sections->name }} </h1>

	<table class="table">
		<tr>
			<th>URL:</th>
			<td class="slug_url"><a href="{{ $sections->slug_url }}">{{ $sections->slug_url }}</a></td>
		</tr>
		<tr>
			<th>Tipo:</th>
			<td class="type"> {{ $sections->type }} </td>
		</tr>
		<tr>
			<th>Status:</th>
			<td class="status"> {{ $sections->status ? "Activa" : "Inactiva" }} </td>
		</tr>
	</table>

	<br>

	<p>
		{{ HTML::linkRoute('sections.edit', 'Editar', ['id' => $sections->id], ['class' => 'btn-edit']) }}
	</p>

	<p>
		{{ Form::open(['route' => ['sections.destroy', $sections->id], 'method' => 'DELETE']) }}
			{{ Form::button('Eliminar', ['type' => 'submit', 'class' => 'btn-del']) }}
		{{ Form::close() }}
	</p>

	<p>
		{{ HTML::link(URL::to('sections'), 'Regresar', ['class' => 'back']) }}
	</p>

@stop