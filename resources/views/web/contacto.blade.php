

@extends("web.main")

@section('content')

<div class="container">

<div class="page-header">
		<h3> Crear Contacto</h3>
</div>

	{{ Form::open(["route" => "form", "method"=>"POST", "id"=>"create_contacto"]) }}


		<div class="form-group" class="col-md-6">

		
		
		<label> Nombre</label>

		  {{Form::text("name",null,["class" =>"form-control", "placeholder" => "Nombre...", "aria-describedby"=>"basic-addon1"])}}
		 
		</div>
		
		<div class="form-group" class="col-md-6">

		
		
		<label> Apellidos</label>

		  {{Form::text("lastname",null,["class" =>"form-control", "placeholder" => "Apellidos...", "aria-describedby"=>"basic-addon1"])}}
		 
		</div>


		<div class="form-group" class="col-md-6">

		
		
		<label> Email</label>

		  {{Form::text("email",null,["class" =>"form-control", "placeholder" => "Email...", "aria-describedby"=>"basic-addon1"])}}
		 
		</div>

		<div class="form-group" class="col-md-6">

		
		
		<label> Telefono</label>

		  {{Form::text("phone",null,["class" =>"form-control", "placeholder" => "Telefono...", "aria-describedby"=>"basic-addon1"])}}
		 
		</div>

		<div class="form-group" class="col-md-6">

		
		
		<label> Mensaje</label>

		  {{Form::textarea("message",null,["class" =>"form-control", "placeholder" => "Mensaje...", "aria-describedby"=>"basic-addon1"])}}
		 
		</div>

<div class="col-md-12">
	
{{ form::submit("Crear", ["class"=>"btn btn-primary"]) }}
</div>

	{{ Form::close()}}


		


		
		

@stop


