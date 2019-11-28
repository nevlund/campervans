@extends('layouts.admin')

@section('body')

      @if ($errors->any())
            <div class="alert alert-danger">
                <ul>

                    <li>{!! print_r($errors->all()) !!}</li>

                </ul>
            </div>
        @endif


<main role="main">

  <div class="row justify-content-center mt-4 pt-4">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                Opret annonce som: {{Auth::user()->name}}
              </div>  
  
              <div class="card-body">
                <form action="/createlisting" method="post" enctype="multipart/form-data">

                {{csrf_field()}}

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">Overskrift</label>

                    <div class="col-md-6">
                      <input type="text" class="form-control" name="title" id="title" placeholder="Overskrift" required>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="listcategory" class="col-md-4 col-form-label text-md-right">Kategori</label>

                  <div class="col-md-6">
                    <select name="listcategory_id" class="form-control" required>
                      <option value="0">Vælg venligst kategori</option>
                       @foreach($listcategories as $listcategory)
                       <option value="{{$listcategory['id']}}">{{$listcategory['name']}}</option>
                       @endforeach
                   </select>
                 </div>
                </div>

                <div class="form-group row">
                    <label for="brand" class="col-md-4 col-form-label text-md-right">Mærke</label>
                    <div class="col-md-6">
                      <select name="vehicle_id" class="form-control" required>
                        <option value="0">Vælg venligst mærke</option>
                         @foreach($vehicles as $vehicle)
                         <option value="{{$vehicle['id']}}">{{$vehicle['brand']}}</option>
                         @endforeach
                      </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">Beskrivelse</label>
                    <div class="col-md-6">
                      <textarea rows="4" cols="50" class="form-control" name="description" id="description" placeholder="Beskrivelse" required></textarea>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="year" class="col-md-4 col-form-label text-md-right">Årgang</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="year" id="year" placeholder="Årgang" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="color" class="col-md-4 col-form-label text-md-right">Farve</label>
                  <div class="col-md-6">
                    <select name="color" class="form-control" required>
                      <option value="0">Vælg venligst farve</option>
                      <option value="Hvid">Hvid</option>
                      <option value="Sort">Sort</option>
                      <option value="Rød">Rød</option>
                      <option value="Blå">Blå</option>
                      <option value="Gul">Gul</option>
                      <option value="Grøn">Grøn</option>
                      <option value="Grå">Grå</option>
                    </select>
                 </div>
                </div>
                <div class="form-group row">
                  <label for="fueltype" class="col-md-4 col-form-label text-md-right">Drivkraft</label>
                  <div class="col-md-6">
                    <select name="fueltype" class="form-control" required>
                      <option value="0">Vælg venligst drivkraft</option>
                      <option value="Benzin">Benzin</option>
                      <option value="Diesel">Diesel</option>
                      <option value="El">El</option>
                      <option value="Hybrid">Hybrid</option>
                    </select>
                  </div>
                </div>

                 <div class="form-group row">
                    <label for="price" class="col-md-4 col-form-label text-md-right">Pris</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control" name="price" id="price" placeholder="Pris" required>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="image" class="col-md-4 col-form-label text-md-right">Primær billede</label>
                  <div class="col-md-6">
                    <input type="file" name="image" accept="image/*">
                  </div>
                </div> 

                <div class="form-group row">
                  <input type="hidden" class="form-control" name="user_id" id="user_id" placeholder="Bruger ID" value="{{Auth::user()->id}}">
                </div> 

                <div class="form-group row">
                   <div class="col-md-6 offset-md-4">
                      <input type="submit" class="btn btn-secondary" name="submit" id="submit" value="Opret annonce">
                    </div>
                </div>
            </form>
          </div>
       </div> 
    </div>
  </div>    
</main>
@endsection  
