@extends('bootstrap/header')
@section('container')
<h2>Alerts</h2>
<h5>Provide contextual feedback messages for typical user actions with the handful of available and
    flexible alert messages.</h5>
<div class="alert"> normal alert class</div>

<h2>alerts with color</h2>
<div class="alert alert-primary" role="alert">
    <em>A simple primary  !</em>
  </div>
  <div class="alert alert-secondary" role="alert">
    A simple secondary  !
  </div>
  <div class="alert alert-success" role="alert">
    A simple success  !
  </div>
  <div class="alert alert-danger" role="alert">
    A simple danger  !
  </div>
  <div class="alert alert-warning" role="alert">
    A simple warning  !
  </div>
  <div class="alert alert-info" role="alert">
    A simple info  !
  </div>
  <div class="alert alert-light" role="alert">
    A simple light  !
  </div>
  <div class="alert alert-dark" role="alert">
    A simple dark  !
  </div>

  <h3>अलर्ट के साथ लिंक का उपयोग </h3>
  <div class="alert alert-primary" role="alert">
    A simple primary alert with <a href="#" class="alert-link"> color liks</a>.  Alert
  </div>
  <div class="alert alert-secondary" role="alert">
    A simple secondary alert with <a href="#" class="alert-link"> color liks</a>.  Alert
  </div>
  <div class="alert alert-success" role="alert">
    A simple success alert with <a href="#" class="alert-link"> color liks</a>.  Alert
  </div>
  <div class="alert alert-danger" role="alert">
    A simple danger alert with <a href="#" class="alert-link"> color liks</a>.  Alert
  </div>
  <div class="alert alert-warning" role="alert">
    A simple warning alert with <a href="#" class="alert-link"> color liks</a>.  Alert
  </div>
  <div class="alert alert-info" role="alert">
    A simple info alert with <a href="#" class="alert-link"> color liks</a>.  Alert
  </div>
  <div class="alert alert-light" role="alert">
    A simple light alert with <a href="#" class="alert-link"> color liks</a>.  Alert
  </div>
  <div class="alert alert-dark" role="alert">
    A simple dark alert with <a href="#" class="alert-link"> color liks</a>.  Alert
  </div>

  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">welcome!</h4>
    <p>welcome to laravel bt</p><hr>
    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
  </div>
@endsection
