@extends('landingpage.landingpage')

@section('content')
<main>
    <main role="main" class="inner cover container" id="welcome">
        <div class="row">
            <div class="col-xs-6 col-md-6">
                <div class="mt-5">
                    <span class="badge bg-success">Launching Perdana</span>
                    <h4 class="cover-heading pt-2">❤️ <b>KitaSama.com</b> <b>X</b> <img
                            src="{{ asset('img/UN-Goals.png') }}" width="35%" height="35%">
                        <img src="{{ asset('img/goal-5.png') }}" width="10%" height="10%"></h4>
                    <p class="lead"><b>KitaSama.com</b> merupakan salah satu solusi yang dibangun untuk memberikan
                        ilmu dan kolaborasi dalam menyelesaikan persoalan dan isu seputar kesetaraan gender.</p>
                    <p class="lead">
                        <a href="#section1" class="btn btn-outline-info" role="button">Mari mulai</a>
                        <a href="#" class="btn btn-outline-dark" role="button"><i class="fa fa-github"></i>&nbsp Code on
                            Github</a>
                    </p>
                    <a href="https://www.freepik.com/vectors/people"
                        style="font-size: 8pt; text-decoration: none;">Picture:
                        Designed by Freepik.com</a>
                </div>
            </div>
            <div class="col-xs-6 col-md-6">
                <img src="{{ asset('img/4003628.jpg') }}" width="100%" height="100%">
            </div>
        </div>
    </main>

    <main role="main" class="inner cover container" id="section1">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="mt-5 pt-3 mb-5">
                    <h4 class="cover-heading pt-2"><b>Fitur dan Layanan</b></h4>
                    <p class="lead"><b>KitaSama.com</b> memberikan layanan dan fitur yang dapat dimanfaatkan oleh
                        pengguna diantaranya sebagai berikut.</p>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card text-center shadow-sm">
                                <img src="https://img.icons8.com/dusk/64/000000/date.png" class="card-img-top"
                                    alt="sex-education" width="50%" height="50%">
                                <div class="card-body">
                                    <h5 class="card-title">Pendidikan Seksual</h5>
                                    <p class="card-text">Kumpulan artikel dari referensi terpercaya yang berhubungan
                                        dengan kesehatan dan hal-hal yang berkaitan dengan aktivitas seksual.</p>
                                    <a href="https://icons8.com/icon/104340/romance"
                                        style="font-size: 8pt; text-decoration: none;">Picture:
                                        Designed by Icons8.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-center shadow-sm">
                                <img src="https://img.icons8.com/clouds/100/000000/book.png" class="card-img-top"
                                    alt="story" width="50%" height="50%">
                                <div class="card-body">
                                    <h5 class="card-title">Ceritamu</h5>
                                    <p class="card-text">Ceritamu memberikan akses kepada pengguna untuk saling berbagi
                                        cerita dan inspirasi dalam menghadapi masalah seksualitas.</p>
                                    <a href="https://icons8.com/icon/64656/book"
                                        style="font-size: 8pt; text-decoration: none;">Picture:
                                        Designed by Icons8.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-center shadow-sm">
                                <img src="https://img.icons8.com/fluent/100/000000/doctors-bag.png" class="card-img-top"
                                    alt="medic" width="50%" height="50%">
                                <div class="card-body">
                                    <h5 class="card-title">Siap Lapor</h5>
                                    <p class="card-text">Siap lapor memberikan perlindungan dan solusi dari profesional
                                        atas masalah seputar isu seksualitas.</p>
                                    <a href="https://icons8.com/icon/trsCZxEJArXb/doctors-bag"
                                        style="font-size: 8pt; text-decoration: none;">Picture:
                                        Designed by Icons8.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</main>
@endsection
