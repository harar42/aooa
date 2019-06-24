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
    {{--<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">--}}

    <link rel="shortcut icon" type="image/png" href="{{ asset('images/homepage/favicon-96x96.png') }}" />
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
                        <strong>Accueil</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link heather-color" href="#avantages" data-offset="100">
                        <strong>Avantages</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link heather-color" href="#deals" data-offset="100">
                        <strong>Deals</strong>
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
                    <span class="mr-4">
                        SUIVEZ NOUS
                     <a class="ins-ic" href="https://www.instagram.com/p/BzDVxUvoh-9/?igshid=wkyz99enm47q" target="_blank">
                        <i class="fab fa-instagram fa-lg "> </i>
                    </a>
                    </span>

                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md " data-dismiss="modal">Close</button>

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
        <section id="about">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center">Pourquoi HOOWA</h2>
            <hr class="hr-pink my-4">
            <p class="lead grey-text text-center w-responsive mx-auto ">
                Hoowa est un concept innovant autour d’une économie solidaire et sociale.
               La plateforme Hoowa permet à toute personne physique ou morale commerçante ou non d’accéder à des services divers où chacun trouve un intérêt
                Hoowa crée un réseau de partenariats entre commerçants et adhérents à travers sa plateforme qui poursuit plusieurs objectifs.</p>


            <p class="lead grey-text text-center w-responsive mx-auto ">
                D’une part, tout d’abord, celui de faire profiter toute personne à la recherche d’économies et qui désire bénéficier d’offres promotionnelles notamment.
                Ensuite, la plateforme de partage permet aux professionnels commerçants de faire la promotion de leurs produits et services.
            </p>

            <p class="lead grey-text text-center w-responsive mx-auto mb-5 pb-3">
                Ainsi, la plateforme Hoowa proposera des partenariats divers, de toute nature, des offres promotionnelles, des bons d’achat, etc...
            </p>

            <h2 class="h1-responsive font-weight-bold text-center mt-5">Pour les partenaires</h2>
            <hr class="hr-pink my-3 mb-5">

            <!-- Grid row -->
            <div class="row mb-5">

                <!-- Grid column -->
                <div class="col-md-6 mb-md-0 mb-md-5">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-lg-2 col-md-3 col-2">
                            {{--<i class="fas fa-wifi orange-pastel fa-2x"></i>--}}
                            <i class="fas fa-map-marker-alt orange-pastel fa-2x"></i>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-10 col-md-9 col-10">
                            <h4 class="font-weight-bold orange-pastel  mb-3">Pub gratuite</h4>
                            <p class="grey-text">
                                Les partenaires bénéficient de la plateforme Hoowa pour faire la promotion gratuite de leur entreprise.
                                Ils pourront également profiter d’un système de géolocalisation et d’une meilleure visibilité de leur entreprise grâce à la plateforme Hoowa.
                                Les partenaires professionnels qui auront adhéré au projet en réglant une cotisation, pourront obtenir de nombreux avantages en termes de promotion, et de financement participatif.
                                Cependant, ils seront tenus d’assurer certaines contreparties.

                            </p>
                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 mb-md-0 mb-5">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-lg-2 col-md-3 col-2">
                            {{--<i class="fas fa-coffee blue-pastel fa-2x"></i>--}}
                            <i class="fas fa-hand-holding-usd blue-pastel fa-2x"></i>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-10 col-md-9 col-10">
                            <h4 class="font-weight-bold blue-pastel mb-3">Émergence de projets</h4>
                            <p class="grey-text">
                                Hoowa met en place sur sa plateforme un financement solidaire ouvert à toute entreprise nouvelle ou non qui aurait besoin de fonds.
                                Une partie du financement participatif et solidaire sera prélevé directement sur les cotisations des adhérents et la générosité de tout ceux qui suivent de près ou de loin le concept Hoowa.


                                L’objet de ce concept novateur est donc de toucher un grand nombre de personnes, particuliers ou professionnels, qui souhaitent faire la promotion de leurs produits et services mais également profiter des diverses promotions.
                                {{--Ces avantages leur permettront, in fine, de faire des économies grâce à une réduction par exemple de leur budget marketing, d’avoir une nouvelle clientèle et donc une possibilité d’augmentation de leur chiffre d’affaires.--}}

                                {{--De plus, les partenaires adhérents bénéficient d'un impacte direct sur les charges de l'entreprise.--}}

                            </p>
                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </div>
                <!-- Grid column -->

                {{--<!-- Grid column -->--}}
                {{--<div class="col-md-4">--}}

                    {{--<!-- Grid row -->--}}
                    {{--<div class="row">--}}

                        {{--<!-- Grid column -->--}}
                        {{--<div class="col-lg-2 col-md-3 col-2">--}}
                            {{--<i class="far fa-grin-beam green-pastel fa-2x"></i>--}}
                        {{--</div>--}}
                        {{--<!-- Grid column -->--}}

                        {{--<!-- Grid column -->--}}
                        {{--<div class="col-lg-10 col-md-9 col-10">--}}
                            {{--<h4 class="font-weight-bold green-pastel">Réseau d'entrepreneurs</h4>--}}
                            {{--<p class="grey-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis--}}
                                {{--praesentium--}}
                                {{--voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate--}}
                                {{--non provident,--}}
                                {{--similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>--}}
                        {{--</div>--}}
                        {{--<!-- Grid column -->--}}

                    {{--</div>--}}
                    {{--<!-- Grid row -->--}}

                {{--</div>--}}
                {{--<!-- Grid column -->--}}

            </div>
            <!-- Grid row -->



        </section>
        <!-- Section: About Us -->

        <!-- Section: Offer -->
        <section id="avantages" class="mb-5">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center">Pour les adhérents</h2>
            <hr class="hr-pink my-3">
            <p class="lead grey-text text-center w-responsive mx-auto mb-5 pb-3">
                Hoowa propose à ses clients adhérents de profiter de promotions tout au long de l’année grâce à son réseau de partenaires, mais aussi d'obtenir des cadeaux en bon d'achat.
                Plus nombreux seront les partenaires et adhérents, plus les avantages seront multiples et variés.
            </p>

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
                            {{--<i class="fas fa-book-open purple-pastel fa-2x"></i>--}}
                            {{--<i class="fas fa-map-marker-alt purple-pastel fa-2x"></i>--}}
                            <i class="far fa-eye purple-pastel fa-2x"></i>

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
                            {{--<i class="fas fa-wifi green-pastel fa-2x"></i>--}}
                            <i class="far fa-smile green-pastel fa-2x"></i>
                        </div>
                        <div class="col-md-11 col-10">
                            <h5 class="font-weight-bold green-pastel mb-2">Sastifait ou Remboursé </h5>
                            <p class="grey-text"> Garantie de remboursement en cas de non-respect de l'avantage proposé par les partenaires.</p>
                        </div>
                    </div>
                    <!-- Grid row -->

                    <!-- Grid row -->
                    <div class="row">
                        <div class="col-md-1 col-2">
                            <i class="fas fa-dollar-sign orange-pastel fa-2x"></i>
                            {{--<i class="far fa-clock orange-pastel fa-2x"></i>--}}
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
                            {{--<i class="fas fa-gem fa-2x pink-pastel"></i>--}}
                            <i class="fas fa-hands-helping fa-2x pink-pastel"></i>
                        </div>
                        <div class="col-md-11 col-10">
                            <h5 class="font-weight-bold pink-pastel mb-2">Parrainage</h5>
                            <p class="grey-text">
                                Parrainage 1 €/ filleul une seule fois .
                                5 filleuls/mois × 12 mois = 60 € .
                                Selon votre motivation possibilité de rembourser son abonnement voir plus

                            </p>
                        </div>
                    </div>
                    <!-- Grid row -->

                    <!-- Grid row -->
                    <div class="row mb-lg-0 mb-5">
                        <div class="col-md-1 col-2">
                            {{--<i class="fas fa-utensils fa-2x navy-blue-color"></i>--}}
                            <i class="fas fa-file-contract fa-2x navy-blue-color"></i>
                        </div>
                        <div class="col-md-11 col-10">
                            <h5 class="font-weight-bold navy-blue-color mb-2">Conditions d'adhésions</h5>
                            <p class="grey-text mb-0">
                                Un minimum de partenaires par secteur ou ville <br>
                                Règlement du coût de l'adhésion de 4,99 €/mois ou 59 € l'année.<br>
                                Ou simplement aimer le concept 😊<br>

                                Pour devenir membre !

                                Envoyez nous votre nom, prénom, votre photo ou photo de votre choix ( pour votre carte de membre virtuel ) et un RIB à Hoowa.contact@gmail.com


                                Instagram : Hoowa_eco

                            </p>
                        </div>
                    </div>
                    <!-- Grid row -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-6" >
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
        <section id="deals" class="mb-5 pb-5">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center">Deals</h2>
            <hr class="hr-pink my-3">
            <p class="lead grey-text text-center w-responsive mx-auto mb-5 pb-3">Deals : des avantages pouvant aller de 10 à 50 %, voir plus selon l’impact du concept </p>

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
                    @if(count($errors) > 0)
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
                        <button class="btn btn-outline-purple-pastel btn-rounded btn-block z-depth-0 mx-0 my-4 waves-effect" type="submit">Envoyer</button>

                    </form>
                    <!-- Form -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-7" style="margin-top: -4rem;">

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
<footer class="page-footer font-small " style="background-color: #0085e3">

    <!-- Footer Links -->
    <div class="container">

        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5 mb-3">

            <!-- Grid column -->
            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#about" data-offset="100">
                        Accueil
                    </a>
                </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#avantages">Avantages</a>
                </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#deals">Deals</a>
                </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#temoignages">Temoignages</a>
                </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#contact">Contact</a>
                </h6>
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="{{route('faq')}}">FAQ / CGV / CGU</a>
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
                <p style="line-height: 1.7rem">Hoowa est un concept innovant autour d’une économie solidaire et sociale.
                    La plateforme Hoowa permet à toute personne physique ou morale commerçante ou non d’accéder à des services divers où chacun trouve un intérêt
                    Hoowa crée un réseau de partenariats entre commerçants et adhérents à travers sa plateforme qui poursuit plusieurs objectifs.</p>
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

                    <!--Pinterest-->
                    <a class=" mr-4 text-white font-weight-bold">
                        SUIVEZ NOUS
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic" href="https://www.instagram.com/p/BzDVxUvoh-9/?igshid=wkyz99enm47q" target="_blank">
                        <i class="fab fa-instagram fa-lg white-text "> </i>
                    </a>


                </div>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row-->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> Hoowa.fr</a>
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
