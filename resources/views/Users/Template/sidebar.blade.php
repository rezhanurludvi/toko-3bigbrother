<nav class="navbar navbar-expand-lg navbar-light bg-light border-0 border-radius-xl my-3 mb-0 fixed-start ms-3 me-3"
    id="sidenav-main">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <div class="badge btn-outline-success bg-primary text-wrap" style="width: 7rem;">
                3 Brothers Shop
            </div>
        </a>
        <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-1"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
            </ul>
            <ul class="navbar-nav ">
                @auth
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Welcome Back, {{ auth()->user()->name }}
                        </a>
                        <div>
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-outline-success mb-0">Logout</button>
                        </form>
                    </li>
            </div>
            </li>
        @else
            <li>
                <a href="/login" class="btn btn-outline-success mb-0">Login</a>
            </li>
        @endauth
        </ul>
    </div>
    </div>
</nav>
