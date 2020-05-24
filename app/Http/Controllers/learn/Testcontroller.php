<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;

class Testcontroller extends Controller
{
    //function index()
    //{
        //return ['name'=> "rohit", 'class'=>'engg'];     
    //}

    public function account(request $rqst)
    {
        return $rqst->input();
    }

    function routemodel( project $id)
    {
       // return project::all();
       return $id; 
    }
}
