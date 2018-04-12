@extends('layouts.app')
<br><br>
@section('content')	
<br><br><br><br>

	<div class="container">

		<div class=col-lg-8>
			<h2>
				Nuevo Equipo
	     			<a href="{{ route('teams.index') }}" class="btn btn-primary float-right">Listado</a>
			</h2>
			<br>
			
			@include('teams.fragment.error')

			{!! Form::open(['route' => 'teams.store', 'files' => true]) !!}

	             @include('teams.fragment.form')
	             
	        {!! Form::close() !!}

		</div>

	</div>

@endsection
