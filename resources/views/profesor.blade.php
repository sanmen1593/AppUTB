@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">Lista de profesors</div>
				<div class="panel-body">
					<div class="col-sm-12">
						<div class="media">
						  <div class="media-left">
						    <a href="/profesores/{{$profesor->id}}">
						      <img class="media-object" width="20px" src="http://www.adventureteaching.com/wp-content/uploads/2012/02/AT-Teacher-icon.jpg" alt="profesor">
						    </a>
						  </div>
						  <div class="media-body">
						    <h4 class="media-heading">{{$profesor->nombre}} {{$profesor->apellido}}</h4>
						    <p><b>Código</b>: {{$profesor->codigo}}</p>
						    <p><b>Email</b>: {{$profesor->email}}</p>
						  </div>
						</div>
					</div>
				</div>
				<ul class="list-group">
						@foreach($profesor->curso as $curso)
				  		<li class="list-group-item"><a href="/cursos/{{$curso->id}}">{{$curso->nombre}}</a></li>
				  		@endforeach
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection
