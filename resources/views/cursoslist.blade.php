@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Lista de Cursos</div>
				<div class="panel-body">
					@foreach($cursos as $curso)
					<div class="col-sm-4">
						<div class="media">
						  <div class="media-left">
						    <a href="/cursos/{{$curso->id}}">
						      <img class="media-object" width="20px" src="http://www.ideasparalaweb.com/images/djmenu/cursos.png" alt="Curso">
						    </a>
						  </div>
						  <div class="media-body">
						    <h4 class="media-heading">{{$curso->nombre}}</h4>
						    <p><b>Descripción</b>: {{$curso->descripcion}}</p>
						    <p><b>Fecha de inicio</b>: {{$curso->fecha_inicio}}</p>
						  </div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
