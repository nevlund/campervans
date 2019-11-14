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
      				<h2>Om Campervans.dk</h2>

						<p>Det er en kendsgerning, at man bliver distraheret af læsbart indhold på en side, når man betragter dens layout. Meningen med at bruge Lorem Ipsum er, at teksten indeholder mere eller mindre almindelig tekstopbygning i modsætning til "Tekst her - og mere tekst her", mens det samtidigt ligner almindelig tekst. Mange layoutprogrammer og webdesignere bruger Lorem Ipsum som fyldtekst. En søgning på Lorem Ipsum afslører mange websider, som stadig er på udviklingsstadiet. Der har været et utal af variationer, som er opstået enten på grund af fejl og andre gange med vilje (som blandt andet et resultat af humor).
						</p>
    			</div>
			</div>

		</div>	
		<div class="container">

			<div class="card-deck">
			  <div class="card">
			    <img src="{{asset ('/')}}images/web-images/employee.jpg" class="card-img-top" alt="employee Chris Hansen">
			    <div class="card-body">
			      <h5 class="card-title">Chris Hansen</h5>
			      <p class="card-text">Det er en kendsgerning, at man bliver distraheret af læsbart indhold på en side, når man betragter dens layout. Meningen med at bruge Lorem Ipsum er, at teksten indeholder mere eller mindre almindelig tekstopbygning.</p>
			    </div>
			    <div class="card-footer">
			      <small class="text-muted"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i>&nbsp;<i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i></small>
			    </div>
			  </div>
			  <div class="card">
			    <img src="{{asset ('/')}}images/web-images/employee-two.jpg" class="card-img-top" alt="employee Chris Hansen">
			    <div class="card-body">
			      <h5 class="card-title">James Jensen</h5>
			      <p class="card-text">Det er en kendsgerning, at man bliver distraheret af læsbart indhold på en side, når man betragter dens layout. Meningen med at bruge Lorem Ipsum er, at teksten indeholder mere eller mindre almindelig tekstopbygning.</p>
			    </div>
			    <div class="card-footer">
			      <small class="text-muted"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i>&nbsp;<i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i>
					</small>
			    </div>
			  </div>
			  <div class="card">
			    <img src="{{asset ('/')}}images/web-images/employee-three.jpg" class="card-img-top" alt="employee Chris Hansen">
			    <div class="card-body">
			      <h5 class="card-title">Sara Pedersen</h5>
			      <p class="card-text">Det er en kendsgerning, at man bliver distraheret af læsbart indhold på en side, når man betragter dens layout. Meningen med at bruge Lorem Ipsum er, at teksten indeholder mere eller mindre almindelig tekstopbygning.</p>
			    </div>
			    <div class="card-footer">
			      <small class="text-muted"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i>&nbsp;<i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i></small>
			    </div>
			  </div>
			  <div class="card">
			    <img src="{{asset ('/')}}images/web-images/employee-four.jpg" class="card-img-top" alt="employee Chris Hansen">
			    <div class="card-body">
			      <h5 class="card-title">Niels Lund</h5>
			      <p class="card-text">Det er en kendsgerning, at man bliver distraheret af læsbart indhold på en side, når man betragter dens layout. Meningen med at bruge Lorem Ipsum er, at teksten indeholder mere eller mindre almindelig tekstopbygning.</p>
			    </div>
			    <div class="card-footer">
			      <small class="text-muted"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i>&nbsp;<i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i></small>
			    </div>
			  </div>
			</div>

		</div>	
</main>



@endsection

