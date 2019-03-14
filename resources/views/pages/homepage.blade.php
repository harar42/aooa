<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AOOA') }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/Mdbootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('/Mdbootstrap/css/mdb.min.css') }}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    {{--<link href="{{ asset('/Mdbootstrap/css/style.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('/Mdbootstrap/css/addons/datatables.min.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark indigo">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="/" target="_blank">
                <strong>AOOA</strong>
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">ACCEUIL
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://mdbootstrap.com/docs/jquery/" target="_blank">Qui sommes nous</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank">Prestations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://mdbootstrap.com/education/bootstrap/" target="_blank">Free tutorials</a>
                    </li>
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

        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
    <!-- Footer -->
    <footer class="page-footer font-small indigo">

        <!-- Footer Links -->
        <div class="container">

            <!-- Grid row-->
            <div class="row text-center d-flex justify-content-center pt-5 mb-3">

                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="#!">About us</a>
                    </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="#!">Products</a>
                    </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="#!">Awards</a>
                    </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="#!">Help</a>
                    </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="#!">Contact</a>
                    </h6>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->
            <hr class="rgba-white-light" style="margin: 0 15%;">

            <!-- Grid row-->
            <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

                <!-- Grid column -->
                <div class="col-md-8 col-12 mt-5">
                    <p style="line-height: 1.7rem">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->
            <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

            <!-- Grid row-->
            <div class="row pb-3">

                <!-- Grid column -->
                <div class="col-md-12">

                    <div class="mb-5 flex-center">

                        <!-- Facebook -->
                        <a class="fb-ic">
                            <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic">
                            <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
                        </a>
                        <!-- Google +-->
                        <a class="gplus-ic">
                            <i class="fab fa-google-plus-g fa-lg white-text mr-4"> </i>
                        </a>
                        <!--Linkedin -->
                        <a class="li-ic">
                            <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic">
                            <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
                        </a>
                        <!--Pinterest-->
                        <a class="pin-ic">
                            <i class="fab fa-pinterest fa-lg white-text"> </i>
                        </a>

                    </div>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
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
    });
</script>



</body>
</html>
