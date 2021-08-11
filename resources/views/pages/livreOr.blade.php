@extends("template.index")
@section('content')
    <h1><strong>Nom d'auteur: </strong>{{ $livreOr->authorName }}</h1>
    <h1><strong>Texte de l'auteur: </strong>{{ $livreOr->authorText }}</h1>
    <h1><strong>Note de l'auteur: </strong>{{ $livreOr->authorNote }}</h1>
@endsection
