@extends('.navbar/navbarclient')
@section('title')
    Materiels
@endsection
@section('content')

    <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-6">
                <h1>Passer une commande</h1>
                <form action="{{route('storeLocation')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <img src="{{$materiel->image}}" class="card-img-top" alt="..." width="7%" height="50%">

                        <label for="article_id" class="form-label">Nom de l'article</label>
                        <p >{{$materiel->name}}</p>
                    </div>

                    <div class="mb-3">
                        <label for="date_debut" class="form-label">Date de début</label>
                        <input type="date" class="form-control" id="date_debut" name="date_debut" required>
                    </div>
                    <div class="mb-3">
                        <label for="date_fin" class="form-label">Date de fin</label>
                        <input type="date" class="form-control" id="date_fin" name="date_fin" required>
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Quantité </label>
                        <input type="text" class="form-control"  name="quantite" required>

                    </div>
                    <input type="hidden"  name="materiel_id" value="{{$materiel->id}}">
                    <input type="hidden"  name="prix" value="{{$materiel->prix}}">
                   <div class="text-center">
                       <button type="submit" class="btn btn-primary">Passer la commande</button>
                   </div>
                </form>
            </div>
            <div class="col-3">

            </div>
        </div>
    </div>
@endsection
