@extends('layouts.master')

@section('content')

<main role="main">

<div class="container mt-4 pt-4 mb-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                  <form class="form-horizontal" role="form">
                    {{csrf_field()}}
                    <div class="form-row">
                        <div class="col-3">
                          <select class="form-control dynamic" id="listcategory" data-dependent="vehicle">
                            <option value="">Kategori</option>
                            @foreach($listcategories as $listcategory)
                            <option value="{{$listcategory['name']}}">{{$listcategory['name']}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-3">
                          <select class="form-control dynamic" id="vehicle">
                            <option value="">Mærke</option>
                              @foreach($vehicles as $vehicle)
                              <option value="{{$vehicle['brand']}}">{{$vehicle['brand']}}</option>
                              @endforeach
                          </select>
                        </div>
                        <div class="col-3">
                          <input type="search" class="form-control" id="searchForm" placeholder="tekst søgning">
                        </select>
                        </div>
                        <div class="col-3 text-right">
                          <button type="submit" class="btn btn-secondary mb-2 darkgreen">Søg</button>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>              
</div>
<div class="container mt-4 pt-4 mb-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Seneste annoncer') }}</div>

                <div class="card-body">

                  <table class="table table-striped table-borderless table-hover">
                     
                    <thead>
                      <tr class="border-bottom">
                        <th scope="col">&nbsp;</th>
                        <th scope="col">Beskrivelse</th>
                        <th scope="col">Årgang</th>
                        <th scope="col">Farve</th>
                        <th scope="col">Drivkraft</th>
                        <th scope="col" class="text-right">Pris</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($ads as $ad)
                      <tr class="mt-2 mb-2 bg-white border-bottom">
                        <th scope="row"><img src="{{asset ('/')}}images/listings/{{$ad->image}}" width="100"></th>
                        <td><h6><a href="/ads/{{$ad->id}}" class="secondary">{{$ad->title}}</a></h6>
                          <br><a href="/ads/{{$ad->id}}" class="secondary">Læs mere</a></td>
                        <td>{{$ad->year}}</td>
                        <td>{{$ad->color}}</td>
                        <td>{{$ad->fueltype}}</td>
                        <td class="text-right">Kr. {{$ad->price}},-</td>
                      </tr>
                      </tbody>
                      @endforeach
                  </table>
                </div>  
              </div>
            </div>
          </div>
        </div>
    
    <div class="container mt-4 mb-4">  
        <div class="col-md-12 secondary">{{ $ads->links() }}</div>
    </div>    
</main>
@endsection