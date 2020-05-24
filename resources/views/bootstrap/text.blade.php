@extends('bootstrap/header')
@section('container')

    <div class="container">
    <h2>without class</h2>
    <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur nesciunt perferendis aut molestias quidem,illum, doloremque ipsam rem expedita ut a, nihil esse officiis officia reprehenderit pariatur voluptatibus quis ad?
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem in, deleniti officia aspernatur quos dolorum vitae
      accusamus nam iusto. Culpa aliquam nobis rerum corrupti inventore. Tenetur non ratione minus eligendi, laboriosam 
      dolores repudiandae ex voluptatem tempore iure! Voluptatibus ipsam dolore sapiente repudiandae. Modi velit quidem, 
      quaerat inventore consectetur minima maiores earum doloremque! Soluta laboriosam dignissimos, numquam debitis animi
       nam, optio iste, ipsa autem eos illum eius deleniti ab voluptate praesentium mollitia tempora excepturi dolores
        ullam maiores deserunt perferendis. Voluptate incidunt nulla atque obcaecati. Iste, hic ipsum aliquam ab ipsa sit 
        l obcaecati, in itaque voluptate, asperiores alias veniam tempore quia.
    </p>
    </div>

    <h2>with class</h2>
    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur nesciunt perferendis aut molestias quidem,illum, doloremque ipsam rem expedita ut a, nihil esse officiis officia reprehenderit pariatur voluptatibus quis ad?
     Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem in, deleniti officia aspernatur quos dolorum vitae
      accusamus nam iusto. Culpa aliquam nobis rerum corrupti inventore. Tenetur non ratione minus eligendi, laboriosam 
      dolores repudiandae ex voluptatem tempore iure! Voluptatibus ipsam dolore sapiente repudiandae. Modi velit quidem, 
      quaerat inventore consectetur minima maiores earum doloremque! Soluta laboriosam dignissimos, numquam debitis animi
       nam, optio iste, ipsa autem eos illum eius deleniti ab voluptate praesentium mollitia tempora excepturi dolores
        ullam maiores deserunt perferendis. Voluptate incidunt nulla atque obcaecati. Iste, hic ipsum aliquam ab ipsa sit 
        l obcaecati, in itaque voluptate, asperiores alias veniam tempore quia.</p>

    <h2>text pistion</h2>
    <p class="text-left">Left</p>
    <p class="text-center">Center </p>
    <p class="text-right">Right </p>

    <p>जब हम किसी div का साइज़ डिफाइन कर दे तब Text wrapping and overflow करने के लिए इसका use किया जाता है.</p>
    <div class="badge badge-primary text-wrap" style="width: 6rem;">
                with wrap all words.
    </div>

    <div class="text-nowrap bd-highlight bg-dark" style="width: 8rem;">
    This text should overflow the parent.
    </div>
        <!-----------------------------------------------------------------------------------------------  -->
    <h1>Text transform</h1>
    <p class="text-lowercase"><h2>Lowercased text.</h2></p>
    <p class="text-uppercase"><h2>Uppercased text.</h2></p>
    <p class="text-capitalize"><h2>CapiTaliZed text.</h2></p>

@endsection