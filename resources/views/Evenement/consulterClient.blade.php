@extends('.navbar/navbarclient')
@section('title')
    Evénement
@endsection
@section('content')

    <div class="container">
        <div class="row">
            @foreach($Events as $e)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{$e->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p>Evenement : {{$e->name}}</p>
                            <p>Description : {{$e->description}}</p>
                            <p>Date : {{$e->date}}</p>
                            <p>Prix : {{$e->prix}}</p>
                            <p>Lieu : {{$e->place}}</p>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection()
