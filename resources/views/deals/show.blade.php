@extends('app')

@section('content')



    <!--Intro-->
    <section>
        <div class="container-fluid mt-5">

            <!--Excerpt-->
            <br>
            @foreach($partner as $item)
            <h1 class="text-center dark-grey-text pb-3">
                <strong> {{$item->nom}}</strong></h1>

            <p class="grey-text text-center mb-4 text-uppercase spacing">Welcome on my blog. </p>

            <!--Grid row-->
            <div class="row flex-center">

                <!--Grid column-->
                <div class="col-md-10 col-xl-5">

                    <p class="grey-text text-center">
                        <em>{{$item->description}}</em>
                    </p>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        @endforeach
        </div>
    </section>
    <!--/Intro-->

    <!--Blog section-->
    <section>

        <div class="container-fluid grey lighten-4">
            <hr class="my-5">
            <div class="container">

                <!--Blog-->
                <div class="row mt-5 pt-3">

                    <!--Main listing-->
                    <div class="col-lg-8 col-12 mt-1 mx-lg-4">

                        <!--Section: Blog v.3-->
                        <section class="section extra-margins pb-3 text-center text-lg-left">
                            <!--Grid row-->
                                <div class="row mb-4">

                                    <!--Grid column-->
                                    <div class="col-md-12">
                                        <!--Card-->
                                        <div class="card">

                                            <!--Card image-->
                                            <div class="view overlay">
                                                <img src="" class="card-img-top" alt="">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                            <!--/.Card image-->

                                            <!--Card content-->
                                            <div class="card-body mx-4">
                                                <!--Title-->
                                                <h4 class="card-title">
                                                    <strong>{{$deal->title}}</strong>
                                                </h4>
                                                <hr>
                                                <!--Text-->
                                                <p class="dark-grey-text mb-3">{{$deal->description}}
                                                </p>
                                                <p class="font-small font-weight-bold blue-grey-text mb-1">
                                                    <i class="far fa-clock-o"></i> 27/08/2017</p>
                                            </div>
                                            <!--/.Card content-->

                                        </div>
                                        <!--/.Card-->

                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--/Grid row-->
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section: Blog v.3-->
@endsection