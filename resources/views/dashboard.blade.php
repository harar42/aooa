@extends('app')

@section('content')
    <div class="container mt-5">

        <div class="row mb-5">
            <div class="col-lg-6 col-md-12">
                <a href="{{route('partners.create')}}" class="btn pink font-weight-bold"> Créer un partenaire</a>
                <a href="{{route('categories.create')}}" class="btn pink font-weight-bold"> Créer une catégorie</a>

            </div>
        </div>
        <div class="row">

            <!-- First column -->

            <div class="col-lg-6 col-md-12">

                <!--Panel-->
                <div class="card mb-4">
                    <div class="card-header white-text pink">
                        Les derniers partenaires
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table">

                                <thead>

                                <tr>
                                    <th class="font-weight-bold dark-grey-text">Nom</th>
                                    <th class="font-weight-bold dark-grey-text">Adresse</th>
                                    <th class="font-weight-bold dark-grey-text">Ville</th>
                                </tr>
                                </thead>

                                    <tbody>
                                    @foreach($partners as $partner)

                                        <tr>
                                        <td>
                                            {{$partner->nom}}
                                        </td>
                                        <td>
                                            {{$partner->adresse}}
                                        </td>
                                        <td>
                                            {{$partner->ville}}
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                            <a href="{{route('partners.index')}}"  class="btn btn btn-flat grey lighten-3 btn-rounded waves-effect font-weight-bold dark-grey-text float-right">Liste des partenaires </a>
                        </div>

                    </div>
                </div>
                <!--/.Panel-->

                <!-- Panel -->

                <div class="card mb-4">
                    <div class="card-header white-text pink">
                        Les derniers deals
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table">

                                <thead>
                                <tr>
                                    <th class="font-weight-bold dark-grey-text">Title</th>
                                    <th class="font-weight-bold dark-grey-text">Description</th>
                                    <th class="font-weight-bold dark-grey-text">Promotion</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($deals as $deal)
                                    <tr>
                                        <td>
                                            {{$deal->title}}
                                        </td>
                                        <td>
                                            {{$deal->description}}
                                        </td>
                                        <td>
                                            {{$deal->promotion}}
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach

                            </table>
                            <a href="{{route('partners.index')}}"  class="btn btn btn-flat grey lighten-3 btn-rounded waves-effect font-weight-bold dark-grey-text float-right">Liste des deals </a>

                        </div>

                    </div>
                </div>

                <!-- /.Panel -->

            </div>

            <!-- /.First column -->

            <div class="col-lg-6 col-md-12">

                <!--Panel-->
                <div class="card mb-4">
                    <div class="card-header white-text pink">
                       Liste des categories
                    </div>
                    <div class="card-body">

                        {{--<div class="row mb-1">--}}
                            @foreach($categories as $categorie)

                            <div class="chip indigo lighten-5">
                               {{$categorie->nom}}
                            </div>

                            @endforeach

                        {{--</div>--}}
                        <a href="{{route('categories.index')}}"  class="btn btn btn-flat grey lighten-3 btn-rounded waves-effect font-weight-bold dark-grey-text float-right">Liste des categories </a>

                    </div>
                </div>
                <!--/.Panel-->

                <!-- Panel -->
                <div class="card mb-4 text-center py-3 red accent-2 white-text">
                    <i class="fa fa-bell fa-3x mb-3"></i>
                    <h4 class="h4-responsive">28 important messages</h4>
                </div>
                <!-- /.Panel -->

                <!--Section: Intro-->
                <section class="mt-lg-5">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6 mb-4">

                            <!--Panel-->
                            <div class="card">
                                <div class="card-header white-text grey darken-1">
                                    Orders
                                </div>

                                <h6 class="ml-4 pt-4 mt-1 dark-grey-text font-weight-bold"><i class="fa fa-long-arrow-up blue-text mr-3" aria-hidden="true"></i> 2000</h6>
                                <!--/.Card Data-->

                                <!--Card content-->
                                <div class="card-body">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <!--Text-->
                                    <p class="font-small grey-text">Better than last week (25%)</p>
                                </div>
                                <!--/.Card content-->

                            </div>
                            <!--/.Panel-->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class=" col-md-6 mb-4">

                            <!--Panel-->
                            <div class="card">
                                <div class="card-header white-text warning-color">
                                    Monthly sales
                                </div>

                                <h6 class="ml-4 pt-4 mt-1 dark-grey-text font-weight-bold"><i class="fa fa-long-arrow-up blue-text mr-3" aria-hidden="true"></i> $ 2000</h6>
                                <!--/.Card Data-->

                                <!--Card content-->
                                <div class="card-body">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <!--Text-->
                                    <p class="font-small grey-text">Better than last week (25%)</p>
                                </div>
                                <!--/.Card content-->

                            </div>
                            <!--/.Panel-->

                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </section>

                <!-- Second column -->


                <!-- /.Second column -->

            </div>

            <!-- /.Second row -->

        </div>

@endsection
