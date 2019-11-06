@extends("layouts.app")

@section("Title","Cita  -  Recordatorios")

@section("content")
	@include('common.success')
	<img style=" margin: 30px;height: 200px; width: 200px; background-color: #EFEFEF; " class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$cita->usuario}}" alt="">
	<div class="text-center">
		<h5 class="card-title">{{$cita->fecha}}</h5>
		<p>Futura descripción de la cita</p>
		<a href="/Cita/{{$cita->slug}}/edit" class="btn btn-primary">Editar</a>
		<form class="form-group" method="POST" action="/Cita/{{$cita->slug}}">
			@csrf
			@method("DELETE")
			<button type="submit" class="btn btn-danger">Eliminar</button>
		</form>
	</div>
	<modal-button></modal-button>
	<create-form-recordatorio></create-form-recordatorio>
@endsection