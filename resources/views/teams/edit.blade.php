@extends('layouts.app')
<br><br>
@section('content')	
<br><br><br><br>

	<div class="container">
		<div class=col-lg-8>
			<h2>
				Editar Equipo
	     			<a href="{{ route('teams.index') }}" class="btn btn-primary float-right">Listado</a>
			</h2>
			<br>
			
			@include('teams.fragment.error')

			{!! Form::model($team, ['route' => ['teams.update', $team->id], 'method' => 'PUT', 'files' => true ]) !!}

				@include('teams.fragment.form')

			{!! Form::close() !!}
		</div>
	</div>
@endsection