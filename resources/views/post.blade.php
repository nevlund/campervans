@extends('layouts.master')

@section('content')
	<main role="main">
		<div class="container mt-4 pt-4">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">

					<h1>{{ $post->title }}</h1>
					<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
					<p>{!! $post->body !!}</p>

				</div>
			</div>
		</div>




	</main>	
@endsection