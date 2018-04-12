@extends('layouts.app')

@section('content')


	<br><br>
	<div class="container">
		<div class=col-lg-12>
			<h2>
				Detalle Único
				<a href="{{ route('carrousels.index') }}" class="button btn btn-primary float-right">Listado</a>
			</h2>
		</div>
		<div class="col-lg-12">
			<table class="table table-hover table-striped table-responsive-lg">
				<thead>
					<th>ID</th>
					<th>Foto</th>
					<th>Título</th>
					<th>Descripción</th>
				</thead>
				<tbody>
					<tr>
						<td>
							{{ $carrousel->id }}
						</td>
						<td>
							@if($carrousel->file)
								<img src="{{ $carrousel->file }}" class="img-responsive" width="150" height="200">
							@endif
						</td>
						<td>
							{{ $carrousel->titulo }}
						</td>
						<td>
							{{ $carrousel->description }}
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<p>
	</div>
		</p>

		<br>
		<p>
		</p>
	</div>

@endsection