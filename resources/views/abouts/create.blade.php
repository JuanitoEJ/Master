@extends('layouts.app')
<br><br>
@section('content')	
<br><br><br><br>

	<div class="container">

		<div class=col-lg-8>
			<h2>
				Nuevo about
	     			<a href="{{ route('abouts.index') }}" class="btn btn-primary float-right">Listado</a>
			</h2>
			<br>
			
			@include('abouts.fragment.error')

			{!! Form::open(['route' => 'abouts.store', 'files' => true]) !!}

	             @include('abouts.fragment.form')
	             
	        {!! Form::close() !!}

		</div>

	</div>

@endsection
