@extends("template.index")
@section('content')
    <form action="/livreOr/{{ $livreOr->id }}" method="POST">
        @csrf
        @method("PUT")
        <input type="text" name="authorName" value="{{ $livreOr->authorName }}" id="">
        <input type="text" name="authorText" value="{{ $livreOr->authorText }}" id="">
        <input type="number" name="authorNote" value="{{ $livreOr->authorNote }}" id="">
        <input type="submit" value="Sauvegarder">
    </form>
@endsection
