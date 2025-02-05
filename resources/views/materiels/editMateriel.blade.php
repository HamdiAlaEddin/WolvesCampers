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
                <h1 class="text-center">Modifier Materiel</h1>
                <form action="{{route('editMateriel',$materiel->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Nom d'équipement :</label>
                        <input type="text" name="name" value="{{$materiel->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Quantité :</label>
                        <input type="number" name="quantite" value="{{$materiel->quantite}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description :</label>
                        <input type="text" name="description" value="{{$materiel->description}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prix :</label>
                        <input type="text" name="prix" value="{{$materiel->prix}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Lien Image :</label>
                        <input type="text" name="image" value="{{$materiel->image}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Options :</label>
                        <div class="form-check form-check-inline">
                            <input @if($materiel->option === 'location') checked @endif class="form-check-input" type="radio" name="option"  value="location" >

                            <label class="form-check-label" for="location">
                                Location
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input @if($materiel->option === 'vente') checked @endif class="form-check-input" type="radio" name="option" value="Vente"  >
                            <label class="form-check-label" for="vente">
                                Vente
                            </label>
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

