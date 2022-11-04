<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GSLC 01</title>

    <link rel="icon" href="{{asset('favicon.png')}}" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">GSLC 01</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php
                        $navBar = array("Home", "Mahasiswa", "Dosen");
                        $navLink = array("home", "mahasiswa", "dosen");
                        $n = count($navBar);
                    ?>
                    @for ($i = 0; $i < $n; $i++)
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is($navLink[$i]) ? 'active':'' }}" aria-current="page" href="/{{$navLink[$i]}}">{{$navBar[$i]}}</a>
                        </li>
                    @endfor
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        @yield('content')
    </div>

    @include('layout.templateFooter')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
