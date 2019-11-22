@extends('layouts.master')

@section('content')

<div class="jumbotron jumbotron-fluid about">
	<div class="container">
		<h1 align="center" class="text-white">Kontakt os</h1>
	</div>
</div>

	@if(Session::has('success'))
		<div class="alert alert-success">
		     {{ Session::get('success') }}
		</div>
	@endif


<div class="container pt-4 mt-4">

  <div class="row">
    <div class="col-md-6">
		 <div class="col">
          <h3 class="panel-title">Kontakt os</h3>
         </div>
		<form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
	     {{csrf_field()}}
		<div class="col">
			<div class="form-group">
				<input type="text" class="form-control" name="navn" id="navn" placeholder="Navn" required>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<input type="text" class="form-control" name="email" id="email" placeholder="E-mail" required>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<textarea class="form-control" name="besked" id="besked" cols="50" rows="4" placeholder="Besked"></textarea> 
			</div>
		</div>
		<div class="col">
			<div class="form-group">
			<button class="btn btn-secondary">Send besked</button>
			</div>
		</div>
		</form>
	</div> 			
	<div class="col-md-6 pt-3 mt-4">
	      <div class="clear-both"><h5>Campervans.dk</h5></div>
	      <div class="clear-both">Stormgade 67</div>
	      <div>6700 Esbjerg</div>
	      <div>Tlf: (+45) 90909090</div>
	      <div>E-mail: hello@campervans.dk</div>
	  		
	</div>
  </div>
</div>




@endsection