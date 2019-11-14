@extends('layouts.master')

@section('content')

<div class="jumbotron jumbotron-fluid about">
	<div class="container">
		<h1 align="center" class="text-white">Kontakt os</h1>
	</div>
</div>

<div class="container pt-4 mt-4">

  <div class="row">
    <div class="col-sm">
		 <h2>Kontakt os</h2>

		@if(Session::has('success'))
		   <div class="alert alert-success">
		     {{ Session::get('success') }}
		   </div>
		@endif

		{!! Form::open(['route'=>'contact.store']) !!}

		<div class="form-group {{ $errors->has('navn') ? 'has-error' : '' }}">
		    {!! Form::label('Navn:') !!}
		    {!! Form::text('navn', old('navn'), ['class'=>'form-control', 'placeholder'=>'Navn']) !!}
		<span class="text-danger">{{ $errors->first('navn') }}</span>
		</div>

		<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
		    {!! Form::label('Email:') !!}
		    {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Email']) !!}
		<span class="text-danger">{{ $errors->first('email') }}</span>
		</div>

		<div class="form-group {{ $errors->has('besked') ? 'has-error' : '' }}">
		    {!! Form::label('Besked:') !!}
		    {!! Form::textarea('besked', old('besked'), ['class'=>'form-control', 'placeholder'=>'Besked']) !!}
		<span class="text-danger">{{ $errors->first('besked') }}</span>
		</div>

		<div class="form-group">
		<button class="btn btn-secondary">Send besked</button>
		</div>

		{!! Form::close() !!}

	</div>
	    <div class="col-sm pt-4 mt-4">
	      <p>Det er en kendsgerning, at man bliver distraheret af læsbart indhold på en side, når man betragter dens layout. Meningen med at bruge Lorem Ipsum er, at teksten indeholder mere eller mindre almindelig tekstopbygning i modsætning til "Tekst her - og mere tekst her", mens det samtidigt ligner almindelig tekst.</p><p> Mange layoutprogrammer og webdesignere bruger Lorem Ipsum som fyldtekst. En søgning på Lorem Ipsum afslører mange websider, som stadig er på udviklingsstadiet. Der har været et utal af variationer, som er opstået enten på grund af fejl og andre gange med vilje (som blandt andet et resultat af humor).</p>
	    </div>
  </div>
</div>




@endsection