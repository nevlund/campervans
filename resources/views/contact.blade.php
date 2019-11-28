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

		<div class="container"> 	
            <div class="card-deck">
            	<div class="col-md-8">
					<div class="card">
		                	<div class="card-header">{{ __('Kontakt os') }}</div>

		                	<div class="card-body">
								<form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
							     {{csrf_field()}}
									
									
									
									<div class="form-group row">
										<label for="name" class="col-md-2 col-form-label text-md-right">Navn</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="navn" id="navn" placeholder="Navn" required>
										</div>	
									</div>
									
				
									<div class="form-group row">
										<label for="email" class="col-md-2 col-form-label text-md-right">E-mail</label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="email" id="email" placeholder="E-mail" required>
										</div>	
									</div>
			
				
									<div class="form-group row">
										<label for="message" class="col-md-2 col-form-label text-md-right">Besked</label>
										<div class="col-md-8">
											<textarea class="form-control" name="besked" id="besked" cols="50" rows="4" placeholder="Besked"></textarea>
										</div>	 
									</div>
									<div class="form-group row">
										<div class="col-md-6 offset-md-2">
											<button class="btn btn-secondary">Send besked</button>
										</div>	
									</div>
								</form>
							</div>
					</div>		    
				</div>
            	
				<div class="col-md-4">
					<div class="card">
	                	<div class="card-header">{{ __('Kontakt information') }}</div>
							<div class="card-body">
	
							      <h5>Campervans.dk</h5>
							      Stormgade 67<br>
							      6700 Esbjerg<br>
							      Tlf: (+45) 90909090<br>
							      E-mail: hello@campervans.dk
							</div>
					</div>		    
				</div>
			</div>
		</div>	
		
	




@endsection