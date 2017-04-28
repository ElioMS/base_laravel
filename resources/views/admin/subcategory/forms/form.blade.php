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
			{!! Form::stdSelect('Categoria *','category_id', $categories) !!}
			{!! $errors->first('nombre', '<span class="help-block"><strong> :message </strong></span>') !!}
		</div>


		
	</div>
	
</div>

