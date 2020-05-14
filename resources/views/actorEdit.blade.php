@extends("layout")
	@section("pelicula")
		Peliculas
	@endsection

	@section("titulo principal")
		<h1 class="text-center">Editar Actor</h1>
	@endsection

	@section("contenido")
		
		<div class ="row justify-content-md-center mt-4">
  <div class="col-lg-4 col-md-6 col-xs-12 ">
    <h2 class="form-signin-heading">Editar</h2>
    <form class="form-signin" action="{{url('/actor/$actor->id/edit')}}" method="POST" enctype="multipart/form-data">
     @csrf
      <input type="hidden"  class="form-control mb-4" name="id" value="{{ $actor->id }}">
     <div class="form-group">
       <label for="inputNombre" class="sr-only">Nombre</label>

       <input type="text"  class="form-control mb-4" name="first_name" placeholder="Nombre" value="{{ $actor->first_name }}">
      	
     </div>

     <div class="form-group">
       <label for="inputPrecio" class="sr-only">Precio</label>
       <input type="text"  class="form-control mb-4" name="last_name" placeholder="Apellido" value="{{ $actor->last_name }}">	
     </div>

     <div class="form-group">
       <label for="inputPrecio" class="sr-only">Precio</label>
       <input type="text" class="form-control mb-4" name="rating" placeholder="Rating" value="{{ $actor->rating }}">	
     </div>
    <button class="btn btn-lg btn-primary btn-block black-background white" type="submit">Actualizar Actor</button>

  </form>
  <a  class="button "href="/actores">
    <p class ="text-center">Volver</p>
  </a>

</div>
</div>   	
		
	@endsection