<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    //
    public $table = "actors";
    public $primaryKey= "id";
    //public $timestamp ="false";
    public $guarded =[];

    public function getNombreCompleto (){
    	$nombre = $this->first_name . " " . $this->last_name;
    	return $nombre;

    }
}
