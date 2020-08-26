<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>KitaSama.com | Sign Up</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/form.css') }}">

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

    <!-- Custom styles for this template -->
    <link href="floating-labels.css" rel="stylesheet">
</head>

<body>
    <div class="row">
        <div class="col-6 col-xs-12">
            <div class="container">
                <form class="form-signin">
                    <div class="text-left mb-4">
                        <a href="/" style="text-decoration: none">❤️
                            <h4 class="h3 mb-3 font-weight-normal"> <b>KitaSama.com</b></h4></a>
                        <div class="alert alert-info" role="alert">
                            Sign Up untuk memulai.
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="form-label-group">
                                <input type="text" id="inputNama" class="form-control" placeholder="Name" required
                                    autofocus>
                                <label for="inputNama">Nama</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-label-group">
                                <input type="number" id="inputUsia" class="form-control" placeholder="Usia" required
                                    autofocus>
                                <label for="inputUsia">Usia</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required
                            autofocus>
                        <label for="inputEmail">Masukkan email</label>
                    </div>

                    <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <label for="inputPassword">Masukkan password</label>
                    </div>

                    <button class="btn btn-outline-primary" type="submit">Sign Up</button>

                    <p class="mt-5 text-center">Sudah punya akun? <a href="/login">Login di sini.</a></p>
                    <p class="mt-5 pt-5 text-left">❤️ KitaSama.com 2020.</p>
                    <h5>
                        <a href=""><i class="fa fa-github mr-2"></i></a>
                        <a href=""><i class="fa fa-linkedin mr-2"></i></a>
                    </h5>
                </form>
            </div>
        </div>
        <div class="col-6">
            <div class="container">
                <form class="form-signin mt-5 pt-5">
                    <img src="{{ asset('img/3573406.jpg') }}" width="100%" height="100%">
                    <a href="https://www.freepik.com/vectors/technology"
                        style="font-size: 8pt; text-decoration: none;">Picture:
                        Designed by Freepik.com</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
