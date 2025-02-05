@extends('.navbar/navbar')
@section('title')
    Rondo
@endsection
@section('content')
    <span class="text-center ml-18">-- Les Randonnées --</span>
    <table class="table table-white table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Destination</th>
            <th scope="col">Description</th>
            <th scope="col">Prix</th>
            <th scope="col">Date</th>
            <th scope="col">Duree</th>

        </tr>
        </thead>
        <tbody>
        @foreach($Rondos as $r)
            <tr>
                <th scope="row">{{$r->id}}</th>
                <td>{{$r->destination}}</td>
                <td>{{$r->description}}</td>
                <td>{{$r->prixinscription}}</td>
                <td>{{$r->date}}</td>
                <td>{{$r->duree}}</td>

                <td>
                    <div class="d-flex">

                        <form action="{{route('deleteRondo', $r->id)}}" method="POST">
                          @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-info  ml-2">Supprimer</button>
                        </form>
                        <a href="{{route('goeditRondo',$r->id)}}" class="card-link">
                            <button class="btn btn-warning mx-2">Modifier</button>
                        </a>
                        <div class="d-flex">

                            @if($r->guide_id != null)
                                <form action="{{route('rejeterGuide',$r->id)}}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn text-light  bg-success ml-2">Guide affecté </button>
                                </form>
                            @else
                                <form action="{{route('affecterGuide',$r->id)}}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn text-light  bg-dark ml-2">Affecter Guide + </button>
                                </form>
                            @endif


                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
