<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class APLcontroller extends Controller
{
    //
    function list()
    {
        $data=http::get();
    }
}
