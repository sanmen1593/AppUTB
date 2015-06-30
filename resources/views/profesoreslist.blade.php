@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			@foreach($profesores as $profesor)
			<div class="col-xs-12 col-sm-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<img class="media-object" width="20px" src="http://www.adventureteaching.com/wp-content/uploads/2012/02/AT-Teacher-icon.jpg" alt="Curso">
						<a href="/profesores/{{$profesor->id}}">{{$profesor->nombre}} {{$profesor->apellido}}</a>
					</div>
					<div class="panel-body">
						<div class="col-sm-4">
							<div class="media">
							  <div class="media-left">
							  </div>
							  <div class="media-body">
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
			@endforeach
		</div>
	</div>
</div>
@endsection
