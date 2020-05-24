@extends('bootstrap/header')
@section('container')

<div class="btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary active">
      <input type="checkbox" checked autocomplete="off"> Checked
    </label>
  </div>

  <br><br>
  <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary active">
      <input type="radio" name="options" id="option1" autocomplete="off" checked> Active
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="options" id="option2" autocomplete="off"> Radio
    </label>
    <label class="btn btn-secondary">
      <input type="radio" name="options" id="option3" autocomplete="off"> Radio
    </label>
  </div>
<br><br>
  <br><button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
    Single toggle
  </button>
@endsection
