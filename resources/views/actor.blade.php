@extends("layout")
	@section("titulo")
		Actor
	@endsection

	@section("titulo principal")
		<h1 class="text-center">Detalle de actor</h1>
	@endsection

	@section("contenido")
	<div class = "container">
		@if ( !$actor )
		<small class ="text-danger">
		<p class="text-center">El id pasado no es valido</p>
	</small>
		
	@else
		<h2></h2>
		<div class="card border-primary mb-3 mt-4 mx-auto" style="max-width: 18rem;">
		
		  <div class="card-header">{{ $actor->getNombreCompleto() }}</div>
		  <div class="card-body text-primary">
		    <h5 class="card-title">Rating : {{$actor->rating}} </h5>
		  </div>
		  
		</div>
	@endif
	</div>
	<a  class="button "href="/actores">
		<p class ="text-center">Volver</p>
	</a>
	
	@endsection


