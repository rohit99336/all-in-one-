<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;

class Modelcontroller extends Controller
{
    //
    function input()
    {
       // return "hello i am controller";
       // return project::all();                      ///access for projects table data from projct DATABASE
       // return project::where('name','php')->get();  //use for acces table data using name
       // return project::find(1);                 //use access data using id
       // return project::min('id');               //use for the minimum no of intger datas row in the table
       // return project::max('id');                //use for the minimum no of intger datas row in the table
       
    }
}
