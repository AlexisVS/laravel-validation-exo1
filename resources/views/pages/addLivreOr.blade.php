@extends("template.index")
@include("template.flash")
@section('content')

    <form action="/livreOr" method="POST">
        @csrf
        <input value="{{ $errors->has('authorName') ? '' : old('authorName') }}" type="text" placeholder="Nom autheur"
            name="authorName" id="">
        <input value="{{ $errors->has('authorText') ? '' : old('authorText') }}" type="text"
            placeholder="Text de l'auteur" name="authorText" id="">
        <input value="{{ $errors->has('authorNote') ? '' : old('authorNote') }}" type="number"
            placeholder="Note de l'auteur" name="authorNote" id="">
        <input type="submit" value="Sauvegarder">
    </form>
@endsection
