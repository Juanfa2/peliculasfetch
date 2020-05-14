@extends("layout")
	@section("pelicula")
		Peliculas
	@endsection

	@section("titulo principal")
		<h1 class="text-center">Agregar Actor</h1>
	@endsection

	@section("contenido")
		
		<div class ="row justify-content-md-center mt-4">
  <div class="col-lg-4 col-md-6 col-xs-12 ">
    <h2 class="form-signin-heading">Nuevo Actor</h2>
    <form class="form-signin" action="{{url('actors/add')}}" method="POST" enctype="multipart/form-data">
     @csrf
     <div class="form-group">
       <label for="inputNombre" class="sr-only">Nombre</label>

       <input type="text"  class="form-control mb-4" name="first_name" placeholder="Nombre">
      	
     </div>

     <div class="form-group">
       <label for="inputPrecio" class="sr-only">Apellido</label>
       <input type="text"  class="form-control mb-4" name="last_name" placeholder="Apellido">	
     </div>

     <div class="form-group">
       <label for="inputPrecio" class="sr-only">Rating</label>
       <input type="text" class="form-control mb-4" name="rating" placeholder="Rating">	
     </div>
    <button class="btn btn-lg btn-primary btn-block black-background white" type="submit">Agregar Actor</button>

  </form>

</div>
</div>   	
		
	@endsection