@extends('.navbar/navbar')
@section('title')
    Materiels
@endsection
@section('content')
    <div class="container">
        <div class="row mt-2">
            <div class="col-6">
                <img src="{{asset('ajj.webp')}}" alt="office" width="100%" height="100%">
            </div>
            <div class="col-6">
                <h1 class="text-center">Ajouter Materiel</h1>
                <form action="{{route('storeMateriel')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nom d'équipement :</label>
                        <input type="text" name="name" placeholder="entrer nom d'équipement" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Quantité :</label>
                        <input type="number" name="quantite" placeholder="entrer quantité" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description :</label>
                        <input type="text" name="description" placeholder="entrer description" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prix :</label>
                        <input type="text" name="prix" placeholder="entrer le prix" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Lien Image :</label>
                        <input type="text" name="image" placeholder="entrer le lien d'image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Options :</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="option" id="vente" value="vente">
                            <label class="form-check-label" for="vente">Vente</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="option" id="location" value="location">
                            <label class="form-check-label" for="location">Location</label>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
