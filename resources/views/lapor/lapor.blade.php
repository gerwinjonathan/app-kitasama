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
<style>
    sup {
        color: red;
    }

</style>
<main>
    <div class="container">
        <div class="mb-3 mt-5">
            <h3>Fitur Lapor</h3>
            <p class="lead">Jadilah bagian dari penggerak kesetaraan.</p>
        </div>
        <form>
            <div class="mb-3">
                <label class="form-label">Nama Anda</label>
                <label><sup>*</sup></label>
                <input type="text" class="form-control" id="inputNama" aria-describedby="namaHelp" required>
                <div id="namaHelp" class="form-text">Harap memasukkan identitas anda (sesuai dengan kartu identitas)</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Email Anda</label>
                <label><sup>*</sup></label>
                <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">Berisikan email anda.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Permasalahan</label>
                <label><sup>*</sup></label>
                <select class="form-select" id="tema" aria-label="temaCerita" onclick=showCategoryAuthor() required>
                    <option selected disabled>Pilih Opsi</option>
                    <option value="sistem">Permasalahan Sistem</option>
                    <option value="pribadi">Permasalahan Pribadi</option>
                    <option value="lainnya">Lainnya</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <label><sup>*</sup></label>
                <textarea class="form-control" id="deskripsi" rows="3" required></textarea>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Upload Gambar</label>
                        <div class="form-file">
                            <input type="file" class="form-file-input" id="uploadGambar">
                            <label class="form-file-label" for="uploadGambar">
                                <span class="form-file-text">Pilih file...</span>
                                <span class="form-file-button">Browse</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="anonimCheck" onclick=showAuthor()>
                <label class="form-check-label" for="exampleCheck1">Anonim Nama (opsional)</label>
            </div>
            <div class="mb-5">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</main>

<script type="text/javascript">
    $(".tm-input").tagsManager();

    const showAuthor = () => {
        let checkBox = document.getElementById('anonimCheck');
        let defaultAuthor = `
            <img src="{{ asset('img/default-user.png') }}" alt="photo" width="32" height="32">
                &nbsp Anonim
            `;

        if (!checkBox.checked) {
            defaultAuthor = `
            <img src="{{ auth()->user()->photo }}" alt="photo" width="32" height="32">&nbsp
                {{ auth()->user()->name }}
            `;
        }

        document.getElementById('author').innerHTML = defaultAuthor;
    }

    const showCategoryAuthor = () => {
        let value = document.getElementById("tema").value;

        const uploadPic = document.getElementById("uploadGambar");
        const uploadVid = document.getElementById("uploadVideo");
        const description = document.getElementById("deskripsi");
        const reference = document.getElementById("referensi");
        const checkBox = document.getElementById("anonimCheck");

        if (value == "ilmiah") {
            checkBox.disabled = true;
            description.required = true;
            reference.required = true;
        } else if (value == "poster") {
            uploadVid.disabled = true;
            uploadPic.disabled = false;
        } else if (value == "video") {
            uploadPic.disabled = true;
            uploadVid.disabled = false;
        } else {
            uploadPic.disabled = false;
            uploadVid.disabled = false;
            checkBox.disabled = false;
        }

    }

</script>
@endguest
@endsection
