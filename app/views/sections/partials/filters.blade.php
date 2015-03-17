{{ Form::model(Input::all(), ['route' => 'sections.index', 'method' => 'GET']) }}

	{{ Form::text('name') }}
	{{ Form::select('status', ['' => 'Status', '1' => 'Activa', '0' => 'Inactiva']) }}
	{{ Form::button('Filtrar', ['type' => 'submit', 'class' => 'btn-primary']) }}

{{ Form::close() }}