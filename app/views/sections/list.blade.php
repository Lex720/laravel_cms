@extends('layout')

@section('title')

	Visionary Projects CMS

@stop

@section('content')

	<h1>Sections</h1>

	<p>
		{{ HTML::linkRoute('sections.create', 'Add a new section') }}
	</p>

	<p>There are {{ $sections->count() }} sections</p>

	@include ('sections/partials/filters')

	<table>
		
		<thead>
			<tr>
				<th>Name</th>
				<th>Slug URL</th>
				<th>Actions</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($sections as $sections)

			<tr>
				<td class="name">{{ $sections->name }}</td>
				<td>{{ $sections->slug_url }}</td>
				<td>
					{{ HTML::linkRoute('sections.show', 'Show', ['id' => $sections->id], ['class' => 'btn-show']) }}
					{{ HTML::linkRoute('sections.edit', 'Edit', ['id' => $sections->id], ['class' => 'btn-edit']) }}
				</td>
			</tr>

			@endforeach
		</tbody>

	</table>

	<br>

	<p>
		{{ HTML::linkAction('AuthController@logOut', 'Log out') }}
		
	</p>

@stop