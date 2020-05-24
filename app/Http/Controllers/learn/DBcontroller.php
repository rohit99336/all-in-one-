<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBcontroller extends Controller
{
    //
    function index()
    {   //1st --------------------06.04.2020--------------------------------
        //return "heelo rohit";                           ///tsting controller
        //return DB::select('select * from users'); //access DATABASE projct in users tabale data 06.04.2020//

        //0------------------------07.04.2020---------------------------------//
        //return DB::table('users')                     //select users table from project DATABASE
        // ->where('name','prem')                        //slect name row data from users tanle
        // ->get();
        // print_r($data);

        //2nd
        // $data= DB::table('users')->count();                   //data select use to id
        // print_r($data);

        //3rd delete & insert query
         //return DB::table('users')                   //select users table from project DATABASE
         //->where('name','kamlesh')                     //slect name row data from users table
         //->delete();                             // delete query for selected row(where) delete data in databse
        //  ->insert([                             //insert new data in users table from project table
        //      'name'=>'kamlesh',
        //      'branch'=>'cse',
        //      'sem'=>'6'
        //      ]);

            //---------------UPADTE QUERY-------------------//
            // return DB::table('users')                 //select users table from project DATABASE
            // ->where('name','kamlesh')                  //slect name row data from users tabl
            // ->update([                               //update data in users table from project table
            // 'name'=>'prem',
            // 'branch'=>'it',
            // 'sem'=>'8'
            // ]);

        //-------------------------AGREEGATES--------------------------------------------//
        // $data= DB::table('users')->max('id');        //max query for maximum value in the field
        // print_r($data);                              //print max value

        //-------------------------display data--------------------------//
        // $data= DB::table('users')->get(); 
        // echo "<pre>";     
        // print_r($data);

        //----------------------------------join 2 diff diff table data-------------------------------------------//
        // $data= DB::table('users')
        // ->join('users2','users.id','users2.id')
        // ->get(); 
        // echo "<pre>";     
        // print_r($data);

        //-------------------------show databse data in view showDBD page----------------------------//
            // $data= DB::table('users')->get();  
            // return view('showDBD',['data'=>$data]); // call showDBD view page & display DB data througth this page.

        //-----------------------pagignater-------------------------------------//
            $data= DB::table('users')->paginate('2');  
            return view('pagineter',['data'=>$data]); 
    }
}
