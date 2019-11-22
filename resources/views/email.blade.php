@extends('layouts.master')

@section('content')

<main role="main">

		<div class="jumbotron jumbotron-fluid about">
			  <div class="container">
			    <h1 align="center" class="text-white">Klar på nye eventyr - campervans.dk</h1>
			  </div>
		</div>

		<div class="container pb-4" align="center">
			<div class="row justify-content-md-center">
    			<div class="col col-lg-8">
      				<h2>Kontakt os</h2>

						<p>Contact from enquery from: {{ $navn }}
						<p> Name: {{ $navn }} </p>
						<p> Email: {{ $email }} </p>
						<p> Message: {{ $besked }} </p>
						</p>
    			</div>
			</div>

		</div>	

</main>
@endsection		