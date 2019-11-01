@extends("layout.app")

@section("Title","Citas")

@section("content")
	<form class="form-group" method="POST" action="/Cita" enctype="multipart/form-data">
		@csrf
			<div class="form-group">
					<label for="">Fecha de la Cita</label>
					<input type="date" name="fecha" class="form-control">
			</div>
			<div class="form-group">
					<label for="">Usuario - Icono</label>
					<input type="file" name="Usuario">
			</div>
			<button type="submit" class="btn btn-primary">Guardar</button>
	</form>
@endsection