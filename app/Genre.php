<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public $table = "genres";
    public $primaryKey= "id";
    //public $timestamp ="false";
    public $guarded =[];
}
