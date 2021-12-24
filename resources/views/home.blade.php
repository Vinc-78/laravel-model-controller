{{-- @extends('layout.layout')

@section('title','My Movies')
    
@endsection

@section('content')

@foreach ($movie as $item)

<h1>{{$item["title"]}}</h1>
    
@endforeach

@endsection --}}

@extends('layout.layout')

@section("title" , "My Movie")


@section('content')

    <div class="container">

        <div class="row row-cols-4 g-3 justify-content-between ">

            @foreach ($movie as $item)

            <div class="col card border-info mx-2" >
                <div class="card-header fs-5 fw-bold">{{$item["title"]}}</div>
                <div class="card-body">
                  <h6 class="card-title"><span>id: {{$item["id"]}}</span>
                  <span> </span>
                  <span>({{$item["original_title"]}})</span></h6>
                  <p class="card-text">Nazionalità: {{$item["nationality"]}}</p>
                  <p class="card-text">Data di pubblicazione: {{$item["date"]}}</p>
                  <p class="card-text">Voto: {{$item["vote"]}}</p>
                  
                </div>
            </div>

            
                
            @endforeach

            

        </div>
    </div>

   {{--  <h1>{{$item["title"]}}</h1> --}}

@endsection

