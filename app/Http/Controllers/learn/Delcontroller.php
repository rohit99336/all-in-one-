<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;
use DB;
//use Illuminate\Support\Facades\DB;

class Delcontroller extends Controller
{
    //
    function delete(request $rqst)
    {
        //---------------08.04.2020---------------------//
        //print_r($rqst->input());
        //$cmp=project::find($rqst->id);
        //echo $cmp->delete();                          // delete single data from projet DB

        echo DB::destroy([3,4]);          //if delete two or mre data from project/projects SB
    }
}
