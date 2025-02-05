@extends('.navbar/navbarclient')
@section('title')
    Materiels
@endsection
@section('content')

    <div class="container mt-5">
        <h1>Passer une commande</h1>
        <form action="{{ route('Acheter') }}" method="POST">
            @csrf
            <div class="mb-3">
                <img src="{{ $materiel->image }}" class="card-img-top" alt="..." style="width: 100%; height: auto;">
                <label for="article_id" class="form-label">Nom de l'article</label>
                <p>{{ $materiel->name }}</p>
            </div>
            <div class="mb-3">
                <label for="quantite" class="form-label">Quantité</label>
                <input type="number" class="form-control" name="quantite" required>
            </div>

            <input type="hidden" name="materiel_id" value="{{ $materiel->id }}">
            <input type="hidden" name="materiel_nom" value="{{ $materiel->name }}">
            <input type="hidden" name="prix" value="{{ $materiel->prix }}">
                <button type="submit" class="btn btn-primary">Confirmer</button>
        </form>
    </div>

@endsection
