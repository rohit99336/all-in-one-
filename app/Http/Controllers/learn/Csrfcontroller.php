<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Csrfcontroller extends Controller
{
    public function index(request $rqst)
    {
        return $rqst->input();
    }
}
