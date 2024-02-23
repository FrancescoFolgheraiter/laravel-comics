@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')
<section class="jumbotron">
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="Teen Titans">
</section>
<section id="comics-series">
    <div class="container">
        <div>
            CURRENT SERIES
        </div>
        <div class="row">
            @foreach($data as $key=> $elem)
            <div class="col-2">
                <div class="card">
                    <img src="{{$elem['thumb']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$elem['title']}}</h5>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section></section>
@endsection
