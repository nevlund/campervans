@extends('layouts.master')

@section('content')
<main role="main">

    <div class="container mt-4">
        
        <div class="row mt-4 mb-2 pt-2 pb-2">
            <div class="col-md-4">
                <img src="{{asset ('/')}}images/listings/{{$ad->image}}" width="250">
            </div>
            <div class="col-md-8">
                <h3>{{$ad->title}}</h3>
                <p>{{$ad->description}}</p>

                <h4 class="pt-4">Detaljer</h4>

                <ul class="list-group">
                        <li class="list-group-item"><strong>Pris kr:</strong> {{$ad->price}} </li>
                        <li class="list-group-item"><strong>Stand:</strong> {{$ad->condition}} </li>
                    </ul>
                    
                    <h4 class="pt-4">Kontakt information</h4>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Område:</strong> {{$ad->location}} </li>
                        <li class="list-group-item"><strong>Kontakt email:</strong> {{$ad->email}} </li>
                        <li class="list-group-item"><strong>Kontakt tlf:</strong> {{$ad->phone}} </li>
                    </ul>
            </div>
           
        </div>    
    </div>

     
</main>
@endsection