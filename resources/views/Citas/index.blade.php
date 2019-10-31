@extends("layout.app")

@section("Title","Citas")

@section("content")
		<div class="row">
			@foreach($citas as $cita)
				<div class="col-sm">
					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src="/images/{{$cita->usuario}}" alt="">
					  <div class="card-body">
					    <h5 class="card-title">{{$cita->fecha}}</h5>
					    <p class="card-text">Futura descripción de la cita</p>
					    <a href="#" class="btn btn-primary">Información</a>
					  </div>
					</div>
				</div>
			@endforeach
		</div>
@endsection