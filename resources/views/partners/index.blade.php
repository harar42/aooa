@extends('datatable')

@section('content')

<div class="container-fluid mt-5 p-5">
    <h2 class="text-center mb-5 p-5 btn-large btn-outline-danger"> Liste des Partenaires </h2>
    <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
        <thead>

        <tr>
            <th class="th-sm">Nom
            </th>
            <th class="th-sm">description
            </th>
            <th class="th-sm">adresse
            </th>
            <th class="th-sm">ville
            </th>
            <th class="th-sm">code_postal
            </th>
            <th class="th-sm">latitude
            </th>
            <th class="th-sm">longitude
            </th>
            <th class="th-sm">categorie
            </th>
            <th class="th-sm">options
                </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($partners as $partner)

            <tr>
                <td>{{ $partner->nom }}</td>
                <td>{{ $partner->description }}</td>
                <td>{{ $partner->adresse }}</td>
                <td>{{ $partner->ville }}</td>
                <td>{{ $partner->code_postal }}</td>
                <td>{{ $partner->latitude }}</td>
                <td>{{ $partner->longitude }}</td>
                <td>{{ $partner->allo }}</td>
                <td>
                    <div class="btn-group" role="group">
                    <a href="{{ route('partners.show',$partner->id)}}" class="btn btn-sm btn-primary">Voir</a>
                    <a href="{{ route('partners.edit',$partner->id)}}" class="btn btn-sm btn-warning">Edit</a>

                    <form action="{{ route('partners.destroy', $partner->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>
                    </div>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>

@endsection