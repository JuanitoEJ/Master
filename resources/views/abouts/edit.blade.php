@extends('layouts.app')
<br><br>
@section('content')	
<br><br><br><br>

	<div class="container">
		<div class=col-lg-8>
			<h2>
				Editar about
	     			<a href="{{ route('abouts.index') }}" class="btn btn-primary float-right">Listado</a>
			</h2>
			<br>
			
			@include('abouts.fragment.error')

			{!! Form::model($about, ['route' => ['abouts.update', $about->id], 'method' => 'PUT', 'files' => true ]) !!}

				@include('abouts.fragment.form')

			{!! Form::close() !!}
		</div>
	</div>
@endsection