@extends('bootstrap/header')
@section('container')
<div class="card">
    <div class="card-header">Programming</div>
    <div class="card-body">
        <h4 class="card-titel">learn Programming</h4>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nobis esse ea alias adipisci sit enim quibusdam molestiae repudiandae dolorum?</p>
        <a href="#" class=" btn btn-danger"> like</a>
    </div>
    <div class="card-footer">writen by Rohit</div>
</div><br><br>

<div class="card">
    <div class="card-header">Programming</div>
    <div class="card-body">
        <blockquote class="blockquote">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum cumque possimus enim ad eum, obcaecati labore cupiditate alias eius facilis?</p>
            <footer class="blockquote-footer">writen by Rohit kumar</footer>
        </blockquote>
    </div>
</div><br><br><br>

  <div class="card bg-dark text-white" style="width:300px; height:200px;">
    <img src="#" class="card-img img-fluid" alt="image(6)" >
    <div class="card-img-overlay">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text">Last updated 3 mins ago</p>
    </div>
  </div><br><br>

  <div class="card-group">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
@endsection
