<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="{{ asset('css/cover.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js">
    </script>
    <title>❤️ KitaSama.com</title>
</head>

<body>
    <style>
        .btn {
            border-radius: 20px;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>
    <div class="cover-container d-flex w-100 h-100 mx-auto flex-column">
        <header class="mb-auto" id="home">
            <nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color: #34AFCF">
                <div class="container">
                    <a class="navbar-brand text-white" href="/">❤️ <b>KitaSama.com</b></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-white active" aria-current="page" href="/">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/ceritamu">Ceritamu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/lapor">Lapor</a>
                            </li>
                        </ul>
                        <span class="navbar-text text-white">
                            @guest
                            <a href="{{ url('login') }}" class="btn btn-outline-light" role="button">Login</a>
                            @else
                            <li class="nav-item dropdown" style="list-style-type:none">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    v-pre>
                                    @if(auth()->user()->photo)
                                    <img src="{{ auth()->user()->photo }}" alt="photo" width="32" height="32"
                                        style="margin-right: 8px;">
                                    @else
                                    <img src="{{ asset('img/default-user.png') }}" alt="photo" width="32" height="32"
                                        style="margin-right: 8px;">
                                    @endif
                                    {{ auth()->user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('logout') }}">
                                        Logout
                                    </a>
                                </div>
                            </li>
                            @endguest
                        </span>
                    </div>
                </div>
            </nav>
        </header>

        @yield('content')

        <footer class="mt-auto">
            <nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color: #34AFCF">
                <div class="container">
                    <a class="navbar-brand text-white" href="#home">❤️ <b>KitaSama.com</b></a>
                    <span class="navbar-text text-white">
                        Made by KitaSama. 2020.
                    </span>
                </div>
            </nav>
        </footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script type="text/javascript">
        $('.grid').masonry({
            itemSelector: '.grid-item',
            columnWidth: '.grid-sizer',
            percentPosition: true
        });
    </script>
</body>

</html>
