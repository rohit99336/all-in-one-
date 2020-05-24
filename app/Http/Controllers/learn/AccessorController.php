<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;

class AccessorController extends Controller
{
    //
    function access()
    {
        return project::all();
    }
}
