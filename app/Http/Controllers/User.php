<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    //
    function list()
    {
        return view('userlist');
    }
}
