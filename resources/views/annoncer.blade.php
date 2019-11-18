@extends('layouts.master')

@section('content')

<main role="main">

    <div class="container mt-4">
        <h3>Seneste annoncer</h3>
        <div class="row bg-white border mt-4 mb-2 pt-2 pb-2">
            <div class="col-sm-2">
                &nbsp;
            </div>
            <div class="col-sm-2 secondary">
                <b>Beskrivelse</b>
            </div>
            <div class="col-sm-2 secondary">
                <strong>Pris</strong>
            </div>
            <div class="col-sm-2 secondary">
                <strong>Område</strong>
            </div>
            <div class="col-sm-2 secondary">
                <strong>E-mail</strong>
            </div>
            <div class="col-sm-2 secondary">
                <strong>Tlf.</strong>
            </div>
        </div>    
    </div>
    <div class="container">    
            
        @foreach($classifieds as $classified)
        <div class="row bg-white border mt-2 mb-2 pt-4 pb-4">

            <div class="col-sm-2">
              <img src="{{asset ('/')}}images/listings/{{$classified->image}}" width="100">
            </div>
            <div class="col-sm-2 h-50 d-inline-block">
              <h5><a href="/classifieds/{{$classified->id}}" class="secondary">{{$classified->title}}</a></h5>
              <p class="overflow ellipsis">{{$classified->description}}</p>
            </div>
            <div class="col-sm-2">
              Kr. {{$classified->price}},-
            </div>
            <div class="col-sm-2">
              {{$classified->location}}
            </div>
            <div class="col-sm-2">
              {{$classified->email}}
            </div>
            <div class="col-sm-2">
              Tlf.:{{$classified->phone}}
            </div>
           
        </div>
         @endforeach
    
    </div>
    <div class="container mt-4 mb-4">  
        <div class="col-12 secondary">{{ $classifieds->links() }}</div>
    </div>    
</main>
@endsection