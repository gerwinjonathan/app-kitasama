@extends('landingpage.landingpage')

@section('content')
<main role="main" class="inner cover container" id="welcome">
    <div class="row">
        <div class="col-xs-6 col-md-6">
            <img src="{{ asset('img/3737258.jpg') }}" width="100%" height="100%">
        </div>
        <div class="col-xs-6 col-md-6">
            <div class="mt-5">
                <span class="badge bg-warning">404 Not Found</span>
                <h2 class="cover-heading pt-2">Data tidak ditemukan.</h2>
                <p class="lead">Data yang anda cari tidak ditemukan. Cobalah untuk menunggu beberapa saat atau cari
                    data lainnya.</p>
                <p class="lead">
                    <a href="{{ url()->previous() }}" class="btn btn-outline-warning" role="button">Kembali</a>
                </p>
                <a href="https://www.freepik.com/vectors/technology"
                    style="font-size: 8pt; text-decoration: none;">Picture:
                    Designed by Freepik.com</a>
            </div>
        </div>
    </div>
</main>
@endsection
