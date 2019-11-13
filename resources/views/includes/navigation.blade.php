
<nav class="navbar navbar-expand-lg navbar-fixed-top navbar-light bg-white border-none box-shadow py-3">
            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="card-img-top" src="{{asset ('/')}}images/web-images/logo-header.png" alt="forside">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto align-right">
                <li class="nav-item">

                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">Om os</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="">Tips</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">Kontakt</a>
                </li>

                @guest
                    <li class="nav-item px-2 ml-4">
                        <a class="nav-link btn btn-outline-secondary" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link btn btn-register" href="{{ route('register') }}">{{ __('Opret annonce') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown ml-4">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="">Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>

                @endguest
            </ul>
        </div>
    </div>
</nav>








