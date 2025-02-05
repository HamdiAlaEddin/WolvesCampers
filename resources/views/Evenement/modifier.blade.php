@extends('.navbar/navbar')
@section('title')
    Evenement
@endsection
@section('content')
    <div class="container">
        <div class="row mt-2">
            <div class="col-6">
                <img src="{{asset('event.jpg')}}" alt="office" width="100%" height="100%">
            </div>
            <div class="col-6">
                <h1 class="text-center">Modifier Evenement</h1>
                <form  action="{{route('editEvent',$Event->id)}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label  class="form-label">Nom d'évenement :</label>
                        <input type="text" name="name" value="{{$Event->name}}" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Description :</label>
                        <input type="text" name="description"  value="{{$Event->description}}" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Place :</label>
                        <input type="text" name="place"  value="{{$Event->place}}" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Date :</label>
                        <input type="date" name="date"  value="{{$Event->date}}" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Prix :</label>
                        <input type="text" name="prix"  value="{{$Event->prix}}" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Lien Image :</label>
                        <input type="text" name="image"  value="{{$Event->image}}" class="form-control" >
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary ">Valider</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

