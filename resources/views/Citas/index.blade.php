@extends("layout.app")

@section("Title","Citas")

@section("content")
		<div class="row">
			@foreach($citas as $cita)
				<div class="col-sm">
					<div class="card text-center" style="width: 18rem; margin-top: 50px">
					  <img style=" margin: 30px;height: 100px; width: 100px; background-color: #EFEFEF; " class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$cita->usuario}}" alt="">
					  <div class="card-body">
					    <h5 class="card-title">{{$cita->fecha}}</h5>
					    <p class="card-text">Futura descripción de la cita</p>
					    <a href="/Citas/{{$cita->slug}}" class="btn btn-primary">Recordatorios...</a>
					  </div>
					</div>
				</div>
			@endforeach
		</div>
@endsection