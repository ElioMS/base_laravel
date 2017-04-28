@extends('adminems::panel')

@section('content')

	<a href="{{ route('products.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Add </a>
	<div class="col-md-12">
		
		<div class="panel panel-info">
			<div class="panel-heading">
				<h2 class="panel-title"> Productos </h2>
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Name </th>
						<th> Description </th>
						<th> Price </th>
						<th> Subcategory </th>
						<th> Code </th>
						<th> Status </th>
						<th> Created at </th>
						<th> Image </th>

   
          
            
					</thead>

					<tbody>
						@foreach ($products as $element)
							<tr data-id="{{ $element->id }}">
							{{-- <td> <img class="image ic-img" src="{{ asset($element->imagen) }}" alt=""> </td> --}}
								<td> <a href="{{ route('products.edit' , ['slug' => $element->slug]) }}"> {{ $element->nombre }} </a> </td>
								<td> {{ $element->description }} </td>
								<td> {{ $element->price }} </td>
								<td> {{ $element->subcategory->nombre }} </td>
								<td> {{ $element->code }} </td>
								<td> {{ $element->status }} </td>
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
	@include('adminems::success')
@stop