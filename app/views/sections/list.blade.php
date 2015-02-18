@extends('layout')

@section('title')

	CMS Laravel

@stop

@section('content')

	<h1>Sections</h1>

	<p>
		{{ HTML::linkRoute('sections.create', 'Add a new section') }}
	</p>

@stop