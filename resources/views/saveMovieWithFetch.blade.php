<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		{{-- Necesario para poder enviar DATA vía fetch --}}
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Fetch Laravel</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-8">
					<h2>Total de películas: <span>(aqui va el # de pelis)</span></h2>
					<!-- En este listado se cargarán las películas que vengan de la consulta asíncrona -->
					<ul class="list-group"></ul>
				</div>
				<div class="col-4">
					<h2>Dar de alta una película</h2>
					<form id="form" method="post" enctype="multipart/form-data" >
						@csrf
						<div class="form-group">
							<label>Title:</label>
							<input type="text" name="title" id="name" class="form-control"><br>
							<small class="error" style ="color:red"></small> 
						</div>
						<div class="form-group">
							<label>Rating:</label>
							<input type="text" name="rating" id="rating" class="form-control"><br>
							<small class="error" style ="color:red"></small> 
						</div>
						<div class="form-group">
							<label>Awards:</label>
							<input type="text" name="awards" id="awards" class="form-control"><br>
							<small class="error" style ="color:red"></small> 
						</div>
						<div class="form-group">
							<label>Release date:</label>
							<input type="date" name="release_date" id="release_date" class="form-control"><br>
							<small class="error" style ="color:red"></small> 
						</div>
						
						<button type="submit" class="btn btn-success">GUARDAR</button>
						<small id=""></small>
					</form>
				</div>
			</div>
		</div>

		<script>
			// Lista HTML donde se cargarán las películas que vienen de la DB
			let ul = document.querySelector('ul');

			// Tag donde mostraremos cuantas películas hay en la DB
			let span = document.querySelector('h2 span');

			//Tag para obtener el formulario antes de enviarlo	
			let form = document.querySelector("form");

			let errorSmall = document.querySelectorAll(".error")
			


			function obtenerPeliculas(){
				fetch("http://localhost:8000/api/peliculas")
			.then(function(respuesta){
				
				return respuesta.json();
			})
			.then(function(peliculas){

					// `peliculas.forEach(function(elemento, posicion, array){
					// 						// agregar los li
					// 					} )`

				span.innerText = peliculas.length;
				for(let i = 0; i< peliculas.length; i++){
  				ul.innerHTML +=`<li>${peliculas[i].title} - Rating ${peliculas[i].rating}</li>`; 
  			}
			})
			}

			obtenerPeliculas();



			form.addEventListener('submit', function(event) {
			  	event.preventDefault();
				let elementosForm = form.elements;

				let elementsArray = Array.from(elementosForm);
				elementsArray.pop();
				//console.log(elementsArray)
				let error = false;
				
				for(let i = 1; i< elementsArray.length; i++){
					if(elementsArray[i].value == ""){
						let a = i - 1;
  					errorSmall[a].innerText = "Este campo esta vacio"
  					error = true;
				   }
				}

				if(!error){
					// Array de los campos del Formulario, sacamos el último pues es el botón de enviar
			let campos = Array.from(form.elements);
			campos.pop();

			let datosDelFormulario = new FormData();
			campos.forEach(function(elemento){
				datosDelFormulario.append(elemento.name, elemento.value)
			})

			// Cabecera CSRF para que Laravel recibe el $request y guarde la película
			let header = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
					// Llamado asíncrono para guardar la película
			window.fetch('http://localhost:8000/movies/save', {
				method: 'POST',
				body: datosDelFormulario, // data del formulario
				headers: {'X-CSRF-TOKEN': header} // Para enviar data via fetch

			})
				.then(response => response.text())
				.then(function(){
					document.getElementById("form").reset()
					ul.innerText = "";
					obtenerPeliculas();
				})
				 // .catch(error => console.error(`Error: `, error));
				}
			})

				
			

			// // Formulario con el que estamos guardando una película
			// let form = document.querySelector('form');

			// // Array de los campos del Formulario, sacamos el último pues es el botón de enviar
			// let campos = Array.from(form.elements);
			// campos.pop();

			// // Cabecera CSRF para que Laravel recibe el $request y guarde la película
			// let header = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

			// // Llamado asíncrono para guardar la película
			// window.fetch('http://localhost:8000/movies/save', {
			// 	method: 'POST',
			// 	body: campos, // data del formulario
			// 	headers: {'X-CSRF-TOKEN': header} // Para enviar data via fetch

			// })
			// 	.then(response => response.json())
			// 	.then(data => '¿Qué hacemos al recibir la data?')
			// 	.catch(error => console.error(`Error: `, error));
		</script>
	</body>
</html>
