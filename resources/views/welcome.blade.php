<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dukcapil Jeneponto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/logos.png') }}" alt="" width="100px" />
                <img src="{{ asset('assets/img/logo.png') }}" alt="" width="100px" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ms-auto gap-4">
                    <a href="{{ route('register.action') }}" class="btn-daftar">Daftar</a>
                    <a href="{{ route('login') }}" class="btn-masuk">Masuk</a>
                </div>
            </div>
        </div>
    </nav>

    <section id="hero">
        <div class="container">
            <div class="row isi-hero">
                <div class="col-md-6 col-12 align-self-center">
                    <p class="title">
                        Selamat Datang <br />
                        <span>Website Dukcapil Jeneponto</span>
                    </p>
                    <p class="subtitle">
                        Direktorat Jenderal Kependudukan dan Pencatatan Sipil atau
                        disingkat dengan Ditjen Dukcapil merupakan unsur pelaksana
                        Kementerian Dalam Negeri di bidang kependudukan dan pencatatan
                        sipil. Ditjen Dukcapil berada di bawah dan bertanggung jawab
                        kepada Menteri.
                    </p>
                    <a href="{{ route('login') }}" class="btn-ajukan">Ajukan Pelaporan</a>
                </div>
                <div class="col-md-6 col-12">
                    <img src="{{ asset('assets/img/bghero.png') }}" alt="" width="100%" />
                </div>
            </div>
        </div>
    </section>

    <section id="pengajuan">
        <div class="container">
            <div class="text-center pt-md-0 pt-5">
                <p class="title">Pengajuan</p>
                <p class="subtitle">Beberapa Jenis Pengajuan</p>
            </div>
            <div class="row mt-md-5 mt-4">
                <div class="col-md-2 mb-4 align-self-center">
                    <img src="{{ asset('assets/img/icons.png') }}" alt="" width="100%" />
                </div>
                <div class="col-md-4 mb-4 col-12">
                    <div class="card">
                        <img src="{{ asset('assets/img/aktakelahiran.png') }}" alt="" width="100%" />
                        <a href="{{ route('login') }}" class="btn-masuk border-0 mt-4 text-center">
                            Pengajuan Akta Kelahiran
                        </a>
                    </div>
                </div>
                <div class="col-md-4 mb-4 col-12">
                    <div class="card">
                        <img src="{{ asset('assets/img/aktakematian.png') }}" alt="" width="100%" />
                        <a href="{{ route('login') }}" class="btn-masuk border-0 mt-4 text-center">
                            Pengajuan Akta Kematian
                        </a>
                    </div>
                </div>
                <div class="col-md-2 mb-4 align-self-center">
                    <img src="{{ asset('assets/img/icons.png') }}" alt="" width="100%" />
                </div>
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="container">
            <div class="row text-white">
                <div class="col-12 my-auto d-flex">
                    <i>@Copyright 2023</i>
                    <p class="mb-0 ms-auto">Dukcapil Jeneponto</p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
