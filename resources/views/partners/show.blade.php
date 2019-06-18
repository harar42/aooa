@extends('app')

@section('content')

    <div class="container p-3 mt-5">
        <div class="row">
            @if(Auth::check())
                @if (Auth::user()->isAdmin())
                    <div class="container">
                        <a class="btn btn-warning" href="{{route('create',['partner_id' => $partner->id])}}">CREER UN DEAL</a>
                    </div>
                @endif
            @endif
        </div>
        <div class="row justify-content-center mb-lg-5">
            <h1 class="text-center dark-grey-text pb-3">
                <strong> {{$partner->nom}}</strong></h1>
        </div>
        <div class="row justify-content-center mb-lg-5 mb-3">
            <p class="grey-text text-center">
                <em>{{$partner->description}}</em>
            </p>
        </div>

        <div class="row mb-5">

            @foreach($deals as $deal)
            <div class="col-md-4 mb-3">
                <!-- Card -->
                <div class="card card-image m-md-3 " style="background-image: url({{asset('images/deals/'.$deal->image)}});height: 350px;">

                    <!-- Content -->
                    <div class="text-white text-center d-flex align-items-center rgba-black-light py-5 px-4" style="height: 350px;">
                        <div>
                            <h5 class="yellow-text"><strong>{{ $partner->category }}</strong></h5>
                            <h3 class="card-title pt-2"><strong>{{ $deal->title }}</strong></h3>
                            <p>{{ $deal->description }}</p>
                            <p class="font-small font-weight-bold yellow-textΩ mb-1">
                                <i class="far fa-clock-o"></i> {{$deal->created_at}}</p>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach

        </div>
    </div>
@endsection