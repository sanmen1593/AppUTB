@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3>Registrar Profesor</h3>
			@if ($errors->has())
			       <div class="alert alert-danger">
			           @foreach ($errors->all() as $error)
			               {{ $error }}<br>        
			           @endforeach
			       </div>
			       @endif
			<form action="/profesores" method="post" class="form">
				<div class="form-group">
					<label for="nombre">Nombre: </label>
					<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
				</div>
				<div class="form-group">
					<label for="apellido">Apellido: </label>
					<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
				</div>
				<div class="form-group">
					<label for="codigo">Codigo: </label>
					<input type="text" class="form-control" id="codigo" name="codigo" placeholder="Codigo">
				</div>
				<div class="form-group">
					<label for="email">Email: </label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Email">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
