<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Registrasi</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/imglogin.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/regis.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    @include('sweetalert::alert')
    <section id="regis" style="contain: content;">
        <div class="row">
            <div class="col-md-12 kanan">
                <p class="title">Halaman Registrasi</p>
                @if ($errors->any())
                    @foreach ($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                @endif
                <div class="mx-auto">
                    <form action="{{ route('register.action') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="username" class="form-label">Username/Email</label>
                                <div class="input-group mb-3 d-flex">
                                    <input type="email" class="form-control py-3 bg-transparent text-light border-0"
                                        name="username" id="username" required placeholder="Username Email/Petugas">
                                    <i class="bi bi-person-fill align-self-center fs-3 pe-3"></i>
                                </div>
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group mb-3 d-flex">
                                    <input type="password" class="form-control py-3 bg-transparent text-light border-0"
                                        name="password" id="password" required placeholder="Password">
                                    <i class="bi bi-key-fill align-self-center fs-3 pe-3"></i>
                                </div>
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <div class="input-group mb-md-5 mb-3 d-flex">
                                    <input type="text" class="form-control py-3 bg-transparent text-light border-0"
                                        name="nama_lengkap" id="nama_lengkap" required
                                        placeholder="Nama Lengkap Email/Petugas">
                                    <i class="bi bi-person-fill align-self-center fs-3 pe-3"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="nik" class="form-label">NIK</label>
                                <div class="input-group mb-3 d-flex">
                                    <input type="number" class="form-control py-3 bg-transparent text-light border-0"
                                        name="nik" id="nik" required
                                        placeholder="Nomor Induk Kewarganegaraan">
                                    <i class="bi bi-list-ol align-self-center fs-3 pe-3"></i>
                                </div>
                                <label for="foto_ktp" class="form-label">Foto KTP</label>
                                <div class="input-group ps-2 mb-3 d-flex">
                                    <input type="file" class="form-control py-3 bg-transparent text-light border-0"
                                        name="foto_ktp" id="foto_ktp" required>
                                    <i class="bi bi-file-earmark-image align-self-center fs-3 pe-3"></i>
                                </div>
                                <label for="foto_kk" class="form-label">Foto KK</label>
                                <div class="input-group ps-2 mb-md-5 mb-3 d-flex">
                                    <input type="file" class="form-control py-3 bg-transparent text-light border-0"
                                        name="foto_kk" id="foto_kk" required>
                                    <i class="bi bi-file-earmark-image align-self-center fs-3 pe-3"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <a href="/" class="btn btn-submit">Kembali</a>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-submit">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
