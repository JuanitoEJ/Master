@extends('layouts.app')

@section('content')


	<br><br>
	<div class="container">
		<div class=col-lg-12>
			<h2>
				Detalle Único
				<a href="{{ route('clients.index') }}" class="button btn btn-primary float-right">Listado</a>
			</h2>
		</div>
		<div class="col-lg-12">
			<table class="table table-hover table-striped table-responsive-lg">
				<thead>
					<th>ID</th>
					<th>Foto</th>
					<th>Descripción</th>
				</thead>
				<tbody>
					<tr>
						<td>
							{{ $client->id }}
						</td>
						<td>
							@if($client->file)
								<img src="{{ $client->file }}" class="img-responsive" width="150" height="200">
							@endif
						</td>
						<td>
							{{ $client->description }}
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