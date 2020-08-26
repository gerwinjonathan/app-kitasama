@extends('landingpage.landingpage')

@section('content')

@guest
<main>
    <main role="main" class="inner cover container" id="welcome">
        <div class="row">
            <div class="col-xs-6 col-md-6">
                <img src="{{ asset('img/2810643.jpg') }}" width="100%" height="100%">
            </div>
            <div class="col-xs-6 col-md-6">
                <div class="mt-5">
                    <span class="badge bg-info">Login Dulu</span>
                    <h2 class="cover-heading pt-2">Login terlebih dahulu</h2>
                    <p class="lead">Untuk mengakses fitur ini, silahkan melakukan login terlebih dahulu.</p>
                    <p class="lead">
                        <a href="{{ url('login') }}" class="btn btn-outline-info" role="button">Login</a>
                    </p>
                    <a href="https://www.freepik.com/vectors/internet"
                        style="font-size: 8pt; text-decoration: none;">Picture:
                        Designed by Freepik.com (Stories)</a>
                </div>
            </div>
        </div>
    </main>
</main>
@else
<main>
    <main role="main" class="inner cover container" id="section1">
        <div class="row">
            <div class="col-xs-0 col-lg-3">
                <div class="mt-5">
                    <h4 class="cover-heading pt-2">Navigasi</h4>
                    <a class="btn btn-block btn-outline-primary" href="{{ url('/ceritamu/post') }}"><i
                            class="fa fa-plus"></i>&nbsp Buat
                        Ceritamu</a>
                </div>
                <div class="mt-3">
                    <h4 class="cover-heading pt-2">Temukan</h4>
                    <form class="d-flex">
                        <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
                <div class="mt-3">
                    <h4 class="cover-heading pt-2">Filter</h4>
                    <h6 class="cover-heading pt-2">Koleksi</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="quotes">
                        <label class="form-check-label" for="flexCheckDefault">
                            Kutipan / Quotes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="cerpen">
                        <label class="form-check-label" for="flexCheckDefault">
                            Cerita Pendek / Fiksi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="fakta">
                        <label class="form-check-label" for="flexCheckDefault">
                            Kisah Nyata / Fakta
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="opini">
                        <label class="form-check-label" for="flexCheckDefault">
                            Artikel Opini
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="artikel">
                        <label class="form-check-label" for="flexCheckDefault">
                            Artikel Ilmiah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="poster">
                        <label class="form-check-label" for="flexCheckDefault">
                            Poster dan Gambar
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="video">
                        <label class="form-check-label" for="flexCheckDefault">
                            Video
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="statistik">
                        <label class="form-check-label" for="flexCheckDefault">
                            Statistik
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="tipsdantrik">
                        <label class="form-check-label" for="flexCheckDefault">
                            Tips dan Trik
                        </label>
                    </div>
                    <h6 class="cover-heading pt-2">Usia</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="SU">
                        <label class="form-check-label" for="flexCheckDefault">
                            Semua Umur
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="R">
                        <label class="form-check-label" for="flexCheckDefault">
                            Remaja (12 th - 22 th)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="D">
                        <label class="form-check-label" for="flexCheckDefault">
                            Dewasa (> 23 th)
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-lg-9">
                <div class="mt-5 pt-3 mb-5">
                    <h4 class="cover-heading pt-2"><b>12,000+ Cerita</b></h4>
                    <p class="lead"><b>Terima kasih</b> telah memperjuangkan kesetaraan.</p>
                    <div class="grid">
                        <div class="grid-sizer col-md-3"></div>
                        <div class="grid-item col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Berita</h5>
                                    <span class="badge bg-info">#berita</span>
                                    <p class="card-text">Pelecehan seksual terjadi kepada anak-anak di bawah umur.</p>
                                    <a class="btn btn-primary">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item col-md-3 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Statistik</h5>
                                    <span class="badge bg-info">#statistik</span>
                                        Jumlah Kasus di Indonesia saat ini > 5000 kasus.
                                </div>
                            </div>
                        </div>
                        <div class="grid-item col-md-3 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Infografis</h5>
                                    <span class="badge bg-info">#infografis</span>
                                    <span class="badge bg-info">#poster</span>
                                    <p class="card-text">
                                        <img src="https://www.thejakartapost.com/files/images2/01sexualharasment.img_assist_custom-780x582.png" width="100%" height="100%">
                                        thejakartapost.com
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item col-md-6 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    Quote
                                </div>
                                <div class="card-body">
                                <span class="badge bg-info">#quote</span>
                                    <span class="badge bg-info">#sexualharassment</span>
                                    <blockquote class="blockquote mb-0">
                                        <p>Don't be ashamed of your story, it will inspire others.</p>
                                        <footer class="blockquote-footer">Sexual Harassment Quotes <cite
                                                title="Source Title">www.geckoandfly.com</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item col-md-3 mb-4">
                            <div class="card">
                            <h5>Trending</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Poster dan Gambar</li>
                                    <li class="list-group-item">Video Kekerasan Seksual</li>
                                    <li class="list-group-item">Kesehatan Reproduksi</li>
                                </ul>
                            </div>
                        </div>
                        <div class="grid-item col-md-3 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="font-weight-bold mb-3">Pentingnya Kesehatan Seksual</h5>
                                    <p class="mb-0">Perkara seksual dan reproduksi masih terasa sangat tabu di Indonesia. Keadaan ini tidaklah mengherankan mengingat pendidikan seksual yang disediakan masih tergolong sangat minim. Padahal sebenarnya menjaga kesehatan seksual dan reproduksi sangat penting dan harus mulai diajarkan kepada anak sejak dini.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Kesehatan Seksual</li>
                                    <li class="list-group-item">Kesehatan Reproduksi</li>
                                </ul>
                                <div class="card-body">
                                    <a href="#!" class="card-link mr-3">Cek Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item col-md-3 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Statistik</h5>
                                    <span class="badge bg-info">#statistik</span>
                                    <span class="badge bg-info">#komnasperempuan</span>
                                        Terdapat 15 jenis kasus kekerasan seksual menurut Komnas Perempuan berdasarkan penelitian tahun 1998 - 2013
                                </div>
                            </div>
                        </div>
                        <div class="grid-item col-md-3 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Foto</h5>
                                    <span class="badge bg-info">#foto</span>
                                    <span class="badge bg-info">#poster</span>
                                    <p class="card-text">
                                        <img src="https://image-cdn.medkomtek.com/muy4k8rrY-Pv6FGrqASdiK_qh3Y=/1280x720/smart/filters:quality(75):strip_icc():format(webp)/klikdokter-media-buckets/medias/2301981/original/046916500_1543823277-Pentingnya-Menjaga-Kesehatan-Seksual-dan-Reproduksi-Sejak-Dini-By-Nur-Budhi-Klikdokter.jpg" width="100%" height="100%">
                                        klikdokter.com
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item col-md-3 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Foto</h5>
                                    <span class="badge bg-info">#foto</span>
                                    <span class="badge bg-info">#poster</span>
                                    <p class="card-text">
                                        <img src="https://www.industriall-union.org/sites/default/files/styles/large/public/uploads/images/General-pics/sexualharassment.jpg?itok=ZJo7VoS7" width="100%" height="100%">
                                        industriall-union.org
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</main>
@endguest

@endsection
