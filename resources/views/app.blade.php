<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HOOWA') }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/Mdbootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('/Mdbootstrap/css/mdb.min.css') }}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{ asset('/Mdbootstrap/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/Mdbootstrap/css/addons/datatables.min.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg scrolling-navbar navbar-light z-depth-0 fixed-top white mb-5 gradient">
        <a class="navbar-brand purple-pastel" href="{{route('welcome')}}">
            <img class="mr-5" src="{{ asset('images/homepage/hoowa-logo.png') }}" width="100" style="display: inline-block">

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto text-uppercase smooth-scroll">

                @if(Auth::check())
                    @if (Auth::user()->isAdmin())
                        <li class="nav-item active left">
                            <a class="nav-link" href="/dashboard">DASHBOARD
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    @endif
                @endif
            </ul>
            <!-- Right -->
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">S'identifier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">S'inscrire</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-uppercase" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="ml-3 caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                Deconnexion
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
    <!-- Navbar -->


    <main class="py-4 mt-5">
        @yield('content')
    </main>
    <!-- Footer -->
    <footer class="page-footer font-small  darken-3 gradient">

        <!-- Footer Elements -->
        <div class="container">

            <!-- Grid row-->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-12 py-5">
                    <div class="mb-5 flex-center">

                        <!-- Facebook -->
                        <a class="fb-ic">
                            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic">
                            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>

                    </div>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright :
            <a href="https://mdbootstrap.com/education/bootstrap/"> HOOWA.fr</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
</div>
<!-- JQuery -->
<script type="text/javascript" src="/Mdbootstrap/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="/Mdbootstrap/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="/Mdbootstrap/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="/Mdbootstrap/js/mdb.min.js"></script>
<script type="text/javascript" src="/Mdbootstrap/js/addons/datatables.min.js"></script>

{{--<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>--}}

<script>
    $(document).ready(function () {
        $('.mdb-select').materialSelect();

        $('#demo').attr("href", "http://www.aooa.test/geolocation/42.5/2.3");
            // if (navigator.geolocation) { //check if geolocation is available
            //     navigator.geolocation.getCurrentPosition(function(position){
            //         console.log(position);
            //     });
            // }

    });

</script>



</body>
</html>
