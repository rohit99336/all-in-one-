<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    //
     protected $table="users";
     public $timestamps=false;

     public function getnameAttribute($value)
     {
        //return ucfirst($value);
     }

}
