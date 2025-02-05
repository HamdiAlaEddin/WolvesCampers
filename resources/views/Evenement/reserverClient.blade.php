@extends('.navbar/navbarclient')
@section('title')
    Evénement
@endsection
@section('content')
    <h3 class="text-center mt-2 mb-2">Les Evénements</h3>
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
                        @if(isset($res[$e->id]) && count($res[$e->id]) > 0)
                            <div class=" d-flex">
                                <form action="{{route('annulerReserva',Auth()->user()->id)}}"  method="POST" >
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Annuler Reservation</button>
                                </form>
                            </div>
                        @else
                            <div class=" d-flex">
                                <form action="{{route('ReservEvent', $e->id)}}" method="GET" >
                                    @csrf
                                    <button type="submit" class="btn btn-info">Reserver Maintenant</button>
                                </form>
                            </div>
                        @endif

                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection



