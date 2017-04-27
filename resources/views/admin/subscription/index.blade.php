@extends('adminems::panel')

@section('content')
	
		<div class="panel panel-info">
			<div class="panel-heading">
				<h2 class="panel-title"> Subscripciones </h2>
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Name </th>
						<th> Created at </th>
						
					</thead>

					<tbody>
						@foreach ($subscriptions as $element)
							<tr>
								<td> {{ $element->email }} </td>
								<td> {{ $element->created_at }} </td>
								
							</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop
