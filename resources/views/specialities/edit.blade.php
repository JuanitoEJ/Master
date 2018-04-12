@extends('layouts.app')
<br><br>
@section('content')	
<br><br><br><br>

	<div class="container">
		<div class=col-lg-8>
			<h2>
				Editar specialty
	     			<a href="{{ route(specialities.index') }}" class="btn btn-primary float-right">Listado</a>
			</h2>
			<br>
			
			@include(specialities.fragment.error')

			{!! Form::model($specialty, ['route' => [specialities.update', specialtie->id], 'method' => 'PUT', 'files' => true ]) !!}

				@include(specialities.fragment.form')

			{!! Form::close() !!}
		</div>
	</div>
@endsection