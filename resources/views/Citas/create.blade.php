@extends("layouts.app")

@section("Title","Citas")

@section("content")
	@include('common.errors')
	<form class="form-group" method="POST" action="/Cita" enctype="multipart/form-data">
		@if(isset($cita))
			@include("Citas.form")
		@else
			@include("Citas.form2")
		@endif
			<button type="submit" class="btn btn-primary">Crear</button>
	</form>
@endsection