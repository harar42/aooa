@extends('app')

@section('content')
    <div class="container mt-5">
        <form method="post" action="{{action('CategoryController@store')}}" enctype="multipart/form-data" class="border border-light p-5 md-form" >
            @csrf

            <h1 class="mb-5"> Créer une categorie </h1>

            <div class="md-form mb-5">
                <input type="text" id="nom" name="nom" class="form-control">
                <label for="nom">category</label>
            </div>
            <button class="btn btn-success btn-block my-4 " type="submit"> Enregistrer</button>
        </form>
    </div>


@endsection