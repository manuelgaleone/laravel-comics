@extends('layouts.app')

@section('content')

<div class="container">

    @foreach($products as $product => $comic )
    <h2 class="text-uppercase d-inline-block bg-secondary text-white p-2 mt-4">{{$product}}</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        @foreach($comic as $comics)
        <div class="col">
            <div class="card text-center border-0">
                <img class="card-img-top" src="{{$comics['thumb']}}" alt="">
                <div class="card-body">
                    {{$comics['title']}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach


</div>


@endsection