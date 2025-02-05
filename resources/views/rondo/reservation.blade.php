@extends('.navbar/navbar')
@section('title')
    Rondo
@endsection
@section('content')
    <span class="text-center ml-18">-- Les Reservation Randonnées --</span>
    <table class="table table-white table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ID-Client</th>
            <th scope="col">ID-Rondo</th>
            <th scope="col">Date</th>

        </tr>
        </thead>
        <tbody>
        @foreach($reservation as $r)
            <tr>
                <th scope="row">{{$r->id}}</th>
                <td>{{$r->client_id}}</td>
                <td>{{$r->rondo_id}}</td>
                <td>{{$r->date}}</td>
                <td>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection

