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
    <link href="{{ asset('/Mdbootstrap/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/Mdbootstrap/css/addons/datatables.min.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="/">
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
                        <a class="nav-link" href="/">ACCEUIL
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    @if(Auth::check())
                        @if (Auth::user()->isAdmin())
                            <li class="nav-item active">
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

        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
    <!-- Footer -->
    <footer class="page-footer font-small gradient darken-3">

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
                        <!-- Twitter -->
                        <a class="tw-ic">
                            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <!-- Google +-->
                        <a class="gplus-ic">
                            <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <!--Linkedin -->
                        <a class="li-ic">
                            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic">
                            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <!--Pinterest-->
                        <a class="pin-ic">
                            <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
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
            <a href="https://mdbootstrap.com/education/bootstrap/"> AOOA.fr</a>
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
        $('#dtMaterialDesignExample').DataTable();
        $('#dtMaterialDesignExample_wrapper').find('label').each(function () {
            $(this).parent().append($(this).children());
            $(this).html('Nombre d\'entrees');
        });
        $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('input').each(function () {
            $('input').attr("placeholder", "Rechercher");
            $('input').removeClass('form-control-sm');
        });
        $('#dtMaterialDesignExample_wrapper .dataTables_length').addClass('d-flex flex-row');
        $('#dtMaterialDesignExample_wrapper .dataTables_filter').addClass('md-form');
        $('#dtMaterialDesignExample_wrapper select').removeClass(
            'custom-select custom-select-sm form-control form-control-sm');
        $('#dtMaterialDesignExample_wrapper select').addClass('mdb-select');
        $('#dtMaterialDesignExample_wrapper .mdb-select').materialSelect();
        $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('label').remove();
    });
</script>

</body>
</html>
