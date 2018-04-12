@extends('layouts.app')
<br><br>
@section('content')	
<br><br><br><br>

	<div class="container">
		<div class=col-lg-8>
			<h2>
				Editar calltac
	     			<a href="{{ route('calltacs.index') }}" class="btn btn-primary float-right">Listado</a>
			</h2>
			<br>
			
			@include('calltacs.fragment.error')

			{!! Form::model($calltac, ['route' => ['calltacs.update', $calltac->id], 'method' => 'PUT', 'files' => true ]) !!}

				@include('calltacs.fragment.form')

			{!! Form::close() !!}
		</div>
	</div>
@endsection