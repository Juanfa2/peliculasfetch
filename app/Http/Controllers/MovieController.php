<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
   
	public function listadoAPI (){
		$peliculas = Movie::orderBy('title')->get();
		return json_encode($peliculas);
	}

}
