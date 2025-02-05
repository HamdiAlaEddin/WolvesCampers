@extends('.navbar/navbar')
@section('title')
    Rando
@endsection
@section('content')


    <div class="container">
        <div class="row mt-2">
            <div class="col-6">
                <img src="{{asset('x.jpg')}}" alt="office" width="100%" height="100%">
            </div>
            <div class="col-6">
                <h1 class="text-center">Ajouter Randonnée</h1>
                <form  action="{{route('storeRondo')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label">Destination :</label>
                        <input type="text" name="destination" placeholder="entrer nom de destination" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Description :</label>
                        <input type="text" name="description" placeholder="entrer description" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Date :</label>
                        <input type="date" name="date" placeholder="entrer date début" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Prix Inscription :</label>
                        <input type="text" name="prixinscription" placeholder="entrer le tarif d'inscription" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Duree :</label>
                        <input type="text" name="duree" placeholder="entrer duree " class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Lien Image Destination :</label>
                        <input type="text" name="image" placeholder="entrer le lien d'image" class="form-control" >
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary ">Valider</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
