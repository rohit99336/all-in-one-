<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlupldController extends Controller
{
    //
    function image(request $rqst)
    {
        $path=$rqst->file('img')->store('avatars');
        return['path'=>$path,'upload'=>'success'];
    }
}
