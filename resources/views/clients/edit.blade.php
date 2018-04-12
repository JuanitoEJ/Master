@extends('layouts.app')
<br><br>
@section('content')	
<br><br><br><br>

	<div class="container">
		<div class=col-lg-8>
			<h2>
				Editar Cliente
	     			<a href="{{ route('clients.index') }}" class="btn btn-primary float-right">Listado</a>
			</h2>
			<br>
			
			@include('clients.fragment.error')

			{!! Form::model($client, ['route' => ['clients.update', $client->id], 'method' => 'PUT', 'files' => true ]) !!}

				@include('clients.fragment.form')

			{!! Form::close() !!}
		</div>
	</div>
@endsection