<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title"> Edit & Create - Categories </h3>
	</div>
	<div class="panel-body form-horizontal">
		
		<div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
			{!! Form::stdInput('Nombre *', 'nombre') !!}
			{!! $errors->first('nombre', '<span class="help-block"><strong> :message </strong></span>') !!}
		</div>

		<div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
			{!! Form::stdInputArea('Descripcion *', 'description') !!}
			{!! $errors->first('nombre', '<span class="help-block"><strong> :message </strong></span>') !!}
		</div>

		<div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
			{!! Form::stdInput('Precio *', 'price') !!}
			{!! $errors->first('nombre', '<span class="help-block"><strong> :message </strong></span>') !!}
		</div>

		<div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
			{!! Form::stdSelect('Subcategoria *','subcategory_id', $subcategories, 'Seleccionar Subcategoria') !!}
			{!! $errors->first('nombre', '<span class="help-block"><strong> :message </strong></span>') !!}
		</div>

		<div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
			{!! Form::stdSelect('Estado *','status', [0 =>"Inactivo", 1 =>"Activo"], 'Seleccionar Estado') !!}
			{!! $errors->first('nombre', '<span class="help-block"><strong> :message </strong></span>') !!}
		</div>

		<div class="form-group {{ $errors->has('imagen') ? 'has-error' : '' }}">
			@if (isset($product))
				{!! Form::stdImg('Imagen *' , 'imagen' , $product->imagen) !!}
				@else
				{!! Form::stdImg('Imagen *' , 'imagen') !!}
			@endif
			
			{!! $errors->first('imagen', '<span class="help-block"><strong> :message </strong></span>') !!}
		</div>

		
	</div>
	
</div>

