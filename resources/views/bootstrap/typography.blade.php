@extends('bootstrap/header')


@section('container')
<h1>normal heading tags</h1>
<h1>h1. Bootstrap heading</h1>
<h2>h2. Bootstrap heading</h2>
<h3>h3. Bootstrap heading</h3>
<h4>h4. Bootstrap heading</h4>
<h5>h5. Bootstrap heading</h5>
<h6>h6. Bootstrap heading</h6>
<br><br><br>
<h1>header define using paragraf & bootstrap heading class</h1>
<p class="h1">h1. Bootstrap heading</p>
<p class="h2">h2. Bootstrap heading</p>
<p class="h3">h3. Bootstrap heading</p>
<p class="h4">h4. Bootstrap heading</p>
<p class="h5">h5. Bootstrap heading</p>
<p class="h6">h6. Bootstrap heading</p>

<br><br>
<h3>
  Fancy display heading without class diff color darkness
  <small >With faded secondary text</small>
</h3>

<h3>
  Fancy display heading with class
  <small class="text-muted">With faded secondary text</small>
</h3>
<h1>Display headings but not working in bootstrap 4.4.1</h1><!----------not difine in bootstrap--------------->
<h1 class="display-1">Display 1</h1>
<h1 class="display-2">Display 2</h1>
<h1 class="display-3">Display 3</h1>
<h1 class="display-4">Display 4</h1>

<p class="lead">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, ducimus.
</p>

<h2>Inline text elements</h2>
<p>You can use the mark tag to <mark>highlight</mark> text.</p>
<p><del>Lorem ipsum dolor sit amet consectetur</del></p>
<p><s>Lorem ipsum dolor sit amet consectetur</s></p>
<p><ins>Lorem ipsum dolor sit amet consectetur</ins></p>
<p><u>Lorem ipsum dolor sit amet consectetur</u></p>
<p><small>Lorem ipsum dolor sit amet consectetur</small></p>
<p><strong>Lorem ipsum dolor sit amet consectetur</strong></p>
<p><em>Lorem ipsum dolor sit amet consectetur</em></p>

<h1>Abbreviations</h1>
<p><abbr title="Rohit kumar">rk</abbr></p>
<p><abbr title="india" class="initialism">contry</abbr></p>

<h2>Blockquotes</h2>
<blockquote class="blockquote">
  <p class="mb-0"> blockqote1</p>
</blockquote>

<blockquote class="blockquote">
  <p class="mb-0">blockqote2 using for the writer name</p>
  <footer class="blockquote-footer">Lorem ipsum dolor sit amet consectetur<cite title="Source Title">Rohit kumar</cite></footer>
</blockquote>

<blockquote class="blockquote text-center">
<center>for center</center>
  <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, odit maiores! Explicabo,
   qui placeat a reiciendis, tempora optio impedit voluptatem rerum ad ullam animi distinctio laborum.
    Aut, inventore, consequatur incidunt hic iusto fugit minima soluta sint vel quae temporibus nam? Aut 
    consectetur necessitatibus mollitia saepe nemo sint dolores iure eligendi.</p>
  <footer class="blockquote-footer">writed by <cite title="Source Title">Rohit Kumar</cite></footer>
</blockquote>

<center>nested loop remove default list style</center>
<ul class="list-unstyled">
  <li>fiest</li>
  <li>second</li>
  <li>third</li>
  
  <li>circle with list
    <ul>
      <li>Phasellus iaculis neque</li>
      <li>Purus sodales ultricies</li>
      <li>Vestibulum laoreet porttitor sem</li>
      <li>Ac tristique libero volutpat at</li>
    </ul>
  </li>
  <li>fourth</li>
  <li>six</li>
  
</ul>

@endsection
