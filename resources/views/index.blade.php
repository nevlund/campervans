@extends('layouts.master')

@section('content')

<main role="main">
	<div class="row bg-white">
		<div class="container mt-4 pt-4 mb-4 pb-4">

			 <div class="row">
			    <div class="col-6">
				   <h1 class="primary">Find din næste autocamper her</h1>
				  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
				  <hr class="my-4">
				
				</div>
				<div class="col-6">
				      <img src="{{asset ('/')}}images/web-images/autocamper.jpg" alt="autocamper" width="500">
				</div>
			 </div>
			 <form>
				<div class="form-row">
				    <div class="col-3">
				      <select class="form-control">
				  			<option>Vælg kategori</option>
						</select>
				    </div>
				    <div class="col-3">
				      <select class="form-control">
				  			<option>Vælg mærke</option>
						</select>
				    </div>
				    <div class="col-3">
				      <select class="form-control">
				  			<option>Vælg model</option>
						</select>
				    </div>
				    <div class="col-3">
				    	<button type="submit" class="btn btn-secondary mb-2 darkgreen">Søg</button>
				    </div>
  				</div>
			</form>

     	</div>           
    </div>

     <div class="container mt-4 pt-4">
		<h2 align="center">Seneste annoncer</h2>
		<div class="row">
			
		@foreach($classifieds as $classified)
			<div class="col-md-3">
				<a href="/classifieds/{{$classified->id}}" class="secondary">
					<img src="{{asset ('/')}}images/listings/{{$classified->image}}" style="width:100%">
					<span>{{ $classified->title }}</span>
				</a>
			</div>
		@endforeach
		</div>
	</div>
    <!-- /.row -->
    <div class="container mt-4 pt-4">
		<h2 align="center">Tips & Inspiration</h2>
		<div class="row">
			
		@foreach($posts as $post)
			<div class="col-md-3">
				<a href="/post/{{ $post->slug }}">
					<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
					<span>{{ $post->title }}</span>
				</a>
			</div>
		@endforeach
		</div>
	</div>
    <!-- /.row -->

 </main>
 <!-- /.container -->


@endsection

