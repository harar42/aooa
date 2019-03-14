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
                    <div class="card card-image" style="background-image: url({{ $item->image }});height: 300px;">

                        <!-- Content -->
                        <div class="text-white text-center d-flex align-items-center rgba-indigo-light py-5 px-4">
                            <div>
                                <h5 class="white-text"><strong>{{ $item->category }}</strong></h5>
                                <h3 class="card-title pt-2"><strong>{{ $item->nom }}</strong></h3>
                                <p>{{ $item->description }}</p>
                                <a href="{{route('partners.show',['id' => $item->id ])}}" class="btn btn-indigo"><i class="fas fa-clone left"></i> Voir les deals</a>
                            </div>
                        </div>

                    </div>
                    <!-- Card -->
                </div>
            @endforeach

        </div>


@endsection