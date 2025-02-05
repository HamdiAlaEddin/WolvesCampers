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
                            <p>Description : {{$m->description}}</p>
                            <p>Prix : {{$m->prix}}</p>

                            @if($m->etat == 1)
                                <p> Etat : <span  class="text-success">disponible</span></p>
                            @else
                                <p> Etat : <span class="text-danger"> non disponible</span></p>
                            @endif

                            @if($m->quantite != 0)
                                <form action="{{route('goLouerMateriel',$m->id)}}" method="get" >
                                    @csrf
                                    <button type="submit" class="btn btn-info">Louer</button>
                                </form>
                            @else
                                <form action="#" method="get" >
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Non Disponible</button>
                                </form>
                            @endif

                        </div>
                    </div>
                </div>
            @endforeach
        </div>




@endsection()

