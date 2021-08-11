@extends("template.index")
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Author name: </th>
                <th scope="col">Author text: </th>
                <th scope="col">Author note: </th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($livreOrs as $livreOr)
                <tr>
                    <th scope="row">{{ $livreOr->id }}</th>
                    <td>{{ $livreOr->authorName }}</td>
                    <td>{{ $livreOr->authorText }}</td>
                    <td>{{ $livreOr->authorNote }}</td>
                    <td class="d-flex">
                        <a href="/livreOr/{{ $livreOr->id }}" class="btn btn-success text-white">SHOW</a>
                        <a href="/livreOr/{{ $livreOr->id }}/edit" class="btn btn-primary text-white mx-3">EDIT</a>
                        <form action="/livreOr/{{ $livreOr->id }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <input type="submit" value="X" class="btn btn-danger text-white">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/livreOr/create" class="btn btn-primary text-white">Ajouter au livre d'or</a>
@endsection
