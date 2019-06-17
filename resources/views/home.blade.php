@extends('app')

@section('content')

<div class="container p-4 mt-5">
    <div class="row">

        <div class=" col-md-4"></div>
        <div class="col-md-4 text-center"> <h2 class="mb-5">LES VILLES</h2></div>
        <div class="col-md-4"></div>
    </div>
        <div class="card col-12">
            <div class="card-body">
                <div class="row mb-5">

                @foreach($villes as $ville)
            <div class="col-md-2 ">
              <strong><a href="{{route('ville',['ville' => $ville])}}" class="h3-responsive black-text">{{ $ville }}</a> </strong>
            </div>
                    @endforeach

                </div>
                <div class="row justify-content-md-center">
                        <a href=""  id="demo"   class="btn-lg btn-warning black-text">AUTOUR DE VOUS</a>
                </div>
            </div>
        </div>
            <hr class="my-5"/>
    <div class="row">

        <div class=" col-md-4"></div>
        <div class="col-md-4 text-center"> <h2 class="mb-5">NOS PARTENAIRES</h2></div>
        <div class="col-md-4"></div>
    </div>
    <div class="row mb-5">

    @foreach($partners as $partner)
        <div class="col-md-4 mb-3">
            <!-- Card -->
            <div class="card card-image m-md-3 " style="background-image: url({{ asset('images/partners/'.$partner->image) }});height: 350px;">

                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-light py-5 px-4" style="height: 350px;">
                    <div>
                        <h5 class="yellow-text"><strong>{{ $partner->category }}</strong></h5>
                        <h3 class="card-title pt-2"><strong>{{ $partner->nom }}</strong></h3>
                        <p>{{ $partner->description }}</p>
                        <a href="{{route('partners.show',['id' => $partner->id ])}}" class="btn btn-danger"><i class="fas fa-clone left"></i> Voir les deals</a>
                    </div>
                </div>

            </div>
        </div>
    @endforeach

</div>
</div>


@endsection