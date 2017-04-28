@extends('adminems::panel')

@section('content')
	<a href="{{ route('admin.export.contacts') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Exportar </a>

	<div class="col-md-12">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h2 class="panel-title"> Subscripciones </h2>
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Name </th>
						<th> Created at </th>
						<th></th>
					</thead>

					<tbody>
						@foreach ($subscriptions as $element)
							<tr class="table-rows" data-id="{{ $element->id }}">
								<td> {{ $element->email }} </td>
								<td> {{ $element->created_at }} </td>
								<td> <button type="button" class="btn btn-danger eliminar-elemento"  data-toggle="modal" data-target="#delete-modal"> <i class="fa fa-trash"></i> </button> </td>
							</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>

	</div>
	
	{{ Form::open(['route' => ['subscriptions.destroy' , ':c_id'] , 'method' => 'DELETE', 'id' => 'form-delete']) }}
	{{ Form::close() }}
@stop

@section('scripts')
	<script>
		$(document).ready(function(e) {
    $(".eliminar-elemento").on('click', function(e) {
        var elemento = $(this).closest('tr').data('id')
        $("#elemento-id").val(elemento)
        $(".modal-footer").find('.f-delete').attr('data-id', elemento)
    });

    $(".f-delete").on('click', function(e) {

        var elementoId = $("#elemento-id").val();
        var form = $("#form-delete");
        var url  = form.attr('action').replace(':c_id', elementoId);
        var data = form.serialize();

        $.ajax({
            url : url,
            type: 'post',
            dataType: 'json',
            data: data,
            success: function (response) {
            	if (response) {
                    var trs = $('.table-rows');

					$.each(trs, function(index, val) {
						var value = $(this).data('id')
						if (value === response) {
							$("#close-modal-dl").click()
							$(this).fadeOut('slow/400/fast');
						}  
					});
                }
            }
        });
    });
});
	</script>
@stop



