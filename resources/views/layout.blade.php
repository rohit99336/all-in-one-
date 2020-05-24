<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
    .header
    {
        border:2px solid red;
        width:100%;
        height:100px;
        background-color:cadetblue;
        color:;
    }

    .sidebar
    {
        border:2px solid red;
        width:100%;
        font-size:40px;
        margin-top:5px;
        background-color:skyblue;
    }

    
    </style>
</head>
<body>
    <div class="header">
        @section('header') <h1>header for all page</h1> @show
    </div>

    <div class="sidebar">
    @section('sidebar') <p>sidebar for all page</p> @show    
    </div>

    <div class="container"><h1>container</h1>
        @yield('content') <p></p>@show
    </div>
</body>
</html>