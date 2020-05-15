<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
   
	public function listadoAPI (){
		$peliculas = Movie::orderBy('title')->get();
		return json_encode($peliculas);
		//return $peliculas->toJson();
		//return $peliculas sirve igual
	}

	public function save(Request $request
	){
		$nuevaPelicula = new Movie();
		$nuevaPelicula->title = $request["title"]; 
		$nuevaPelicula->rating = $request["rating"];
		$nuevaPelicula->awards = $request["awards"];
		$nuevaPelicula->release_date = $request["release_date"];

		$nuevaPelicula->save();
	}
}
