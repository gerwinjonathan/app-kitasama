@extends('landingpage.landingpage')

@section('content')
<style>
    sup {
        color: red;
    }

</style>
<main>
    <div class="container">
        <div class="mb-3 mt-5">
            <h3>Warnai ceritamu di sini</h3>
            <p class="lead">Jadilah bagian dari penggerak kesetaraan.</p>
        </div>
        <form>
            <div class="mb-3">
                <label class="form-label">Judul Cerita</label>
                <label><sup>*</sup></label>
                <input type="text" class="form-control" id="inputCerita" aria-describedby="ceritaHelp" required>
                <div id="ceritaHelp" class="form-text">Berisikan judul cerita yang akan diunggah.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Tema Cerita</label>
                <label><sup>*</sup></label>
                <select class="form-select" id="tema" aria-label="temaCerita" onclick=showCategoryAuthor() required>
                    <option selected disabled>Pilih Tema Cerita</option>
                    <option value="quotes">Kutipan / Quotes</option>
                    <option value="cerpen">Cerita Pendek / Fiksi</option>
                    <option value="fakta">Kisah Nyata</option>
                    <option value="opini">Artikel Opini</option>
                    <option value="ilmiah">Artikel Ilmiah dan Edukasi</option>
                    <option value="poster">Poster dan Gambar</option>
                    <option value="video">Video</option>
                    <option value="statistik">Statistik</option>
                    <option value="tipsdantrik">Tips dan Trik</option>
                </select>
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
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Upload Video</label>
                        <div class="form-file">
                            <input type="file" class="form-file-input" id="uploadVideo">
                            <label class="form-file-label" for="uploadVideo">
                                <span class="form-file-text">Pilih file...</span>
                                <span class="form-file-button">Browse</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <label><sup>*</sup></label>
                <textarea class="form-control" id="deskripsi" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Referensi</label>
                <label><sup>*</sup></label>
                <textarea class="form-control" id="referensi" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Usia Konten</label>
                <label><sup>*</sup></label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Semua Umur (SU)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Remaja (12 th - 22 th)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Dewasa
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label>Tambahkan Tag</label>
                    <input type="text" name="tags" placeholder="Tags" class="tm-input form-control tm-input-info"
                        required>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Tentang Author / Penulis</label></br>
                <div id="author">
                    <img src="{{ auth()->user()->photo }}" alt="photo" width="32" height="32">&nbsp
                    {{ auth()->user()->name }}
                </div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="anonimCheck" onclick=showAuthor()>
                <label class="form-check-label" for="exampleCheck1">Anonim Author (opsional)</label>
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
        }
        else if (value == "poster") {
            uploadVid.disabled = true;
            uploadPic.disabled = false;
        }
        else if (value == "video") {
            uploadPic.disabled = true;
            uploadVid.disabled = false;
        }
        else {
            uploadPic.disabled = false;
            uploadVid.disabled = false;
            checkBox.disabled = false;
        }

    }
    
</script>
@endsection
