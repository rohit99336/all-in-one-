<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\project;

class InsDBcontroller extends Controller
{
    //
    function save(request $rqst)
    {
        // return "conection successfuly";
        print_r($rqst->input());                //for data input from form inserDB 
        $qry= new project;                      //database object
        $qry->name=$rqst->name;                 //------\
        $qry->branch=$rqst->branch;             //      |-- data input throgh from field to DB
        $qry->sem=$rqst->sem;                   //------/
        $qry->save();                           //for insert Query

    //-----------------------manualy successfuly data inserted in DB---------------------------//
            //return project::all();              //testing manualy databse connection
            // $qry->name="bhagi";
            // $qry->branch="art";
            // $qry->sem="5";
            // $qry->save();




        //--------------------USING direct Database---------------------//
        // //3rd delete & insert query
        //  return DB::table('users')     //direct access DB    //select users table from project DATABASE
        //   ->where('name','papu')                     //slect name row data from users table
        //   ->delete();                             // delete query for selected row(where) delete data in databse
        //       ->insert([                             //insert new data in users table from project table
        //       'name'=>'kamlesh',
        //       'branch'=>'cse',
        //      'sem'=>'9'
        //          ]);

    }
}
