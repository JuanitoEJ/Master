@extends('layouts.app')
<br><br>
@section('content')	
<br><br><br><br>

	<div class="container">

		<div class=col-lg-8>
			<h2>
				Nuevo carrousel
	     			<a href="{{ route('carrousels.index') }}" class="btn btn-primary float-right">Listado</a>
			</h2>
			<br>
			
			@include('carrousels.fragment.error')

			{!! Form::open(['route' => 'carrousels.store', 'files' => true]) !!}

	             @include('carrousels.fragment.form')
	             
	        {!! Form::close() !!}

		</div>

	</div>

@endsection
