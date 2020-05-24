<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UpdateModel;


class UpdateController extends Controller
{
    //
    function update(Request $rqst)
    {
        //print_r($rqst->input());
        // echo UpdateModel::where("name",'rohit')
        // ->update(['branch'=>'IT']);                        //update data throught direct Query fire

        // echo UpdateModel::where("name",$rqst->name)
        // ->update(['branch'=>$rqst->branch]);                 //update data throught from 

        $qry= UpdateModel::find($rqst->id);
        $qry->name=$rqst->name;
        $qry->branch=$rqst->branch;
        $qry->save();
    }

    
}
