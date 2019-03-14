<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('/Mdbootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="{{ asset('/Mdbootstrap/css/mdb.min.css') }}" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="{{ asset('/Mdbootstrap/css/style.css') }}" rel="stylesheet">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">


    </head>

    <body>
    <!-- Navigation & Intro -->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
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
                            <a class="nav-link" href="https://mdbootstrap.com/education/bootstrap/" target="_blank">Team</a>
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
        <!-- Navbar -->

        <!-- Full Page Intro -->
        <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/93.jpg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                <!-- Content -->
                <div class="text-center white-text mx-5 wow fadeIn">
                    <h1 class="mb-4">
                        <strong>AOOA</strong>
                    </h1>

                    <p>
                        <strong>Boostez votre chiffre d’affaire GRATUITEMENT !!!</strong>
                    </p>

                    <p class="mb-4 d-none d-md-block">
                        <strong>AooA est une jeune structure innovante qui souhaite mettre en place des services pour les particuliers et pour les professionnels.</strong>
                    </p>

                    <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Start free tutorial
                        <i class="fas fa-graduation-cap ml-2"></i>
                    </a>
                </div>
                <!-- Content -->

            </div>
            <!-- Mask & flexbox options-->

        </div>
        <!-- Full Page Intro -->


    </header>
    <main class="">
        <div class="container-fluid">
            <!--Section: About-->
            <section id="about" class="section info-section   p-5">

                <!--First row-->
                <div class="row pt-5">

                    <!--First column-->
                    <div class="col-md-7 mb-2 smooth-scroll wow fadeIn" data-wow-delay="0.2s">

                        <!--Heading-->
                        <h2 class="mb-3 font-weight-bold">Nous fournissons des services de haute qualité</h2>
                        <!--Description-->
                        <h4 class="mb-5 dark-grey-text">Faites appel à nous.</h4>
                        <!--Content-->
                        <p class="grey-text" align="justify">My TAXI 91 est un réseau de taxi professionels desservant principalement le departement de l'Essonne.
                            Fort de notre expérience, nous sommes en mesures de proposer à nos clients des prestations haut de gamme  à petit prix accessibles 24H/24 et 7J/7, dans toute l’Ile-De-France.

                    </div>
                    <!--/First column-->

                    <!--Second column-->
                    <div class="col-lg-4 flex-center ml-lg-auto col-md-5 mb-5 wow fadeIn" data-wow-delay="0.3s">

                        <!--Image-->
                        <img src="chauffeur2.jpg" class="img-fluid z-depth-1">

                    </div>
                    <!--/Second column-->

                </div>
                <!--/First row-->

            </section>
        </div>
        <!--Section: About-->
        <!-- Streak -->
        <div class="streak streak-photo streak-md gradient" style="height: 250%;">
            <!--<div class="flex-center mask rgba-black-s">-->
            <div class="container-fluid">
                <div class="row py-md-3">
                    <div class="col-md-3 text-center">
                        <i class="far fa-smile white-text fa-5x p-4"></i>
                        <p class="white-text text-center font-weight-bold"> Clients satisfaits</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <i class="fas fa-briefcase-medical white-text fa-5x p-4"></i>
                        <p class="white-text  font-weight-bold"> Taxis conventionnés</p>


                    </div>
                    <div class="col-md-3 text-center" >
                        <i class="far fa-credit-card white-text fa-5x p-4"></i>
                        <p class="white-text text-center font-weight-bold"> Accepte tous types de paiments</p>

                    </div>
                    <div class="col-md-3 text-center">
                        <i class="fas fa-route white-text fa-5x p-4"></i>
                        <p class="white-text text-center font-weight-bold"> Trajets optimisés</p>

                    </div>
                </div>
            </div>

            <!--</div>-->
        </div>
        <!-- Streak -->

        @yield('content')
    </main>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="/Mdbootstrap/js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="/Mdbootstrap/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="/Mdbootstrap/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="/Mdbootstrap/js/mdb.min.js"></script>

    </body>
</html>
