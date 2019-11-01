@extends("layout.app")

@section("Title","Editar Citas")

@section("content")
	<form class="form-group" method="POST" action="/Cita/{{$cita->slug}}" enctype="multipart/form-data">
		@method("PUT")
		@csrf
			<div class="form-group">
					<label for="">Fecha de la Cita</label>
					<input type="date" name="fecha" value="{{$cita->fecha}}" class="form-control">
			</div>
			<div class="form-group">
					<label for="">Usuario - Icono</label>
					<input type="file" name="Usuario">
			</div>
			<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>
@endsection