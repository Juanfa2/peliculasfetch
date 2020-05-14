@extends("layout")
	@section("pelicula")
		Peliculas
	@endsection

	@section("titulo principal")
		<h1 class="text-center">Listado de Actores</h1>
	@endsection

	@section("contenido")

	<div class="container">
	
	<div class="float-left mr-4 mt-4">
          <form class="form-signin " action="{{ url('/actores/buscar') }}" method="POST">
            @csrf
        <div class="input-group mb-2">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" id="nombre" name="nombre" aria-label="Search">
        </div>
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </div>

		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">Apellido</th>
		      <th scope="col">Rating</th>
		      <th scope="col">Editar</th>
		      <th scope="col">Eiminar</th>

		    </tr>
		  </thead>
		  <tbody>
		  	@forelse ($actores as $actor)
		    <tr>

		      <th scope="row"> <a href="/actor/{{ $actor->id }}">{{ $actor->id }}</a></th>
		      <td>{{  $actor->first_name }} </td>
		      <td>{{  $actor->last_name }} </td>
		      <td>{{ $actor->rating }}</td>
		      <td><a  href="/actor/{{ $actor->id }}/edit"><p class ="text-center">Editar</p>
	</a></td>
	<td>
		<form class="form-signin " action="{{ url('/actor/destroy') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <input type="hidden"  class="form-control mb-4" name="id" value="{{ $actor->id }}">
          <button class="btn btn-outline-danger" type="submit">Eliminar</button>
        </form>
	</td>
	
	
		    </tr>
		  @empty
				<p>No hay actores</p>
			@endforelse
		  </tbody>
    	 {{$actores->links()}} 

		</table>
		<a  class="button "href="/actores">
		<p class ="text-center">Volver</p>
	</a>

	</div>
	<a  class="btn btn-success " href="/actors/add"><p class ="text-center">Agregar Actor</p>
	</a>
		
	@endsection