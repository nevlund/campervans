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
                        <li class="list-group-item"><strong>Årgang:</strong> {{$ad->year}} </li>
                        <li class="list-group-item"><strong>Drivkraft:</strong> {{$ad->fueltype}} </li>
                        <li class="list-group-item"><strong>Farve:</strong> {{$ad->color}} </li>
                    </ul>
                    
                    <h4 class="pt-4">Kontakt information</h4>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Adresse:</strong> {{$user->street}} </li>
                        <li class="list-group-item"><strong>Adresse:</strong> {{$user->postalcode}}&nbsp;{{$user->city}}</li>
                        <li class="list-group-item"><strong>Kontakt email:</strong> {{$user->email}} </li>
                        <li class="list-group-item"><strong>Kontakt tlf:</strong> {{$user->phone}} </li>
                    </ul>
            </div>
           
        </div>    
    </div>

     
</main>
@endsection