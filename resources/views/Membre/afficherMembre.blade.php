@extends('.navbar/navbar')
@section('title')
    Membres
@endsection
@section('content')
    <span class="text-center ml-18">-- Les Membres  --</span>
    <table class="table table-white table-hover">
        <thead>
        <tr>

            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Telephone</th>

        </tr>
        </thead>
        <tbody>
        @foreach($Clients as $c)
            <tr>
                <th scope="row">{{$c->id}}</th>
                <td>{{$c->name}}</td>
                <td>{{$c->email}}</td>
                <td>{{$c->telephone}}</td>


                <td>
                    <div class="d-flex">

{{--                        <form action="{{route('deleteEvent', $e->id)}}" method="POST">--}}
{{--                            @method('DELETE')--}}
{{--                            @csrf--}}

{{--                            <button type="submit" class="btn btn-info  ml-2">Supprimer</button>--}}
{{--                            <button type="submit" class="btn btn-info  ml-2">Modifier</button>--}}

{{--                        </form>--}}

                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection

