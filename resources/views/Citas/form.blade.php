@csrf
	<div class="form-group">
			<label for="">Fecha de la Cita</label>
			<input type="date" name="fecha" value="{{$cita->fecha}}" class="form-control">
	</div>
	<div class="form-group">
			<label for="">Usuario - Icono</label>
			<input type="file" name="Usuario">
	</div>
	{{-- <div class="form-group">
			<label for="">Descripción</label>
			<input type="file" name="Descripción">
	</div> --}}