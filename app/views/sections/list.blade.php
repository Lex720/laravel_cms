@extends('_layout')

@section('title')

	Visionary Projects CMS

@stop

@section('content')

	<h1>Sections</h1>

	<p>
	There are {{ $sections->getTotal() }} sections, showing page {{ $sections->getCurrentPage() }} of {{ $sections->getLastPage() }}
	</p>

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
			@foreach ($sections as $section)

			<tr>
				<td class="name">{{ $section->name }}</td>
				<td>{{ $section->slug_url }}</td>
				<td>{{ $section->published ? "Published" : "Draft" }}</td>
				<td>{{ $section->menu ? "Show in menu" : "Don't show in menu" }}</td>
				<td>
					{{ HTML::linkRoute('sections.show', 'Show', ['id' => $section->id], ['class' => 'btn-show']) }}
					/
					{{ HTML::linkRoute('sections.edit', 'Edit', ['id' => $section->id], ['class' => 'btn-edit']) }}
				</td>
			</tr>

			@endforeach
		</tbody>

	</table>

	{{ $sections->links() }}

@stop