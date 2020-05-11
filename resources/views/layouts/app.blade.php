<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FreshStart - @yield('title')</title>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script>
    
          $(function() {
              $(".toggle").on("click", function() {
                  if ($(".item").hasClass("active")) {
                      $(".item").removeClass("active");
                  } else {
                      $(".item").addClass("active");
                  }
              });
          });
    
        </script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     {{-- Favicons --}}
     <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('icons/apple-icon-57x57.png') }}">
     <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('icons/apple-icon-60x60.png') }}">
     <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('icons/apple-icon-72x72.png') }}">
     <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('icons/apple-icon-76x76.png') }}">
     <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('icons/apple-icon-114x114.png') }}">
     <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('icons/apple-icon-120x120.png') }}">
     <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('icons/apple-icon-144x144.png') }}">
     <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('icons/apple-icon-152x152.png') }}">
     <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icons/apple-icon-180x180.png') }}">
     <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('icons/android-icon-192x192.png') }}">
     <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icons/favicon-32x32.png') }}">
     <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('icons/favicon-96x96.png') }}">
     <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/favicon-16x16.png') }}">
     <link rel="manifest" href="/manifest.json">
     <meta name="msapplication-TileColor" content="#ffffff">
     <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
     <meta name="theme-color" content="#ffffff">
       
    {{-- Osano Cookie consent --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
</head>
<body>
    <div id="app">
        <header class="showcase">
        <div class="container">
        <nav>

            {{-- <h1 class="logo">FreshStart Psychotherapy</h1> --}}

            <div class="nav-logo">
                <a href="/"><img class="logo-image" src="{{ asset('img/logo-ochre-sm.jpg') }}" alt=""></a>
            </div>

            <div class="toggle-item">
              <li class="toggle">
                <i class="fa fa-bars"></i>
                {{-- <span class="bars"></span> --}}
              </li>

            </div>

            <div class="nav-items">
            <ul class="menu">
          
                    <li class="item">
                        <a class="" href="/about">About</a>
                    </li>

                    <li class="item">
                        <a class="" href="/ourpeople">Our people</a>
                    </li>

                    <li class="item">
                        <a class="" href="/fees">Fees</a>
                    </li>

                    <li class="item">
                        <a class="" href="/events">Events</a>
                    </li>


                    <li class="item">
                        <a class="" href="/contact">Contact</a>
                    </li>

                    <!-- Authentication Links -->
                    @guest
                        <li hidden class="item">
                            <a class="nav-link d-none" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="item">
                            <a href="#" aria-haspopup="true" aria-expanded="false" v-pre>
                                Add content
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" aria-haspopup="true" aria-expanded="false" v-pre>
                                User Management
                            </a>
                        </li>
                        
                        <li class="item">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        </li>
                    @endguest
                </ul>
            </div>

        </nav>
    </header>
</div>

        <main class="main-body py-2">
            @include('partials.alerts')
            @yield('content')
        </main>
        
@section('footer')
<footer class="footer">
    <div class="container footer-container">

            <div class="footer-content">            
                <p><strong>FreshStart Psychotherapy</strong></p>
                <p>020 7691 7638</p>
                <p><a href="mailto:enquiries@freshstartpsychotherapy.co.uk">enquiries@freshstartpsychotherapy.co.uk</a></p>  
            </div>

            <div class="footer-content">
                <a href="/gdpr"><img class="social-icon" src="{{ asset('img/privacy.png') }}" alt="Privacy icon"></a>
            </div>

            <div class="footer-content">
                <p>Designed and developed by <a href="https://chillaweb.com/">ChillaWeb</a></p>
            </div>


        </nav>

    </div>
  </footer>

</div>

<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#eaf7f7",
      "text": "#5c7291"
    },
    "button": {
      "background": "#56cbdb",
      "text": "#ffffff"
    }
  },
  "content": {
    "href": "http://127.0.0.1:8000/gdpr"
  }
});
</script>

</body>
</html>
@show
</body>
</html>
