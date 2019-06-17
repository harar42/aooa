<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}
<!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/Mdbootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('/Mdbootstrap/css/mdb.min.css') }}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    {{--<link href="{{ asset('/Mdbootstrap/css/style.css') }}" rel="stylesheet">--}}

    {{--<link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.ico') }}" />--}}
    <title>HOOWA</title>

</head>
<!-- Main navigation -->
<body class="coworking-page">
<!-- Main navigation -->
<style>

    .coworking-page .heather-color {
        color: #AB9CB1!important;
    }
    /*!*.coworking-page .navbar .navbar-brand {*!*/
        /*!*line-height: 1.1;*!*/
        /*!*letter-spacing: -1px;*!*/
    /*!*}*!*/

    .coworking-page .pink-pastel {
        color: #f900ef;
    }
    .coworking-page .purple-pastel {
        color: #7f00ee;
    }

    .coworking-page .intro .container-fluid .heading {
        /*!*letter-spacing: -4px;*!*/
        /*!*line-height: 1;*!*/
        color: #2B428B;
    }

    /*.coworking-page .intro .container-fluid .subheading {*/
        /*color: #AB9CB1;*/
        /*letter-spacing: -1px;*/
        /*line-height: 1.3;*/
    /*}*/
    .coworking-page .btn-outline-purple-pastel {
        border: 2px solid #00c46d;
        background-color: #00c46d;
        color: white;

    }
    .btn.btn-md {
        /*padding: .7rem 1.6rem;*/
        font-size: .7rem;
    }

    .coworking-page .hr-pink {
        width: 40px;
        border-top: 3px solid #f900ef;
    }

    .coworking-page .grey-pastel {
        color: #AB9CB1;
    }

    .coworking-page .green-pastel {
        color: #00c46d;
    }
    .coworking-page .orange-pastel {
        color: #ff7157;
    }
    .coworking-page .blue-pastel {
        color: #0085e3;
    }
    .coworking-page .navy-blue-color {
        color: #392466;
    }

</style>
<header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg scrolling-navbar navbar-light z-depth-0 fixed-top white ml-md-4 mr-md-3 mb-5">
        <a class="navbar-brand purple-pastel" href="">
            <img class="mr-5" src="{{ asset('images/homepage/hoowa-logo.png') }}" width="100" style="display: inline-block">

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto text-uppercase smooth-scroll">
                <li class="nav-item">
                    <a class="nav-link heather-color" href="#about" data-offset="100">
                        <strong>Acceuil</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link heather-color" href="#avantages" data-offset="100">
                        <strong>Avantages</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link heather-color" href="#temoignages" data-offset="100">
                        <strong>Témoignages</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link heather-color" href="#contact" data-offset="100">
                        <strong>Contact</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pt-1" href="#contact" >
                        <button type="button" class="btn btn-outline-blue btn-rounded btn-md z-depth-0 m-0 pt-2">Devenir partenaire <i class="fas fa-angle-double-right"></i></button>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Intro -->
    <section class="view intro">

        <div class="container-fluid">

            <div class="row d-flex justify-content-center align-items-center h-100 mx-md-5">

                <div class="col-lg-4 col-xl-5 col-flex mt-lg-0 pt-lg-4 mt-5 pt-5">

                    <h1 class="heading font-weight-bold display-3 mb-4">Bienvenue sur HOOWA <br
                                    class="d-block d-md-none d-lg-block d-xl-none"></h1>
                    <h5 class="grey-pastel mb-xl-4 pb-xl-0 mb-md-3 pb-md-3 mb-4"><strong> Réseau de partenariats entre professionnels, commerçants et adhérents .</strong></h5>
                    <div class="mr-auto">
                        <button type="button" class="btn blue-gradient btn-rounded ml-0" data-toggle="modal" data-target="#modal1">Voir la video</button>
                    </div>

                </div>

                <div class="col-lg-8 col-xl-7 pt-lg-4">

                    <div class="view">
                        <img src="{{ asset('images/homepage/16544.jpg') }}" class="img-fluid" alt="smaple image">
                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- Intro -->
    <!--Modal: Name-->
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">

            <!--Content-->
            <div class="modal-content">

                <!--Body-->
                <div class="modal-body mb-0 p-0">

                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <video class="video-fluid z-depth-1"  src="{{ asset('images/homepage/about.mp4') }}" loop controls >
                            <source src="{{ asset('images/homepage/about.mp4') }}" type="video/mp4" />
                        </video>
                    </div>
                    {{--<div class="embed-responsive embed-responsive-16by9 z-depth-1-half">--}}
                        {{--<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A3PDXmYoF5U"--}}
                                {{--allowfullscreen></iframe>--}}
                    {{--</div>--}}

                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center blue-pastel pink-pastel">
                    <span class="mr-4">Présentation Hoowa</span>
                    <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                    <!--Twitter-->
                    <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                    <!--Linkedin-->
                    <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                </div>

            </div>
            <!--/.Content-->

        </div>
    </div>
    <!--Modal: Name-->
</header>
<!-- Main navigation -->

<!-- Main layout -->
<main>

    <div class="container">

        <!-- Section: About Us -->
        <section id="about" class="mb-5 pb-5">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center">Pourquoi HOOWA</h2>
            <hr class="hr-pink my-3">
            <p class="lead grey-text text-center w-responsive mx-auto mb-5 pb-3">HOOWA offre à ses utilisateurs une pléthore d'avantages.
                Que ce soit pour les partenaires,commercants,artisans ou les adhérents, tout le monde en profite</p>

            <h2 class="h1-responsive font-weight-bold text-center mt-5">Pour les partenaires</h2>
            <hr class="hr-pink my-3 mb-5">

            <!-- Grid row -->
            <div class="row mb-5">

                <!-- Grid column -->
                <div class="col-md-4 mb-md-0 mb-5">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-lg-2 col-md-3 col-2">
                            <i class="fas fa-wifi orange-pastel fa-2x"></i>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-10 col-md-9 col-10">
                            <h4 class="font-weight-bold orange-pastel">Pub gratuite</h4>
                            <p class="grey-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque laudantium,
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                                sunt explicabo.
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 mb-md-0 mb-5">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-lg-2 col-md-3 col-2">
                            <i class="fas fa-coffee blue-pastel fa-2x"></i>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-10 col-md-9 col-10">
                            <h4 class="font-weight-bold blue-pastel">Émergence de projets</h4>
                            <p class="grey-text">Possibilité de mettre en place une enveloppe participative via “Cotizup” ou plein d'autres plateformes collaboratives .</p>
                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-lg-2 col-md-3 col-2">
                            <i class="far fa-grin-beam green-pastel fa-2x"></i>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-10 col-md-9 col-10">
                            <h4 class="font-weight-bold green-pastel">Réseau d'entrepreneurs</h4>
                            <p class="grey-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                praesentium
                                voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                                non provident,
                                similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->



        </section>
        <!-- Section: About Us -->

        <!-- Section: Offer -->
        <section id="avantages" class="mb-5">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center">Pour les adhérents</h2>
            <hr class="hr-pink my-3">
            <p class="lead grey-text text-center w-responsive mx-auto mb-5 pb-3">Duis aute irure dolor in reprehenderit in
                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit.</p>

            <!-- Grid row -->
            <div class="row mb-lg-0 mb-5">

                <!-- Grid column -->
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <div class="view">
                        <img src="{{ asset('images/homepage/2362425.jpg') }}" class="img-fluid"  alt="smaple image">
                    </div>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-6">

                    <!-- Grid row -->
                    <div class="row mb-3">
                        <div class="col-md-1 col-2">
                            <i class="fas fa-book-open purple-pastel fa-2x"></i>
                        </div>
                        <div class="col-md-11 col-10">
                            <h5 class="font-weight-bold purple-pastel mb-2">Visibilité</h5>
                            <p class="grey-text">Accès et informations sur les commerces de proximité ou avoisinant, offrant des remises ou réductions (garantis par Hoowa).</p>
                        </div>
                    </div>
                    <!-- Grid row -->

                    <!-- Grid row -->
                    <div class="row mb-3">
                        <div class="col-md-1 col-2">
                            <i class="fas fa-wifi green-pastel fa-2x"></i>
                        </div>
                        <div class="col-md-11 col-10">
                            <h5 class="font-weight-bold green-pastel mb-2">Sastifait ou Remboursé </h5>
                            <p class="grey-text">Garantie de remboursement en cas de non respect du partenaire, concernant l’avantage propos.</p>
                        </div>
                    </div>
                    <!-- Grid row -->

                    <!-- Grid row -->
                    <div class="row">
                        <div class="col-md-1 col-2">
                            <i class="far fa-clock orange-pastel fa-2x"></i>
                        </div>
                        <div class="col-md-11 col-10">
                            <h5 class="font-weight-bold orange-pastel mb-2">Développement économique</h5>
                            <p class="grey-text mb-0">Avoir un rôle actif dans le développement de l'économie de son quartier.</p>
                        </div>
                    </div>
                    <!-- Grid row -->

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-6">

                    <!-- Grid row -->
                    <div class="row mb-3">
                        <div class="col-md-1 col-2">
                            <i class="fas fa-users fa-2x blue-pastel"></i>
                        </div>
                        <div class="col-md-11 col-10">
                            <h5 class="font-weight-bold blue-pastel mb-2">Solidarité</h5>
                            <p class="grey-text">Participer à une action de solidarité (participation collectée sur la cotisation).</p>
                        </div>
                    </div>
                    <!-- Grid row -->

                    <!-- Grid row -->
                    <div class="row mb-3">
                        <div class="col-md-1 col-2">
                            <i class="fas fa-gem fa-2x pink-pastel"></i>
                        </div>
                        <div class="col-md-11 col-10">
                            <h5 class="font-weight-bold pink-pastel mb-2">Développement d'un réseau</h5>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing. Reprehenderit maiores nam,
                                aperiam minima elit assumenda voluptate velit.</p>
                        </div>
                    </div>
                    <!-- Grid row -->

                    <!-- Grid row -->
                    <div class="row mb-lg-0 mb-5">
                        <div class="col-md-1 col-2">
                            <i class="fas fa-utensils fa-2x navy-blue-color"></i>
                        </div>
                        <div class="col-md-11 col-10">
                            <h5 class="font-weight-bold navy-blue-color mb-2">Développement d'un réseau</h5>
                            <p class="grey-text mb-0">Le concept du réseau permet la rencontre entre professionnels de même secteur mais aussi la
                                rencontre avec de nouvelles relations qui peuvent être utiles aux activités commerciales des uns et des autres (la liste des partenaires étant exhaustive et extrêmement variée (commerces de proximité, voyages, assurances, mécaniciens, juridiques...)).</p>
                        </div>
                    </div>
                    <!-- Grid row -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-6" style="margin-top: -6rem;">
                    <div class="view">
                        <img src="{{ asset('images/homepage/15252.jpg') }}" class="img-fluid" alt="smaple image">
                    </div>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </section>
        <!-- Section: Offer -->

        <!-- Section: Articles -->
        <section id="articles" class="mb-5 pb-5">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center">Deals</h2>
            <hr class="hr-pink my-3">
            <p class="lead grey-text text-center w-responsive mx-auto mb-5 pb-3">Des deals offrant de 10 à 90% de réduction sur les restaurants, salles de sport, voyages, le shopping, la beauté, les spas, les cadeaux et bien plus encore..</p>

            <!-- Grid row -->
            <div class="row text-center mb-5">

                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                    <!--Featured image-->
                    <div class="view overlay rounded z-depth-1">
                        <img src="{{ asset('images/homepage/voyages.jpeg') }}" class="img-fluid"
                             alt="Sample project image">
                        <a>
                            <div class="mask rgba-white-slight flex-center waves-effect waves-light ">
                                <p class="white-text">VOYAGE</p>
                            </div>
                        </a>
                    </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                    <!--Featured image-->
                    <div class="view overlay rounded z-depth-1">
                        <img src="{{ asset('images/homepage/bureaux.jpeg') }}" class="img-fluid"
                             alt="Sample project image">
                        <a>
                            <div class="mask rgba-white-slight flex-center waves-effect waves-light">
                                <p class="white-text">FORMATION</p>

                            </div>
                        </a>
                    </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4 col-md-6">
                    <!--Featured image-->
                    <div class="view overlay rounded z-depth-1">
                        <img src="{{ asset('images/homepage/burger.jpeg') }}" class="img-fluid"
                             alt="Sample project image">
                        <a>
                            <div class="mask rgba-white-slight flex-center waves-effect waves-light">
                                <p class="white-text">RESTAURANT</p>

                            </div>
                        </a>
                    </div>
                </div>
                <!-- Grid column -->
            </div>

            <!-- Grid row -->
            <div class="row text-center">

                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                    <!--Featured image-->
                    <div class="view overlay rounded z-depth-1">
                        <img src="{{ asset('images/homepage/docteur.jpg') }}" class="img-fluid"
                             alt="Sample project image">
                        <a>
                            <div class="mask rgba-white-slight flex-center waves-effect waves-light">
                                <p class="white-text">MÉDECINE</p>

                            </div>
                        </a>
                    </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                    <!--Featured image-->
                    <div class="view overlay rounded z-depth-1">
                        <img src="{{ asset('images/homepage/sport.jpg') }}" class="img-fluid"
                             alt="Sample project image">
                        <a>
                            <div class="mask rgba-white-slight flex-center waves-effect waves-light">
                                <p class="white-text">SPORT</p>
                            </div>
                        </a>
                    </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4 col-md-6">
                    <!--Featured image-->
                    <div class="view overlay rounded z-depth-1">
                        <img src="{{ asset('images/homepage/finance.jpg') }}" class="img-fluid"
                             alt="Sample project image">
                        <a>
                            <div class="mask rgba-white-light flex-center waves-effect waves-light">
                                <p class="white-text">FINANCE</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
            <div class="row text-center justify-content-center mt-5">
                <a href="{{ route('home') }}" class="btn btn-success btn-lg"><i class="fas fa-clone left"></i> Voir tous les deals </a>
            </div>
        </section>
        <!-- Section: Articles -->
            <!--<hr class="mt-5 mb-5">-->

            <!-- Section: Testimonials v.3 -->
            <section  id="temoignages" class="team-section text-center my-5">

                <!-- Section heading -->
                <h2 class="h1-responsive font-weight-bold my-5">Témoignages </h2>
                <hr class="hr-pink my-3">

                <!-- Section description -->
                <!--<p class="dark-grey-text w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.-->
                <!--Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam-->
                <!--eum porro a pariatur veniam.</p>-->

                <!--Grid row-->
                <div class="row text-center">

                    <!--Grid column-->
                    <div class="col-md-4 mb-md-0 mb-5">

                        <div class="testimonial">
                            <!--Avatar-->
                            <!--<div class="avatar mx-auto">-->
                            <!--<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" class="rounded-circle z-depth-1 img-fluid">-->
                            <!--</div>-->
                            <!--Content-->
                            <h4 class="font-weight-bold dark-grey-text my-4">Catherine D.</h4>
                            <!--<h6 class="font-weight-bold blue-text my-3">Web Designer</h6>-->
                            <p class="font-weight-normal dark-grey-text">
                                <i class="fas fa-quote-left pr-2"></i>Hoowa, concept nouveau et pratique, avec des réductions toute l'année
                            </p>
                            <!--Review-->
                            <div >
                                <i class="fas fa-star yellow-text"> </i>
                                <i class="fas fa-star yellow-text"> </i>
                                <i class="fas fa-star yellow-text"> </i>
                                <i class="fas fa-star yellow-text"> </i>
                                <i class="fas fa-star yellow-text"> </i>
                            </div>
                        </div>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-md-0 mb-5">

                        <div class="testimonial">
                            <!--&lt;!&ndash;Avatar&ndash;&gt;-->
                            <!--<div class="avatar mx-auto">-->
                            <!--<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg" class="rounded-circle z-depth-1 img-fluid">-->
                            <!--</div>-->
                            <!--Content-->
                            <h4 class="font-weight-bold dark-grey-text my-4">Hermann S.</h4>
                            <!--<h6 class="font-weight-bold blue-text my-3">Web Developer</h6>-->
                            <p class="font-weight-normal dark-grey-text">
                                <i class="fas fa-quote-left pr-2"></i>Excellente plateforme et simple pour son utilisation. Très bon concept  ! </p>
                            <!--Review-->
                            <div class="orange-text">
                                <i class="fas fa-star yellow-text"> </i>
                                <i class="fas fa-star yellow-text"> </i>
                                <i class="fas fa-star yellow-text"> </i>
                                <i class="fas fa-star yellow-text"> </i>
                                <i class="fas fa-star yellow-text"> </i>
                            </div>
                        </div>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4">

                        <div class="testimonial">
                            <!--Avatar-->
                            <!--<div class="avatar mx-auto">-->
                            <!--<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle z-depth-1 img-fluid">-->
                            <!--</div>-->
                            <!--Content-->
                            <h4 class="font-weight-bold dark-grey-text my-4">Ibrahima K.</h4>
                            <!--<h6 class="font-weight-bold blue-text my-3">Photographer</h6>-->
                            <p class="font-weight-normal dark-grey-text">
                                <i class="fas fa-quote-left pr-2"></i>Génial comme application ! Simple et pratique.</p>
                            <!--Review-->
                            <div>
                                <i class="fas fa-star yellow-text"> </i>
                                <i class="fas fa-star yellow-text"> </i>
                                <i class="fas fa-star yellow-text"> </i>
                                <i class="fas fa-star yellow-text"> </i>
                                <i class="fas fa-star yellow-text"> </i>
                            </div>
                        </div>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>


        <!-- Section: Contact Us -->
        <section id="contact" class="mb-3">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center">Devenir partenaire</h2>
            <hr class="hr-pink my-3">
            <p class="lead grey-text text-center w-responsive mx-auto mb-5 pb-3">Vous souhaitez rejoindre le réseau de partenaires HOOWA, alors n'hesitez plus et remplissez le formulaire ci-dessous .</p>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-5 mb-lg-0 mb-4">

                    {{--<p class="text-center purple-pastel ml-lg-5"><strong>Make an appointment to get the best offer</strong></p>--}}
                    @if(count($errors) > 0))
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li> {{$error}}</li>
                            @endforeach
                        </ul>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if($message = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{$message}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                @endif

                    <!-- Form -->
                    <form method="post" action="{{action('HomeController@mail')}}" enctype="multipart/form-data"  class="text-center ml-lg-5">
                    @csrf

                        <!-- Name -->
                        <div class="md-form md-outline">
                            <input type="text" id="form-name" name="nom" class="form-control">
                            <label for="form-name">Nom ou Société</label>
                        </div>

                        <!-- Activité -->
                        <div class="md-form md-outline">
                            <input type="text" id="form-activity" name="activity" class="form-control">
                            <label for="form-activity">Secteur d'activité</label>
                        </div>

                        <!-- E-mail -->
                        <div class="md-form md-outline">
                            <input type="email" id="form-email" name="email" class="form-control">
                            <label for="form-email">E-mail</label>
                        </div>

                        <!-- Phone -->
                        <div class="md-form md-outline">
                            <input type="text" id="form-phone" name="phone" class="form-control">
                            <label for="form-phone">Téléphone</label>
                        </div>

                        <!--Message-->
                        <div class="md-form md-outline">
                            <textarea id="form-message" class="form-control md-textarea" name="message" rows="3"></textarea>
                            <label for="form-message">Message</label>
                        </div>

                        <!-- Send button -->
                        <button class="btn btn-outline-purple-pastel btn-rounded btn-block z-depth-0 mx-0 my-4 waves-effect" type="submit">Send</button>

                    </form>
                    <!-- Form -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-7" style="margin-top: -7rem;">

                    <div class="view">
                        <img src="https://mdbootstrap.com/img/illustrations/graphics(1).png" class="img-fluid" alt="smaple image">
                    </div>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </section>
        <!-- Section: Contact Us -->

    </div>

</main>
<!-- Main layout -->

<!-- Footer -->
<footer class="page-footer font-small  pt-2" style="background-color: #0085e3">
    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5" >

        <!-- Grid row -->
        <div class="row mt-3">

            <!-- Grid column -->
            <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4">

                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold">HOOWA</h6>
                <hr class="primary-color  mb-4 mt-0 d-inline-block mx-auto" style="width: 100px;">
                <p> Réseau de partenariats entre professionnels, commerçants et adhérents .</p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">BON PLANS</h6>
                <hr class="primary-color mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#!">Voyages</a>
                </p>
                <p>
                    <a href="#!">Sport</a>
                </p>
                <p>
                    <a href="#!">Médecine</a>
                </p>
                <p>
                    <a href="#!"> Bien-être</a>
                </p>


            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Contact</h6>
                <hr class="primary-color mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                {{--<p>--}}
                {{--<i class="fa  fa-home mr-3"></i> 2 Avenue du Régiment Normandie </p>--}}
                <p>
                    <i class="fa fa-envelope mr-3"></i> hoowa@gmail.com</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> 01.00.11.22.33</p>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe.
                     It's a separate element, as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
            <!-- don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <!--<button class="pswp__button pswp__button--share" title="Share"></button>-->

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader--active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--
                        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                            <div class="pswp__share-tooltip"></div>
                        </div>
                           -->

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

            </div>

        </div>

    </div>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href=""> hoowa.fr</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->



<!-- /Start your project here-->
<!-- JQuery -->
<script type="text/javascript" src="{{ asset('/Mdbootstrap/js/jquery-3.3.1.min.js') }}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{ asset('/Mdbootstrap/js/popper.min.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ asset('/Mdbootstrap/js/bootstrap.min.js') }}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{ asset('/Mdbootstrap/js/mdb.min.js') }}"></script>

<script>
    $('#modal1').on('hidden.bs.modal', function (e) {
        // do something...
        $('#modal1 video').attr("src", $("#modal1 video").attr("src"));
    });
</script>

</body>

</html>
