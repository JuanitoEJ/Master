@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	@if(Session::has('mensaje'))
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Mensaje:</strong> {{ session('mensaje') }}
			</div>
        	@endif
    </div>
<div class=col-lg-12>
		<br><br>
		<h2>
			Listado de picture<a href="{{ route('pictures.create') }}" class="btn btn-primary float-right">Nuevo</a>
		</h2>
			@include('pictures.fragment.info')
		<br><br>
		<table class="table table-hover table-striped table-responsive-lg">
			<thead >
				<th>ID</th>
				<th>Foto</th>
				<th>Titulo</th>
				<th>Descripción</th>
				<th colspan="3" class="text-center">Acciones</th>
			</thead>
			<tbody>
				@foreach($pictures as $picture)
				<tr>
					<td>{{ $picture->id }}</td>
					<td>
						@if($picture->file)
				       		<img src="{{ $picture->file }}" class="img-responsive" width="50" height="100">
				       	@endif
					</td>
					<td>
				       <strong>{{ $picture->titulo }}</strong>
					</td>
					<td>{{ $picture->description }}</td>
				    <td>
         				<a title="Ver" href="{{ route('pictures.show', $picture->id) }}" class="btn btn-link"><i class="fas fa-eye"></i>Ver</a>
					</td>
				    <td>
						<a href="{{ route('pictures.edit', $picture->id) }}" class="btn btn-link">Editar</a>
					</td>
				    <td>
						<form action="{{ route('pictures.destroy', $picture->id) }}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="DELETE">
							<button title="Eliminar" class="btn btn-link"><i class="fas fa-trash-alt"></i>Eliminar</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $pictures->render() !!}
	</div>

 @endsection