@extends('adminems::panel')

@section('content')
	{{-- <a href="{{ route('admin.export.contacts') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Exportar </a> --}}

	<div class="col-md-12">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h2 class="panel-title"> Contactoss </h2>
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Nombre </th>
						<th> Apellidos </th>
						<th> Correo </th>
						<th> Telefono </th>
						<th> Created at </th>
						
					</thead>

					<tbody>
						@foreach ($contacts as $element)
							<tr>
								<td> {{ $element->name }} </td>
								<td> {{ $element->lastname }} </td>
								<td> {{ $element->email }} </td>
								<td> {{ $element->phone }} </td>
								<td> {{ $element->created_at }} </td>
								
							</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop
