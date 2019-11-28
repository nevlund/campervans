@extends('layouts.admin')

@section('body')

    @if (count($ads)>0) 

<div class="container mt-4 pt-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Rediger annoncer') }}</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                        
                            <tbody>

                            @foreach($ads as $ad)

                           
                                <tr>
                                    <td class="align-middle">{{$ad['id']}}</td>
                                    <td><img src="{{asset ('/')}}images/listings/{{$ad->image}}" alt="{{asset ('/')}}images/listings/{{$ad->image}}" width="100" height="100" style="max-height:220px" ></td>
                                    <td class="align-middle"><strong>{{$ad['title']}}</strong></td>
                                    <td class="align-middle">Kr. {{$ad['price']}}</td>
                                    <td class="align-middle"><a href="{{ route('edit_ad',['id' => $ad['id'] ])}}" class="btn btn-secondary">Rediger</a></td>
                                    <td class="align-middle"><a href="{{ route('deleteListing',['id' => $ad['id']])}}"  class="btn btn-danger">Slet</a></td>
                                    
                                </tr>
                           

                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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