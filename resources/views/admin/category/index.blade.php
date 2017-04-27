@extends('adminems::panel')

@section('content')

	<a href="{{ route('categories.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Add </a>
	<div class="col-md-12">
		
		<div class="panel panel-info">
			<div class="panel-heading">
				<h2 class="panel-title"> Categories </h2>
			</div>

			<div class="panel-body">
				<table id="table" class="display table dataTable">
					<thead>
						<th> Name </th>
						<th> Created at </th>
						<th> Image </th>
					</thead>

					<tbody>
						@foreach ($categories as $element)
							<tr>
								<td> {{ $element->nombre }} </td>
								<td> {{ $element->created_at }} </td>
								<td> <img class="image ic-img" src="{{ asset($element->imagen) }}" alt=""> </td>
							</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop

@section('scripts')
	@include('success')
@stop