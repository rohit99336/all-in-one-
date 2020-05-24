@extends('bootstrap/header')
@section('container')

{{-- इसका उपयोग तब किया जाता है जब हमे कुछ data का कण्ट्रोल किसी बटन मे देकर उसका use होने पर शो करवाया जाय अन्यथा वह दिखाई न दे | --}}

    <div class="container">
        <br>    <br>    <br>    <br>

        <a href="#mydiv" class="btn btn-warning" role="button" data-toggle="collapse">click me</a>
        <div class="collapse" id="mydiv">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet quas ducimus hic. Ex, laudantium facilis est cumque excepturi magnam nesciunt mollitia unde atque dignissimos repudiandae nulla aliquid eius quia ut?</div>

    </div>


    <p>
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Link with href
        </a>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Button with data-target
        </button>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
        </div>
    </div>
@endsection
