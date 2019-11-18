@extends('layouts.admin')

@section('body')
<div class="container mt-4 pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kontrolpanel</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    Du er nu logget ind som: {{ Auth::user()->name }}!
                </div>
                <div class="card-body">
                    Brugernavn: {{ Auth::user()->email }}<br>
                    Rolle id: {{ Auth::user()->role_id }}


                </div>    
            </div>
        </div>
    </div>
</div>
@endsection
