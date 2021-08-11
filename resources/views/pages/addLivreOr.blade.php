@extends("template.index")
@section('content')
    <form action="/livreOr" method="POST">
        @csrf
        <input type="text" placeholder="Nom autheur" name="authorName" id="">
        <input type="text" placeholder="Text de l'auteur" name="authorText" id="">
        <input type="number" placeholder="Note de l'auteur" name="authorNote" id="">
        <input type="submit" value="Sauvegarder">
    </form>
@endsection
