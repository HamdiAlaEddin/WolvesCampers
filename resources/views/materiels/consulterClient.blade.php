@extends('.navbar/navbarclient')
@section('title')
    Materiels
@endsection
@section('content')

    <div class="container">
        <div class="row">
            @foreach($materiels as $m)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{$m->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p>Article : {{$m->name}}</p>
                            <p> Quantite : {{$m->quantite}}</p>
                            <p>Description : {{$m->description}}</p>
                            <p>Prix : {{$m->prix}}</p>
                            @if($m->etat == 1)
                                <p> Etat : <span  class="text-success">disponible</span></p>
                            @else
                                <p> Etat : <span class="text-danger"> non disponible</span></p>
                            @endif

{{--                            <form action="#"method="POST" >--}}

{{--                                <button type="submit" class="btn btn-danger">Louer</button>--}}
{{--                            </form>--}}

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection()

