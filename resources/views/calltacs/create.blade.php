@extends('layouts.app')
<br><br>
@section('content')	
<br><br><br><br>

	<div class="container">

		<div class=col-lg-8>
			<h2>
				Nuevo calltac
	     			<a href="{{ route('calltacs.index') }}" class="btn btn-primary float-right">Listado</a>
			</h2>
			<br>
			
			@include('calltacs.fragment.error')

			{!! Form::open(['route' => 'calltacs.store', 'files' => true]) !!}

	             @include('calltacs.fragment.form')
	             
	        {!! Form::close() !!}

		</div>

	</div>

@endsection
