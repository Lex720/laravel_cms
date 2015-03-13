@extends('_layout')

@section('title')

	Visionary Projects CMS

@stop

@section('content')

	<h1>Sections</h1>

	<p>There are {{ $sections->count() }} sections</p>

	<br>

	@include ('sections/partials/filters')

	<br><br>

	<table class="table">
		
		<thead>
			<tr>
				<th>Name</th>
				<th>Slug URL</th>
				<th>Published</th>
				<th>Menu</th>
				<th>Actions</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($sections as $sections)

			<tr>
				<td class="name">{{ $sections->name }}</td>
				<td>{{ $sections->slug_url }}</td>
				<td>{{ $sections->published ? "Published" : "Draft" }}</td>
				<td>{{ $sections->menu ? "Show in menu" : "Don't show in menu" }}</td>
				<td>
					{{ HTML::linkRoute('sections.show', 'Show', ['id' => $sections->id], ['class' => 'btn-show']) }}
					/
					{{ HTML::linkRoute('sections.edit', 'Edit', ['id' => $sections->id], ['class' => 'btn-edit']) }}
				</td>
			</tr>

			@endforeach
		</tbody>

	</table>

	<br>

	<p>{{ HTML::linkRoute('sections.create', 'Add a new section') }}</p>

	<p>{{ HTML::linkAction('AuthController@logOut', 'Log out') }}</p>

@stop