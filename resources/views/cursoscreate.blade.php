@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3>Registrar Curso</h3>
			@if ($errors->has())
		       <div class="alert alert-danger">
		           @foreach ($errors->all() as $error)
		               {{ $error }}<br>        
		           @endforeach
		       </div>
	       @endif
			<form action="/cursos" method="post" class="form">
				<div class="form-group">
					<label for="nombre">Nombre: </label>
					<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
				</div>
				<div class="form-group">
					<label for="descripcion">Descripcion: </label>
					<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion">
				</div>
				<div class="form-group">
					<div class="col-sm-6">
						<label for="periodo">Período: </label>
						<input type="text" class="form-control" id="periodo" name="periodo" placeholder="Periodo">
					</div>
					<div class="col-sm-6">
						<label for="año">Año: </label>
						<input type="text" class="form-control" id="año" name="año" placeholder="Año" pattern="[0-9]{4}">
					</div>
				</div>
				<div class="form-group">
					<label for="fecha_inicio">Fecha Inicio: </label>
					<input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" placeholder="Fecha Inicio">
				</div>
				<div class="form-group">
					<label for="Profesor">Profesor: </label>
					<select name="profesor_id" id="profesor_id" class="form-control">
						<option value="0" default>Ninguno</option>
						@foreach($profesores as $profesor)
						<option value="{{$profesor->id}}">{{$profesor->nombre}} {{$profesor->apellido}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
