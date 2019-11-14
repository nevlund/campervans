@extends('layouts.master')

@section('content')

<main role="main">
	
   		<div class="jumbotron jumbotron-fluid">
		  <div class="container lg-8" align="center">
		    <h1>Tips & inspiration</h1>
		    <p class="lead">Det er en kendsgerning, at man bliver distraheret af læsbart indhold på en side, når man betragter dens layout. Meningen med at bruge Lorem Ipsum er, at teksten indeholder mere eller mindre almindelig tekstopbygning i modsætning til "Tekst her - og mere tekst her", mens det samtidigt ligner almindelig tekst.</p>
		  </div>
		</div>

		<div class="container">
   	
		<br><br>
		<h2 class="pb-4" align="center">Inspiration til rejsemål med autocamperen</h2>
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

