@extends('layouts.admin')

@section('body')


<main role="main">

  <div class="container mt-4 pt-4">
    <div class="row">
      <div class="col-md-6">
  
        <div class="col">
          <h3 class="panel-title">Opret annonce</h3>
        </div>
        <div class="col mt-2 mb-2">
         <form action="/admin/createlistingform" method="post" enctype="multipart/form-data">

          {{csrf_field()}}

          <div class="col">
             {!! Form::label('title', 'Overskrift') !!} 
             {!! Form::text('title', $value= null, $attributes = ['class' => 'form-control', 'name' => 'title']) !!}
          </div>
   
          
          <div class="form-group col mt-2 mb-2">
             {!! Form::label('category_id', 'Kategori') !!}
             <select name="category_id" class="form-control">
                 <option value="1">Autocamper</option>
             </select>
          </div>
          
          <div class="form-group col mt-2 mb-2">
             {!! Form::label('description', 'Beskrivelse') !!} 
             {!! Form::textarea('description', $value= null, $attributes = ['class' => 'form-control', 'name' => 'description']) !!}
          </div>
          
          <div class="form-group col mt-2 mb-2">
             {!! Form::label('price', 'Pris') !!} 
             {!! Form::text('price', $value= null, $attributes = ['class' => 'form-control', 'name' => 'price']) !!}
          </div>
          
          <div class="form-group col mt-2 mb-2">
          {!! Form::label('condition', 'Stand'); !!}
          {!! Form::select('condition', array(
            '0' => 'Vælg stand', 
            'New' => 'Ny', 
            'Like New' => 'Som ny',
            'Used' => 'Brugt',
            'Bad' => 'Dårlig',
            'Broken' => 'Itu'
          ), '0', $attributes = ['class' => 'form-control', 'name' => 'condition' ]) !!}
        </div>
        <div class="form-group col mt-2 mb-2">
          {!! Form::label('main_image', 'Primær billede'); !!}
          {!! Form::file('main_image', $attributes = ['class' => 'btn btn-default']); !!}
        </div>
       </div> 
    </div>
    <div class="row col-md-6 pt-4 mt-4">
      <div class="col"> 

        <h5>Sælger information</h5>
        
        
         <div class="form-group col mt-2 mb-2">
          {!! Form::label('user_id', 'Sælger ID'); !!}
          {!! Form::text('user_id', $value = Auth::user()->id , $attributes = ['class' => 'form-control', 'name' => 'user_id' ,'placeholder' => 'User ID']) !!}
        </div>    

         <div class="form-group col mt-2 mb-2">
          {!! Form::label('location', 'Område'); !!}
          {!! Form::text('location', $value = null , $attributes = ['class' => 'form-control', 'name' => 'location' ,'placeholder' => 'Område']) !!}
        </div>
        <div class="form-group col mt-2 mb-2">
          {!! Form::label('email', 'Email'); !!}
          {!! Form::text('email', $value = null , $attributes = ['class' => 'form-control', 'name' => 'email' ,'placeholder' => 'Email']) !!}
        </div>
        <div class="form-group col mt-2 mb-4">
          {!! Form::label('phone', 'Tlf. nr.'); !!}
          {!! Form::text('phone', $value = null , $attributes = ['class' => 'form-control', 'name' => 'phone' ,'placeholder' => 'Tlf. nr. (Valgfrit)']) !!}
        </div>
        {!! Form::submit('Opret', $attributes = ['class' => 'btn btn-secondary']); !!}
          {!! Form::close() !!}
        </div>
      </div>  
    </div>    
  </div>

</main>
@endsection  
