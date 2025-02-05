@extends('.navbar/navbar')
@section('title')
    Membres
@endsection
@section('content')
    <span class="text-center ml-18">-- Les Admins  --</span>
    <table class="table table-white table-hover">
        <thead>
        <tr>

            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>

        </tr>
        </thead>
        <tbody>
        @foreach($admins as $a)
            <tr>
                <th scope="row">{{$a->id}}</th>
                <td>{{$a->name}}</td>
                <td>{{$a->email}}</td>


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

