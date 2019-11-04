@extends("layout.app")

@section("Title","Citas")

@section("content")
	@if ($errors->any())
		<div class="alert alert-danger" style="margin-top: 20px ">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<form class="form-group" method="POST" action="/Cita" enctype="multipart/form-data">
		@if(isset($cita))
			@include("Citas.form")
		@else
			@include("Citas.form2")
		@endif
			<button type="submit" class="btn btn-primary">Crear</button>
	</form>
@endsection