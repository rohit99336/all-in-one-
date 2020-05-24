@extends('bootstrap/header')
@section('container')

<h2>Create responsive video or slideshow embeds based on the width of the parent by creating an intrinsic
    ratio that scales on any device.
</h2>

<div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src='E:\web desigen videos\LARAVEL PHP\LARAVEL 7\Laravel 7 hindi tutorial - accessors_HD.mp4' allowfullscreen></iframe>
</div>

<!-- 21:9 aspect ratio -->
<div class="embed-responsive embed-responsive-21by9">
    <iframe class="embed-responsive-item" src="..."></iframe>
  </div>

  <!-- 16:9 aspect ratio -->
  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="..."></iframe>
  </div>

  <!-- 4:3 aspect ratio -->
  <div class="embed-responsive embed-responsive-4by3">
    <iframe class="embed-responsive-item" src="..."></iframe>
  </div>

  <!-- 1:1 aspect ratio -->
  <div class="embed-responsive embed-responsive-1by1">
    <iframe class="embed-responsive-item" src="..."></iframe>
  </div>
@endsection
