<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Gestion-@yield('title')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-secondary">
    <div class="container-fluid">
        <img src="{{ asset('logo.png') }}" alt="logo" width="7%" height="1%">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="{{route('GoAcceuil')}}">Accueil</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Matériels
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('goAjouterMateriel')}}">Ajouter</a></li>
                        <li><a class="dropdown-item" href="{{route('getVenteMateriel')}}">Consulter Ventes</a></li>
                        <li><a class="dropdown-item" href="{{route('getLocationMateriel')}}">Consulter Location</a></li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Rondo
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('goAjouterRondo')}}">Ajouter</a></li>
                        <li><a class="dropdown-item" href="{{route('getAllRondo')}}">Consulter</a></li>
                        <li><a class="dropdown-item" href="{{route('consultReserv')}}">Reservation</a></li>

                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Événement
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('goAjouterEvent')}}">Ajouter</a></li>
                        <li><a class="dropdown-item" href="{{route('getAllEvent')}}">Consulter</a></li>
                        <li><a class="dropdown-item" href="{{route('consultReservev')}}">Reservation</a></li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Membres
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('getAllMember')}}">Afficher Membres</a></li>
                        <li><a class="dropdown-item" href="#">afficher Messages</a></li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Admin
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('goAddAdmin')}}">Ajouter Admin</a></li>
                        <li><a class="dropdown-item" href="{{route('getAllAdmin')}}">Consulter</a></li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" href="#">Archive</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item text-danger" href="#">Profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item text-danger" href="#">Déconnexion</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


@yield('content')

<footer class="bg-secondary mt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <h5>NOUS CONTACTER</h5>
                    <li><p><i class="bi bi-geo-alt text-white"></i>Tunis</p></li>
                    <li><a href="#"><i class="bi bi-envelope text-white"></i> wolvescampers@gmail.com</a></li>
                    <li><a href="#"><i class="bi bi-telephone text-white"></i> (+216) 25 968 868</a></li>
                </ul>
                <p class="text-white text-center">2023 ©  WOLVESCAPMERS COPYRIGHT</p>
                <p class="text-center">
                    <a target="_blank" href="https://www.facebook.com/wolves.campers">Facebook<i class="bi bi-facebook text-white"></i></a>
                    <a target="_blank" href="https://www.instagram.com/wolves.campers">Instagram<i class="bi bi-instagram text-danger"></i></a>
                </p>
            </div>
        </div>
    </div>
</footer>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</html>
