@extends('layouts.admin')

@section('body')


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

        {{$classifieds->links()}}

    </div>
@endsection