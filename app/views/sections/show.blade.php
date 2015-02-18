@extends('layout')

@section('title')

	CMS Laravel

@stop

@section('content')

	<h1> {{ $sections->name }} </h1>

	<table>
		<tr>
			<th>Slug URL:</th>
			<td class="slug_url"> {{ $sections->slug_url }} </td>
		</tr>
		<tr>
			<th>Type:</th>
			<td class="type"> {{ $sections->type }} </td>
		</tr>
		<tr>
			<th>Menu:</th>
			<td class="menu"> {{ $sections->menu ? "Show in menu" : "Don't show in menu" }} </td>
		</tr>
		<tr>
			<th>Menu Order:</th>
			<td class="menu_order"> {{ $sections->menu_order }} </td>
		</tr>
		<tr>
			<th>Status:</th>
			<td class="published"> {{ $sections->published ? "Published" : "Draft" }} </td>
		</tr>
	</table>

	<br>

	<p>
		{{ HTML::linkRoute('sections.edit', 'Edit section', ['id' => $sections->id], ['class' => 'btn-edit']) }}
	</p>

	<p>
		{{ Form::open(['route' => ['sections.destroy', $sections->id], 'method' => 'DELETE']) }}
			{{ Form::button('Delete section', ['type' => 'submit', 'class' => 'btn-del']) }}
		{{ Form::close() }}
	</p>

@stop