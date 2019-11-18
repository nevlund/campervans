@extends('layouts.master')

@section('content')
<main role="main">

    <div class="container mt-4">
        
        <div class="row mt-4 mb-2 pt-2 pb-2">
            <div class="col-md-4">
                <img src="{{asset ('/')}}images/listings/{{$classified->image}}" width="250">
            </div>
            <div class="col-md-8">
                <h3>{{$classified->title}}</h3>
                <p>{{$classified->description}}</p>

                <h4 class="pt-4">Detaljer</h4>

                <ul class="list-group">
                        <li class="list-group-item"><strong>Pris kr:</strong> {{$classified->price}} </li>
                        <li class="list-group-item"><strong>Stand:</strong> {{$classified->condition}} </li>
                    </ul>
                    
                    <h4 class="pt-4">Kontakt information</h4>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Område:</strong> {{$classified->location}} </li>
                        <li class="list-group-item"><strong>Kontakt email:</strong> {{$classified->email}} </li>
                        <li class="list-group-item"><strong>Kontakt tlf:</strong> {{$classified->phone}} </li>
                    </ul>
            </div>
           
        </div>    
    </div>

     
</main>
@endsection