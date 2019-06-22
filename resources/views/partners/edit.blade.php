@extends('app')

@section('content')

<div class="container">
        <form method="post" action="{{ route('partners.update', $partner->id) }}" enctype="multipart/form-data" class="border border-light p-5 md-form" >
            @csrf
            @method('PATCH')

            <h1 class="mb-5"> Editer un Partenaire </h1>
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
            <div class="md-form mb-5">
                <input type="text" id="nom" name="nom" class="form-control" value="{{$partner->nom}}">
                <label for="nom">nom</label>
            </div>
            <div class="md-form amber-textarea active-amber-textarea mb-5">
                <textarea type="text" id="description" name="description" class="md-textarea form-control" rows="3">{{$partner->description}}</textarea>
                <label for="description">description</label>
            </div>
            <div class="md-form mb-5">
                <input type="text" id="adresse" name="adresse" class="form-control"  value="{{$partner->adresse}}">
                <label for="adresse">adresse</label>
            </div>
            <div class="md-form mb-5">
                <input type="text" id="ville" name="ville" class="form-control"  value="{{$partner->ville}}">
                <label for="ville">ville</label>
            </div>
            <div class="md-form mb-5">
                <input type="text" id="code_postal" name="code_postal" class="form-control"  value="{{$partner->code_postal}}">
                <label for="code_postal">code_postal</label>
            </div>
            <div class="md-form mb-5">
                <input type="text" id="latitude" name="latitude" class="form-control"  value="{{$partner->latitude}}">
                <label for="latitude">latitude</label>
            </div>
            <div class="md-form mb-5">
                <input type="text" id="longitude" name="longitude" class="form-control"  value="{{$partner->longitude}}">
                <label for="longitude">longitude</label>
            </div>
            <select class="mdb-select md-form mb-5" name="category_id">
                <option value="{{$partner->category_id}}"  selected>Modifier la catégorie</option>
                @foreach($categories as $categorie)
                    {{ $categorie }}
                    <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                @endforeach
            </select>
            <div class="file-field">
                <div class="btn btn-primary btn-sm float-left">
                    <span>Choose file</span>
                    <input type="file" name="image">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload your file">
                </div>
            </div>
            <div class="col-md-4 offset-md-3">
                <button class="btn btn-success btn-block my-5" type="submit"> Enregistrer</button>
            </div>

        </form>
</div>
@endsection