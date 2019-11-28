<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      

    <title>@yield('title')</title>

   <script type="text/javascript">
  $(function(){
    $('.nav a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
    $('.nav a').click(function(){
      $(this).parent().addClass('active').siblings().removeClass('active')  
    })
  })
  </script> 
  </head>

  @include('includes.navigation')
  <body class="app sidebar-show">

  <div class="app-body">
    <div class="sidebar bg-transparent text-dark pt-4 mt-4 pl-4">
      <!-- Sidebar content here -->
      <ul class="nav flex-column list-group">
        <li class="nav-item active">
            <a class="nav-link text-dark" href="{{ route('home') }}">Kontrolpanel</a>
        </li>

        <li class="nav-item">

            <a class="nav-link text-dark" href="{{ route('edit_user') }}">Rediger profil</a>

        </li>

        <li class="nav-item">
            <a class="nav-link text-dark" href="{{ route('visannoncer') }}">Vis annoncer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="{{ route('create') }}">Opret annonce</a>
        </li>
      </ul>  
    </div>
    <main class="main">
      <!-- Main content here -->
      @yield('body')
      
    </main>
   
  </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, Bootstrap, then CoreUI  -->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
  </body>
</html>