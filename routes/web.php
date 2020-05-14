<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/miPrimeraRuta', function(){
	return "Cree mi primera ruta en Laravel";
});

Route::get('/esPar/{numero}', function($numero){
	if(($numero%2)==0){
		return "Es Par";
	}else{
		return "Es Impar";
	}
});


Route::get('/sumar/{numero1}/{numero2}/{numero3?}', function($numero1, $numero2, $numero3=0){
	return "La suma es:  " .($numero1 + $numero2 + $numero3);
});


Route::get('peliculas', function(){
	return view('saveMovieWithFetch');
});




// Route::get('peliculas', function(){
// 	$peliculas= [
// 		1=>[
// 			"title"=>"Volver al futuro I",
// 			"rating"=>9
// 		],
// 		2=>[
// 			"title"=>"Volver al futuro II",
// 			"rating"=>7.9
// 		],
// 		3=>[
// 			"title"=>"Volver al futuro III",
// 			"rating"=>8
// 		],
// 		4=>[
// 			"title"=>"Harry Potter I",
// 			"rating"=>6.8
// 		],

// 		5=>[
// 			"title"=>"Harry Potter II",
// 			"rating"=>9.5

// 		],
// 		6=>[
// 			"title" => "Gladiador",
// 			"rating" => 8.2
// 		],
// 		7=>[
// 			"title" => "Avatar",
// 			"rating" => 7.5
// 		],
// 		8=>[
// 			"title" => "Rocky IV",
// 			"rating"=> 8.7
// 		],
// 		9=>[
// 			"title" => "Interestelar",
// 			"rating" => 6
// 		],	
// 		10=>[
// 			"title" => "El secreto de sus ojos",
// 			"rating"=>7.9
// 		]

// 	];
// 	$peliculasVacia=[];
// 	return view('peliculas', compact('peliculas'));
// });

// Route::get('peliculas/{id}', function($id){
// 	$peliculas= [
// 		1=>[
// 			"title"=>"Volver al futuro I",
// 			"rating"=>9
// 		],
// 		2=>[
// 			"title"=>"Volver al futuro II",
// 			"rating"=>7.9
// 		],
// 		3=>[
// 			"title"=>"Volver al futuro III",
// 			"rating"=>8
// 		],
// 		4=>[
// 			"title"=>"Harry Potter I",
// 			"rating"=>6.8
// 		],

// 		5=>[
// 			"title"=>"Harry Potter II",
// 			"rating"=>9.5
// 		],
// 		6=>[
// 			"title" => "Gladiador",
// 			"rating" => 8.2
// 		],
// 		7=>[
// 			"title" => "Avatar",
// 			"rating" => 7.5
// 		],
// 		8=>[
// 			"title" => "Rocky IV",
// 			"rating"=> 8.7
// 		],
// 		9=>[
// 			"title" => "Interestelar",
// 			"rating" => 6
// 		],	
// 		10=>[
// 			"title" => "El secreto de sus ojos",
// 			"rating"=>7.9
// 		]

// 	];
// 	return view('detallePelicula', compact('peliculas', 'id'));

// });


// Route::get('/actores', 'ActorController@directory');
// Route::get('/actor/{id}', 'ActorController@show');
// Route::post('/actores/buscar ', 'ActorController@search');


// Route::get('/actors/add',function(){
// 	return view('actorsAdd');
// });

// Route::post('/actors/add', 'ActorController@store');

// Route::get('/actor/{id}/edit','ActorController@edit');
// Route::post('/actor/{id}/edit','ActorController@update');

// Route::post('/actor/destroy', 'ActorController@destroy');

