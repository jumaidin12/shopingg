@extends('layouts.frontend')
{{-- @section('title', 'Shop products') --}}
@section('content')
     <div class="mt-1">
               
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="/storage/images/slide/rifki1.PNG"  alt="First slide" style="height: 35em">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/storage/images/slide/rifik2.PNG" alt="Second slide" style="height: 35em">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/storage/images/slide/rifkki 3.PNG" alt="Third slide" style="height: 35em">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
@endsection

