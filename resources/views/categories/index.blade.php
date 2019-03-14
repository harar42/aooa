@extends('datatable')

@section('content')

<!--Main Navigation-->

<div class="container mb-5 p-5">
    <h2 class="text-center mb-5 p-5 btn-large btn-outline-primary"> Liste des categories </h2>
    <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th class="th-sm">ID
            </th>
            <th class="th-sm">Nom
            </th>
            <th class="th-sm">Options </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->nom }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="{{ route('categories.edit',$category->id)}}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('categories.destroy', $category->id)}}" method="post">
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
