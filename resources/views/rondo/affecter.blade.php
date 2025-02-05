@extends('.navbar/navbar')
@section('title')
    Rando
@endsection
@section('content')



<section>
    <h2 class="text-center mt-2"> listes des Guides</h2>
</section>
<div class="container">
    <div class="row">
        <div class="col-2">

        </div>
        <div class="col-8">

            <table class="table table-white table-hover">
                <thead>
                <tr>
                    <th scope="col">Id</th>
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

                            <form action="{{route('affectGid')}} " method="post">
                                @csrf
                                <input type="hidden" name="Admin_id" value="{{ $a->id }}">
                                <input type="hidden" name="rondo_id" value="{{ $id_rondo}}">
                                <button type="submit" class="btn btn-primary">OK</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-2">

        </div>
    </div>
</div>

@endsection
