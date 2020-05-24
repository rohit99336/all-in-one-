@extends('bootstrap/header')
@section('container')

<h3>Spacing</h3><br>
<div class="mt bg-info">t - for classes that set margin-top or padding-top</div><br>
<div class="mb bg-info">b - for classes that set margin-bottom or padding-bottom</div><br>
<div class="ml bg-info">l - for classes that set margin-left or padding-left</div><br>
<div class="mr bg-info">r - for classes that set margin-right or padding-right</div><br>
<div class="mx bg-info">x - for classes that set both *-left and *-right</div><br>
<div class="my bg-info">y - for classes that set both *-top and *-bottom</div><br>


<h3>Spacing</h3><br>
<div class="mt-1 bg-info">t - for classes that set margin-top or padding-top</div><br>
<div class="mb-4 bg-info">b - for classes that set margin-bottom or padding-bottom</div><br>
<div class="ml-2 bg-info">l - for classes that set margin-left or padding-left</div><br>
<div class="mr-2 bg-info">r - for classes that set margin-right or padding-right</div><br>
<div class="mx-3 bg-info">x - for classes that set both *-left and *-right</div><br>
<div class="my-3 bg-info">y - for classes that set both *-top and *-bottom</div><br>

<div class="row mx-md-n5">
    <div class="col px-md-5"><div class="p-3 border bg-light">Custom column padding</div></div>
    <div class="col px-md-5"><div class="p-3 border bg-light">Custom column padding</div></div>
</div>



@endsection
