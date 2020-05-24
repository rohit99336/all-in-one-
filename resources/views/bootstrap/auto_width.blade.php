<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> <!--using for laravel-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}"> <!--using for laravel, custom css-->

    <title>Auto-width-col</title>
</head>
<body>
    <h2>column width</h2>
    <div class="container cbox">
        <div class="row araw">
            <div class="col adiv"></div>
            <div class="col-sm-6 bdiv"></div>
            <div class="col-4 cdiv"></div>
            <div class="col ddiv"></div>
        </div>
    </div>

    <h2>column break</h2>
    <div class="container cbox">
        <div class="row araw">
            <div class="col-4 adiv"></div>
            <div class="col-4 bdiv"></div>
            <div class="w-100"></div>
            <div class="col-4 ddiv"></div>
        </div>
    </div>

    <h2>set column</h2>
    <div class="container cbox">
        <div class="row araw">
            <div class="col adiv"><h1>first</h1></div>
            <div class="col bdiv"><h1>second</h1></div>
            <div class="col cdiv order-first"><h1>third</h1></div>
            <div class="col ddiv"><h1>fourth</h1></div>
        </div>
    </div>

    <h2> offset column</h2>
    <div class="container cbox">
        <div class="row araw">
            <div class="col-md-3  adiv"></div>
            <div class="col-md-3 offset-md-4 bdiv"></div>
        </div>
    </div>

    <h2>nesting colum or rows</h2>
    <div class="container cbox">
        <div class="row araw">
            <div class="col-6  adiv">first 6 of 12
                <div class="row">
                    <div class="col-1">1</div>
                    <div class="col-1">2</div>
                    <div class="col-1">3</div>
                    <div class="col-1">4</div>
                    <div class="col-1">5</div>
                    <div class="col-1">6</div>
                    <div class="col-1">7</div>
                    <div class="col-1">8</div>
                    <div class="col-1">9</div>
                    <div class="col-1">10</div>
                    <div class="col-1">11</div>
                    <div class="col-1">12</div>
                </div>
            </div>
            <div class="col-6  bdiv">second 6 of 12</div>
        </div>
    </div>

    <div class="container cbox">
        <div class="row araw">
            <div class="col-6 adiv"></div>
            <div class="col-6 bdiv"></div>
        </div>
    </div>

</body>
</html>