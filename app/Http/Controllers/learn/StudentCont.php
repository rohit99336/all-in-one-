<?php

namespace App\Http\Controllers;

use App\student2;
use Illuminate\Http\Request;

class StudentCont extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          echo 'index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        echo "create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        echo "store";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student2  $student2
     * @return \Illuminate\Http\Response
     */
    public function show(student2 $student2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student2  $student2
     * @return \Illuminate\Http\Response
     */
    public function edit(student2 $student2)
    {
        //
        echo "Edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student2  $student2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student2 $student2)
    {
        //
        echo "update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student2  $student2
     * @return \Illuminate\Http\Response
     */
    public function destroy(student2 $student2)
    {
        //
        echo "distroy";
    }
}
