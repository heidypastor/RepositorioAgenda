@extends("layout.app")

@section("Title","Editar Citas")

@section("content")
	<form class="form-group" method="POST" action="/Cita/{{$cita->slug}}" enctype="multipart/form-data">
		@method("PUT")
		@include("Citas.form")
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>
@endsection