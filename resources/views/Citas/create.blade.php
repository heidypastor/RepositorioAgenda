@extends("layout.app")

@section("Title","Citas")

@section("content")
	<form class="form-group" method="POST" action="/Citas">
		@csrf
			<div class="form-group">
					<label for="">Fecha de la Cita</label>
					<input type="date" name="fecha" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Guardar</button>
	</form>
@endsection