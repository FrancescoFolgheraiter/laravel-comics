@extends('layouts.app')

@section('page-title', 'Home DC')

@section('main-content')
<section id="home-hero" class="d-flex">
    <div class="container d-flex flex-column justify-content-between">
        <div class="align-self-end m-5">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Dc-logo">
        </div>
        <h1 class="m-5">
            Evil supermen
        </h1>
    </div>
</section>
<section id="home-carousel">
    <!--carosello bootstrap-->
    <div class="container-sm ">
        <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ Vite::asset('resources/img/adv.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ Vite::asset('resources/img/gatto.webp')}}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
</section>


@endsection
