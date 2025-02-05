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
                <h1 class="text-center">Modifier Randonnée</h1>
                <form  action="{{route('editRondo',$Rondo->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">

                        <label  class="form-label">Destination :</label>
                        <input type="text" name="destination" value="{{$Rondo->destination}}" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Description :</label>
                        <input type="text" name="description" value="{{$Rondo->description}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date :</label>
                        <input type="date" name="date" value="{{ $Rondo->date }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Prix Inscription :</label>
                        <input type="text" name="prixinscription" value="{{$Rondo->prixinscription}}" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Duree :</label>
                        <input type="text" name="duree" value="{{$Rondo->duree}}" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Lien Image Destination :</label>
                        <input type="text" name="image" value="{{$Rondo->image}}" class="form-control" >
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary ">Valider</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
