@extends('app')

@section('content')
    <div class="container p-4 mt-5">
        <div class="row justify-content-center">
                <h2 class="mb-5 text-uppercase">Partenaires autour de vous </h2>
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
                                <a href="<?php echo "https://www.waze.com/ul?ll=".$item->latitude."%2C".$item->latitude."&navigate=yes&zoom=17" ?>" class="btn btn-sm  btn-success"><i class="fas fa-car"></i> J'y vais</a>

                            </div>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>





@endsection