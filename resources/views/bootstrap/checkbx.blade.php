@extends('bootstrap/header')
@section('container')
<h2>Choose Programing Languages(checkbox)</h2>
<div class="btn-group-toggle btn-group-vertical" data-toggle="button">
    <label for="" class="btn btn-info active" >
        <input type="checkbox" name="" id="" checked autocomplete="off">C
    </label><br><br>

    <label for="" class="btn btn-info">
        <input type="checkbox" name="" id=""  autocomplete="off">C++
    </label><br><br>

    <label for="" class="btn btn-info">
        <input type="checkbox" name="" id=""  autocomplete="off">Java
    </label><br><br>

    <label for="" class="btn btn-info">
        <input type="checkbox" name="" id=""  autocomplete="off">javascript
    </label><br><br>
</div>

<br><br>

<h2>radio button</h2>
<div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label for="" class="btn btn-success active">
        <input type="radio" name="" id="" autocomplete="off" checked>male
    </label>

    <label for="" class="btn btn-success">
        <input type="radio" name="" id="">Female
    </label>

    <label for="" class="btn btn-success">
        <input type="radio" name="" id="">Transgender
    </label>
</div><br><br>

<h2>button group</h2>
<div class="btn-group" role="group">
    <button type="button" class="btn btn-secondary">Left</button>
    <button type="button" class="btn btn-secondary">Middle</button>
    <button type="button" class="btn btn-secondary">Right</button>
</div><br><br>

<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
    <div class="btn-group mr-2" role="group" aria-label="First group">
      <button type="button" class="btn btn-secondary">1</button>
      <button type="button" class="btn btn-secondary">2</button>
      <button type="button" class="btn btn-secondary">3</button>
      <button type="button" class="btn btn-secondary">4</button>
    </div>
    <div class="btn-group mr-2" role="group" aria-label="Second group">
      <button type="button" class="btn btn-secondary">5</button>
      <button type="button" class="btn btn-secondary">6</button>
      <button type="button" class="btn btn-secondary">7</button>
    </div>
    <div class="btn-group" role="group" aria-label="Third group">
      <button type="button" class="btn btn-secondary">8</button>
    </div>
  </div>
@endsection
