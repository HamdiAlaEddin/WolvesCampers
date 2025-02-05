@extends('.navbar/navbarclient')
@section('title')
    Rondo
@endsection
@section('content')
    <div>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('1.JPG') }}"  class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset("2.JPG")}}" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset("3.JPG")}}" class="d-block w-100 h-50" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection

