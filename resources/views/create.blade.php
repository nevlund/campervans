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

  <div class="container mt-4 pt-4">
    <div class="row">
      <div class="col-md-6">
  
        <div class="col">
          <h3 class="panel-title">Opret annonce</h3>
        </div>
        <div class="col mt-2 mb-2">
         <form action="/createlisting" method="post" enctype="multipart/form-data">

            {{csrf_field()}}


          <div class="col">

            <div class="form-group">
                <label for="title">Overskrift</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Overskrift" required>
            </div>

            <div class="form-group">
                <select name="category_id" class="form-control">
                 
                 <option value="1">Autocamper</option>
                 
             </select>
            </div>

            <div class="form-group">
                <label for="description">Beskrivelse</label>
                <textarea rows="4" cols="50" class="form-control" name="description" id="description" placeholder="Beskrivelse" required></textarea>
            </div>
            <div class="form-group">
                <label for="price">Pris</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Pris" required>
            </div>

            <div class="form-group">
                <select name="condition" class="form-control">
                   <option value="0">Vælg stand</option>
                   <option value="Ny">Ny</option>
                   <option value="Brugt">Brugt</option>
                </select>
            </div>
            <div class="form-group">
              <label for="image">Primær billede</label>
              <input type="file" name="image" accept="image/*">
            </div>  
    
          </div>
       </div> 
    </div>
    <div class="row col-md-6 pt-4 mt-3">
      <div class="col"> 

         <div class="form-group">
                <label for="user_id">Bruger ID</label>
                <input type="text" class="form-control" name="user_id" id="user_id" placeholder="Bruger ID" value="{{Auth::user()->id}}" required>
          </div>
          <div class="form-group">
                <label for="location">Område</label>
                <input type="text" class="form-control" name="location" id="location" placeholder="Område" required>
          </div>
          <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
          </div>
          <div class="form-group">
                <label for="phone">Tlf.</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Tlf">
          </div>
          <div class="form-group">
                <input type="submit" class="btn btn-secondary" name="submit" id="submit" value="Opret annonce">
          </div>
      </div>  
    </div>    
  </div>

</main>
@endsection  
