<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{
	public function directory(){
		$actores = Actor::orderBy("last_name", "ASC")->paginate(10);
		return view('actores', compact('actores'));
	}

	public function show($id){
		$actor = Actor::find($id);
		return view('actor', compact('actor'));
	}

	public function search(Request $request){
		$nombre = $request["nombre"];
		$actores = Actor::where('first_name', 'like', '%' . $nombre . '%')->paginate(4);
		return view('actores', compact('actores'));
	}

	public function store(Request $request){
		$actor = new Actor();
		$actor->first_name=$request["first_name"];
		$actor->last_name=$request["last_name"];
		$actor->rating=$request["rating"];
		$actor->save();
		return redirect('actores');
	}

	public function edit($id){
		$actor = Actor::find($id);
		return view('actorEdit', compact('actor'));
	}

	public function update(Request $request){
		$actor = Actor::find($request["id"]);
		$actor->first_name=$request["first_name"];
		$actor->last_name=$request["last_name"];
		$actor->rating=$request["rating"];
		$actor->save();
		return redirect('actores');


	}

	public function destroy(Request $request){
		$actor = Actor::find($request["id"]);
	
		$actor->delete();
		return redirect('actores');
	}

}
