@extends('layouts.master')

@section('content')

<main role="main">

    <div class="container">
        @foreach($classifieds as $classified)
        <div class="row bg-white border mt-2 mb-2 pt-2 pb-2">

            <div class="col-sm-2">
              <img src="{{asset ('/')}}images/listings/{{$classified->main_image}}" width="100">
            </div>
            <div class="col-sm-2 h-50 d-inline-block">
              <h4><a href="/classifieds/{{$classified->id}}">{{$classified->title}}</a></h4>
              <p class="overflow ellipsis">{{$classified->description}}</p>
            </div>
            <div class="col-sm-4">
              
            </div>
            <div class="col-sm-4">
              <p>{{$classified->price}}</p>
            </div>
           
        </div>
         @endforeach
    
    </div>
</main>
@endsection