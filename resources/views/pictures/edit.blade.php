@extends('layouts.app')
<br><br>
@section('content')	
<br><br><br><br>

	<div class="container">
		<div class=col-lg-8>
			<h2>
				Editar picture
	     			<a href="{{ route('pictures.index') }}" class="btn btn-primary float-right">Listado</a>
			</h2>
			<br>
			
			@include('pictures.fragment.error')

			{!! Form::model($picture, ['route' => ['pictures.update', $picture->id], 'method' => 'PUT', 'files' => true ]) !!}

				@include('pictures.fragment.form')

			{!! Form::close() !!}
		</div>
	</div>
@endsection