@extends('layouts.admin')

@section('body')

    @if(Auth::user()->name == "Admin") 

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th></th>
                <th></th>
                <th>Beskrivelse</th>
                <th>Pris</th>
                <th>Rediger</th>
                <th>Slet</th>
            </tr>
            </thead>
            <tbody>

            @foreach($classifieds as $classified)

           
                <tr>
                    <td>{{$classified['id']}}</td>
                    <td><img src="{{asset ('/')}}images/listings/{{$classified->image}}" alt="{{asset ('/')}}images/listings/{{$classified->image}}" width="100" height="100" style="max-height:220px" ></td>
                    <td><strong>{{$classified['title']}}</strong>:<br>
                    {{$classified['description']}}</td>
                    <td>Kr. {{$classified['price']}}</td>
                     <td><a href="{{ route('adminEditListing',['id' => $classified['id'] ])}}" class="btn btn-primary">Rediger</a></td>
            <td><a href="{{ route('deleteListing',['id' => $classified['id']])}}"  class="btn btn-warning">Slet</a></td>
                    
                </tr>
           

            @endforeach


            </tbody>
        </table>
    </div>
    @else 
        <div class="container mt-4 pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Annoncer</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    Du har ikke oprettet nogen annoncer.
                </div>  
            </div>
        </div>
    </div>
</div>

    @endif
@endsection