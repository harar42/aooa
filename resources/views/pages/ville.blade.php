@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <h2 class="mb-5">Partenaires à {{ mb_strtoupper($ville)  }}</h2>
        </div>
        <div class="row mb-5">

            @foreach($datas as $item)
                <div class="col-md-4 mb-3">
                    <!-- Card -->
                    <div class="card card-image m-md-3 " style="background-image: url({{ asset('images/partners/'.$item->image) }});height: 350px;">

                        <!-- Content -->
                        <div class="text-white text-center d-flex align-items-center rgba-black-light py-5 px-4" style="height: 350px;">
                            <div>
                                <h5 class="yellow-text"><strong>{{ $item->category }}</strong></h5>
                                <h3 class="card-title pt-2"><strong>{{ $item->nom }}</strong></h3>
                                <p>{{ $item->description }}</p>
                                <a href="{{route('partners.show',['id' => $item->id ])}}" class="btn btn-danger"><i class="fas fa-clone left"></i> Voir les deals</a>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>


@endsection