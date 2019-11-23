@extends('layouts.master')

@section('content')
	<main role="main">
		<div class="jumbotron jumbotron-fluid about">
			  <div class="container">
			    <h1 align="center" class="text-white">{{ $post->title }}</h1>
			  </div>
		</div>
		<div class="container mt-4 pt-4">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">

					<h3>{{ $post->title }}</h3>
					<small>Oprettet: {{ $post->created_at }}</small>
					<p>{!! $post->body !!}</p>

				</div>
				<div class="col-md-4 col-md-offset-2 pt-4 mt-4">

					<img src="{{asset ('/')}}images/posts/{{$post->image}}" style="width:100%">

				</div>
			</div>
		</div>




	</main>	
@endsection