@extends('layouts.master')

@section('content')

<main role="main">
	<div class="row bg-white">
		<div class="container mt-4 pt-4 mb-4 pb-4">

			 <div class="row h-100">
			    <div class="col-6 align-self-center">
				  <h1 class="primary">Find din næste autocamper her</h1>
				  <span class="lead align-middle">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</span>
				  
				
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
				    <div class="col-3 text-right">
				    	<button type="submit" class="btn btn-secondary mb-2 darkgreen">Søg</button>
				    </div>
  				</div>
			</form>

     	</div>           
    </div>

     <div class="container mt-4 pt-4">
		<h2 align="center" class="pb-4">Seneste annoncer</h2>
		<div class="row">
			
			@foreach($ads as $ad)
			<div class="col-md-3 d-flex">
				<div class="card-deck">
					  <div class="card">
					    <img class="card-img-top" src="{{asset ('/')}}images/listings/{{$ad->image}}" alt="seneste annoncer" style="height:50%">
						    <div class="card-body h-25">
						      <h5 class="card-title">{{ $ad->title }}</h5>
						    </div>
						    <div class="card-footer bg-transparent">
						      <small><span class="primary">Kr. {{ $ad->price }},-</span>
						      	<span class="float-right"><a href="/ads/{{$ad->id}}" class="secondary stretched-link">Læs mere</a></span></small>
						    </div>
					  </div>
				</div>
			</div>
			@endforeach
			<div class="col-md-12 mt-4">
				<p class="text-center"><a href="{{ route('annoncer') }}" class="btn btn-secondary">Se alle annoncer</a>
			</div>
		</div>
	</div>	
    <!-- /.row -->
    <div class="container mt-4 pt-4">
		<h2 align="center" class="pb-4">Tips & Inspiration</h2>
		<div class="row">		
		@foreach($posts as $post)
			<div class="col-md-3 d-flex">
				<div class="card-deck">
					<div class="card">
						<a href="/post/{{ $post->slug }}">
						<img src="{{asset ('/')}}images/posts/{{$post->image}}" style="width:100%"></a>
						<div class="card-body h-25">
						<small> {{ $post->created_at }}</small>	
						<h5><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h5>
						</div>
					</div>
				</div>
			</div>
		@endforeach
			<div class="col-md-12 mt-4">
				<p class="text-center"><a href="blog/" class="btn btn-secondary">Se alle tips</a>
			</div>
		</div>
	</div>
    <!-- /.row -->

 </main>
 <!-- /.container -->


@endsection

