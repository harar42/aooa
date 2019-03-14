@extends('app')

@section('content')
    <div class="container">

<form method="post" action="{{action('PartnerController@store')}}" enctype="multipart/form-data" class="border border-light p-5 md-form" >
    @csrf

    <h1 class="mb-5"> Créer un partenaire </h1>

    <div class="md-form mb-5">
        <input type="text" id="nom" name="nom" class="form-control">
        <label for="nom">nom</label>
    </div>
    <div class="md-form amber-textarea active-amber-textarea mb-5">
        <textarea type="text" id="description" name="description" class="md-textarea form-control" rows="3"></textarea>
        <label for="description">description</label>
    </div>
    <div class="md-form mb-5">
        <input type="text" id="adresse" name="adresse" class="form-control">
        <label for="adresse">adresse</label>
    </div>
    <div class="md-form mb-5">
        <input type="text" id="ville" name="ville" class="form-control">
        <label for="ville">ville</label>
    </div>
    <div class="md-form mb-5">
        <input type="text" id="code_postal" name="code_postal" class="form-control">
        <label for="code_postal">code_postal</label>
    </div>
    <div class="md-form mb-5">
        <input type="text" id="latitude" name="latitude" class="form-control">
        <label for="latitude">latitude</label>
    </div>
    <div class="md-form mb-5">
        <input type="text" id="longitude" name="longitude" class="form-control">
        <label for="longitude">longitude</label>
    </div>
    <select class="mdb-select md-form my-5" name="category_id">
        <option value="" disabled selected>Choisir la catégorie</option>
        <option value="1">Accessoires auto-moto</option>
        <option value="2">Alimentation</option>
        <option value="3">Assurance</option>
        <option value="4">Autres services</option>
        <option value="5">Bien être</option>
        <option value="6">Bon plans</option>
        <option value="7">Boucherie</option>
        <option value="8">Boulangerie</option>
        <option value="9">Coach sportif</option>
        <option value="10">Coiffures</option>
        <option value="11">Cours</option>
        <option value="12">Développement individuel</option>
        <option value="13">Fast-food</option>
        <option value="14">Finance</option>
        <option value="15">Formation</option>
        <option value="16">Jeux</option>
        <option value="17">Langues</option>
        <option value="18">Lavage automobiles</option>
        <option value="19">Mécanique auto-moto</option>
        <option value="20">Médecine</option>
        <option value="21">Optique</option>
        <option value="22">Restaurant</option>
        <option value="23">Scooters</option>
        <option value="24">Sport</option>
        <option value="25">Sport de combats</option>
        <option value="26">Transports</option>
        <option value="27">Téléphonie</option>
        <option value="28">Voitures</option>
        <option value="29">Voyage</option>
        <option value="30">Vélos</option>
        <option value="31">Vêtements</option>
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