@extends('datatable')

@section('content')

    <!--Main Navigation-->

    <div class="container mb-5 p-5">
        <h2 class="text-center mb-5 p-5 btn-large btn-outline-danger"> Liste des deals </h2>
        <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm">ID
                </th>
                <th class="th-sm">Titre
                </th>
                <th class="th-sm">Description
                </th>
                <th class="th-sm">Promotion
                </th>
                <th class="th-sm">Options </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($deals as $deal)
                <tr>
                    <td>{{ $deal->id }}</td>
                    <td>{{ $deal->title }}</td>
                    <td>{{ $deal->description }}</td>
                    <td>{{ $deal->promotion }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{ route('deals.edit',$deal->id)}}" class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('deals.destroy', $deal->id)}}" method="post">
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
