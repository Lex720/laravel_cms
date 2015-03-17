<p>
	{{ Form::label('name', 'Nombre') }}
	{{ Form::text('name') }}
	{{ $errors->first('name', '<p class="error">:message</p>') }}
</p>

<p>
	{{ Form::label('slug_url', 'URL') }}
	{{ Form::text('slug_url') }}
	{{ $errors->first('slug_url', '<p class="error">:message</p>') }}
</p>

<p>
	{{ Form::label('type', 'Tipo') }}
	{{ Form::text('type') }}
	{{ $errors->first('type', '<p class="error">:message</p>') }}
</p>

<p>
	<label>
		{{ Form::radio('status', 1) }}
		Activa
	</label>
	<label>
		{{ Form::radio('status', 0) }}
		Inactiva
	</label>
	{{ $errors->first('status', '<p class="error">:message</p>') }}
</p>