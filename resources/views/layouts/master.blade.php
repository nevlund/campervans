<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <link href='https://fonts.googleapis.com/css?family=poppins' rel='stylesheet'>
     <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>

<body>

@include('includes.navigation')

@yield('content')

<!-- Footer -->
<footer class="bg-darkgreen py-lg-2 mt-5">

    <div class="container">
        <div class="row pt-4">
            <div class="col-6">
                <img src="{{asset ('/')}}images/web-images/logo-footer-white.png" alt="" width="150" class="py-2">
                <p class="text-light text-small">
                Campervans.dk er en online handelsportal<br> med fokus udelukkende på køb og salg af autocampere, <br>campervans samt campingvogne. </p>

            </div>
            <div class="col-3 py-2">
                <h6 class="text-light">Kontakt</h6>
                <ul class="list-unstyled text-small">
                    <p class="text-light text-small">
                     <li><a href="{{ route('login') }}">Kontakt os</a></a></li>
                    <li><a href="{{ route('register') }}">Support</a></li>
                    <li><a href="{{ route('register') }}">Privatlivspolitik</a></li>
                   
                </ul>
            </div>
            <div class="col-3 py-2">
                <h6 class="text-light">Annoncering</h6>
                <ul class="list-unstyled text-small">
                    <li><a href="{{ route('login') }}">Reklame annoncer</a></a></li>
                    <li><a href="{{ route('register') }}">Forhandler</a></li>
                </ul>
            </div>
 
        </div>
    </div>

</footer>

<footer class="bg-darkgreen footer py-2">
    <div class="container">
        <span class="text-white text-small">Copyright 2019. Campervans.dk </span><span class="float-right"><i class="fa fa-cc-visa text-muted"></i>&nbsp;<i class="fa fa-cc-mastercard text-muted"></i>
        <i class="fa fa-cc-amex text-muted fa-1x"></i></span>
    </div>
</footer>
</body>

</html>