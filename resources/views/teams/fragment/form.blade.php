<div class="form-group">
	{{ Form::label('file', 'Imagen') }}
	{{ Form::file('file') }}
</div>

<div class="form-group">
	{!! Form::label('name', 'Nombre') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('position', 'Descripción') !!}
	{!! Form::text('position', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
