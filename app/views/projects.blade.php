@extends('_layout')

@section('title')

	Visionary Projects CMS

@stop

@section('content')

	<h1>Proyectos</h1>

	<p>
	Existen {{ $sections->getTotal() }} proyectos, mostrando pagina {{ $sections->getCurrentPage() }} de {{ $sections->getLastPage() }}
	</p>

	<br><br>

	<table class="table">
		
		<thead>
			<tr>
				<th>Nombre</th>
				<th>URL</th>
				<th>Tipo</th>
				<th>Status</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($sections as $section)

			<tr>
				<td class="name">{{ $section->name }}</td>
				<td><a href="{{ $section->slug_url }}">Enlace</a></td>
				<td>{{ $section->type }}</td>
				<td>{{ $section->status ? "Activa" : "Inactiva" }}</td>
			</tr>

			@endforeach
		</tbody>

	</table>

	{{ $sections->links() }}

@stop