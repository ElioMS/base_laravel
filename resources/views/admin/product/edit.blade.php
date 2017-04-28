@extends('adminems::panel')

@section('content')
	{!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT' , 'id' => 'admin-form']) !!}
		@include('admin.product.forms.form')
	{!! Form::close() !!}

	<div class="col-md-12">
		<button id="submit-btn" class="btn btn-success btn-addon m-b-sm"><i class="fa fa-plus"></i> Create </button>
		<a class="btn btn-danger btn-addon m-b-sm" href="{{ route('products.index') }}"><i class="fa fa-long-arrow-left"></i> Back</a>
	</div>
@stop