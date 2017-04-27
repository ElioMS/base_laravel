<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title"> Edit & Create - Categories </h3>
	</div>
	<div class="panel-body form-horizontal">
		
		<div class="form-group">
			<label class="col-sm-2 control-label"><strong> Name </strong></label>
			<div class="col-sm-8">
				{!! Form::text('nombre', null , ['class' => 'form-control', 'placeholder' => 'Name']) !!}
			</div>	
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label"> <strong>Image</strong> </label>
			<div class="col-sm-10 imagen-array">
				<p class="title-image-flm">  </p>
				<div class="ui fluid btn-group">
					<div data-input="image" class="btn btn-success fm-button btn-addon m-b-sm btn-sm">  <i class="fa fa-search"></i> Ver Galeria </div>
					<input class="input-flm" id="image" hidden="1" name="image" type="text">
				</div>
			</div>	
		</div>	

	</div>
	
</div>

