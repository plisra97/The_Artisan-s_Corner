<nav class="navbar navbar-expand-lg bg-light sticky-top ">
    <div class="container-fluid ">
        {{-- <a class="navbar-brand" href="#">
            <img src="" alt="" width="30" height="24">
        </a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center " id="navbarNavDropdown">
            <ul class="navbar-nav gap-5">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('article.index')}}">Annunci</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{route('autenticate')}}">Autenticazione</a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Categorie
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)

                        <li><a class="dropdown-item" href="{{ route('category', compact('category')) }}">{{($category->name)}}</a></li><hr>

                        @endforeach
                    </ul>
                </li>




                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{route('article.create')}}">Crea Annuncio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Ciao {{Auth::user()->name}}
                    </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="#">Profilo</a>
                    </li>
                    <hr>
                    <li>
                        <a class="dropdown-item" href="#"
                        onclick="event.preventDefault();document.querySelector('#form-logout').submit();">Logout</a>
                    </li>
                    <form id="form-logout" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Area personale
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                            <hr>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>

                        </ul>
                    </li>
                </ul>
        @endauth

    </ul>


        </div>
    </div>
</nav>
