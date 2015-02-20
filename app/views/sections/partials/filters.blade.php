{{ Form::model(Input::all(), ['route' => 'sections.index', 'method' => 'GET']) }}

	{{ Form::text('search_name') }}
	{{ Form::select('search_published', ['' => 'Select status', '0' => 'Draft', '1' => 'Published']) }}
	{{ Form::select('search_menu', ['' => 'Menu status', '0' => 'No in menu', '1' => 'Show in menu']) }}
	{{ Form::button('Filter sections', ['type' => 'submit', 'class' => 'btn-primary']) }}

{{ Form::close() }}