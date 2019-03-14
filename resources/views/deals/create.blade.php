@extends('app')

@section('content')
    <div class="container">

        <form method="post" action="{{action('DealController@store')}}" enctype="multipart/form-data" class="border border-light p-5 md-form" >
            @csrf

            <h1 class="mb-5"> Créer un deal </h1>

            <div class="md-form mb-5">
                <input type="text" id="title" name="title" class="form-control">
                <label for="title">title</label>
            </div>
            <div class="md-form amber-textarea active-amber-textarea mb-5">
                <textarea type="text" id="description" name="description" class="md-textarea form-control" rows="3"></textarea>
                <label for="description">description</label>
            </div>
            <div class="md-form mb-5">
                <input type="text" id="promotion" name="promotion" class="form-control">
                <label for="promotion">promotion</label>
            </div>
            <div class="file-field">
                <div class="btn btn-primary btn-sm float-left">
                    <span>Choose file</span>
                    <input type="file" name="image">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload your file">
                </div>
            </div>
            <div class="md-form mb-5">
                <input type="text" id="partner_id" name="partner_id" class="form-control invisible" value="{{$partner_id}}">
            </div>
            <div class="col-md-4 offset-md-3">
                <button class="btn btn-success btn-block my-5" type="submit"> Enregistrer</button>
            </div>

        </form>
    </div>
@endsection