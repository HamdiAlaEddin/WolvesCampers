@extends('.navbar/navbarclient')

@section('title')
    Rondo
@endsection

@section('content')
    <h3 class="text-center mt-2 mb-2">Reserver Randonnée</h3>
    <table class="table table-white table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Destination</th>
            <th scope="col">Description</th>
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
                <td>{{$r->date}}</td>
                <td>{{$r->duree}}</td>

                <td>
                    @if(isset($reservations[$r->id]) && count($reservations[$r->id]) > 0)
                        <div class=" d-flex">
                            <form action="{{route('annulerReserva',Auth()->user()->id)}}"  method="POST" >
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Annuler Reservation</button>
                            </form>
                        </div>
                    @else
                        <div class=" d-flex">
                            <form action="{{route('ReservRondo', $r->id)}}" method="GET" >
                                <button type="submit" class="btn btn-info">Reserver Maintenant</button>
                            </form>
                        </div>
                    @endif

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection



