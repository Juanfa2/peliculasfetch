@extends("layout")
	@section("pelicula")
		Peliculas
	@endsection

	@section("titulo principal")
		<h1 class="text-center">Listado de peliculas</h1>
	@endsection

	@section("contenido")
	<div class="container">
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">Rating</th>
		      <th scope="col">Recomendada</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@forelse ($peliculas as $peliculaId => $pelicula)
		    <tr>
		      <th scope="row"> <a href="/peliculas/{{ $peliculaId  }}">{{ $peliculaId }}</a></th>
		      <td>{{  $pelicula["title"] }} </td>
		      <td>{{ $pelicula["rating"] }}</td>
		      @if ($pelicula["rating"] >= 8)
		      <td>
				<p>Recomendada</p>
		      </td>
		      @endif
		    </tr>
		  @empty
				<p>No hay peliculas cargadas</p>
			@endforelse
		  </tbody>
		</table>
		
	</div>
		
	@endsection



	


