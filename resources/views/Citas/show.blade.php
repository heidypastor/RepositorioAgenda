@extends("layout.app")

@section("Title","Cita  -  Recordatorios")

@section("content")
		
	<img style=" margin: 30px;height: 200px; width: 200px; background-color: #EFEFEF; " class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$cita->usuario}}" alt="">
	<div class="text-center">
		<h5 class="card-title">{{$cita->fecha}}</h5>
		<p>Futura descripción de la cita</p>
		<a href="/Cita/{{$cita->slug}}/edit" class="btn btn-primary">Editar</a>
	</div>


@endsection