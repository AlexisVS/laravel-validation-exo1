@extends("template.index")
@include("template.flash")
@section('content')
    <form action="/livreOr/{{ $livreOr->id }}" method="POST">
        @csrf
        @method("PUT")
        <input value="{{ $livreOr->authorName }}" value="{{ $errors->has('authorName') ? $livreOr->authorName : old("authorName") }}" type="text" name="authorName" id="">
        <input value="{{ $livreOr->authorText }}" value="{{ $errors->has('authorText') ? $livreOr->authorText : old("authorText") }}" type="text" name="authorText" id="">
        <input value="{{ $livreOr->authorNote }}" value="{{ $errors->has('authorNote') ? $livreOr->authorNote : old("authorNote") }}" type="number" name="authorNote" id="">
        <input type="submit" value="Sauvegarder">
    </form>
@endsection
