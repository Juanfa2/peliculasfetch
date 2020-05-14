@extends("layout")
	@section("titulo")
		Peliculas
	@endsection

	@section("titulo principal")
		<h1 class="text-center">Detalle pelicula</h1>
	@endsection

	@section("contenido")
	<div class = "container">
		@if (  ($id > 0) and (count($peliculas) >= $id) )
		<div class="card border-primary mb-3 mt-4 mx-auto" style="max-width: 18rem;">
		
		  <div class="card-header">{{$peliculas["$id"]["title"]}}</div>
		  <div class="card-body text-primary">
		    <h5 class="card-title">Rating : {{$peliculas["$id"]["rating"]}} </h5>
		    <p class="card-text">@if ($peliculas["$id"]["rating"] >= 8)
				Recomendada
		      @endif
		  </p>
		  </div>
		  
		</div>
	@else
	<small class ="text-danger">
		<p class="text-center">El id pasado no es valido</p>
	</small>
	@endif
	</div>
	<a  class="button "href="/peliculas">
		<p class ="text-center">Volver</p>
	</a>
	
	@endsection


