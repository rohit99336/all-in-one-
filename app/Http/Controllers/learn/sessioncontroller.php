<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessioncontroller extends Controller
{
    //* USE for login & middelware session///
    // function index(request $rqst)                               //start
    // {
    //    // return $rqst->input();
    //    $rqst->session()->put('data',$rqst->input());
    //    //return $rqst->session()->get('data');
    //    if($rqst->session()->has('data'))
    //    {
    //         return redirect('profile_session');
    //    } 
    // }                                                        //end


    // //*flash session*//
    // function index(request $rqst)                                                  //start
    // {
    //     $rqst->session()->flash('status',"task has been sabmited"); 
    //     return redirect('flash');                                                  //end
    // }
}
