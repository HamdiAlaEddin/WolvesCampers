@extends('.navbar/navbar')
@section('title')
    Evénement
@endsection
@section('content')
    <span class="text-center ml-18">-- Les Evénements  --</span>
    <table class="table table-white table-hover">
        <thead>
        <tr>

            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Description</th>
            <th scope="col">Date</th>
            <th scope="col">Prix</th>
            <th scope="col">Lieu</th>

        </tr>
        </thead>
        <tbody>
        @foreach($Events as $e)
            <tr>
                <th scope="row">{{$e->id}}</th>
                <td>{{$e->name}}</td>
                <td>{{$e->description}}</td>
                <td>{{$e->date}}</td>
                <td>{{$e->prix}}</td>
                <td>{{$e->place}}</td>

                <td>
                    <div class="d-flex">

                        <form action="{{route('deleteEvent', $e->id)}}" method="POST">
                            @method('DELETE')
                            @csrf

                            <button type="submit" class="btn btn-info  ml-2">Supprimer</button>
                        </form>
                            <a href="{{route('goeditEvent',$e->id)}}" class="card-link">
                                <button class="btn btn-warning mx-2">Modifier</button>
                            </a>
                        @if($e->id_Responsable != null)
                            <form action="{{route('rejeterResponsable',$e->id)}}" method="GET">
                                @csrf
                                <button type="submit" class="btn text-light  bg-success ml-2">Responsable affecté </button>
                            </form>
                        @else
                            <form action="{{route('affecterResponsable',$e->id)}}" method="GET">
                                @csrf
                                <button type="submit" class="btn text-light  bg-dark ml-2">Affecter Responsable + </button>
                            </form>
                        @endif


                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection

