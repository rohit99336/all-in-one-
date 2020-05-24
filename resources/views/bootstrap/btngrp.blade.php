@extends('bootstrap/header')
@section('container')
<h2>Button group using class="btn-group"</h2>
<div class="btn-group" role="group">
    <button type="button" class="btn btn-secondary">Left</button>
    <button type="button" class="btn btn-secondary">Middle</button>
    <button type="button" class="btn btn-secondary">Right</button>
</div>
<br><br>
<h2>button toolbar</h2>
<div class="btn-toolbar" role="toolbar">
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

    <br><br>
    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <button type="button" class="btn btn-secondary">1</button>
        <button type="button" class="btn btn-secondary">2</button>

        <div class="btn-group" role="group">
          <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </button>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="#">Dropdown link</a>
            <a class="dropdown-item" href="#">Dropdown link</a>
          </div>
        </div>
      </div>
  </div>

  <br><br><br>
      <div class="btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-secondary active">
          <input type="checkbox" checked autocomplete="off"> Checked
        </label>
      </div>


@endsection
