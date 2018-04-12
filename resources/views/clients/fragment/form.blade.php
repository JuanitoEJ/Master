<div class="form-group">
	{{ Form::label('file', 'Imagen') }}
	{{ Form::file('file') }}
</div>

<div class="form-group">
	{!! Form::label('description', 'Descripción') !!}
	{!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
