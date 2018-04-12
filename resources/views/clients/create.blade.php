@extends('layouts.app')
<br><br>
@section('content')	
<br><br><br><br>

	<div class="container">

		<div class=col-lg-8>
			<h2>
				Nuevo Cliente
	     			<a href="{{ route('clients.index') }}" class="btn btn-primary float-right">Listado</a>
			</h2>
			<br>
			
			@include('clients.fragment.error')

			{!! Form::open(['route' => 'clients.store', 'files' => true]) !!}

	             @include('clients.fragment.form')
	             
	        {!! Form::close() !!}

		</div>

	</div>

@endsection
