<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Registrasi</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/imglogin.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    @include('sweetalert::alert')
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card px-5 py-4 border-0" style="margin-top:2%;">
                        <img src="{{ asset('assets/img/imglogin.png') }}" alt="" class="d-block mx-auto"
                            width="60px">
                        <p class="text-center fs-3 fw-semibold mb-5 mt-2 title">SignUp</p>
                        @if (session('success'))
                            <p class="alert alert-success">{{ session('success') }}</p>
                        @endif
                        @if (session('wait'))
                            <p class="alert alert-danger">{{ session('wait') }}</p>
                        @endif
                        @if ($errors->any())
                            @foreach ($errors->all() as $err)
                                <p class="alert alert-danger">{{ $err }}</p>
                            @endforeach
                        @endif
                        <form action="{{ route('register.action') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username/Email <span
                                                class="text-danger">*</span></label>
                                        <input type="email" name="username" id="username"
                                            class=" py-3 ps-4 form-control" placeholder="Masukkan Username/Email anda"
                                            required>
                                    </div>
                                    <label for="pass" class="form-label">Password <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="password" name="password" id="pass"
                                            class=" py-3 ps-4 form-control" placeholder="Masukkan Password" required>
                                        <span id="mybutton" onclick="lihat()" class="input-group-text"
                                            style="cursor:pointer;">
                                            <i class="bi bi-eye-fill"></i>
                                        </span>
                                    </div>
                                    <label for="pass" class="form-label">Konfirmasi Password<span
                                            class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="password" name="password" id="pass"
                                            class=" py-3 ps-4 form-control" placeholder="Masukkan Konfirmasi Password"
                                            required>
                                        <span id="mybutton" onclick="lihat()" class="input-group-text"
                                            style="cursor:pointer;">
                                            <i class="bi bi-eye-fill"></i>
                                        </span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama_kepala_keluarga" class="form-label">Nama Kepala
                                            Keluarga <span class="text-danger">*</span></label>
                                        <input type="text" name="nama_kepala_keluarga" id="nama_kepala_keluarga"
                                            class=" py-3 ps-4 form-control" placeholder="Nama Lengkap Kepala Keluarga"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nokk" class="form-label">Nomor Kartu Keluarga <span
                                                class="text-danger">*</span></label>
                                        <input type="number" name="nokk" id="nokk"
                                            class=" py-3 ps-4 form-control"
                                            placeholder="Masukkan Nomor Kartu Keluarga Anda" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="foto_ktp" class="form-label">Foto KTP <span
                                                class="text-danger">*</span></label>
                                        <input type="file" name="foto_ktp" id="foto_ktp"
                                            class=" py-3 ps-4 form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="foto_kk" class="form-label">Foto KK <span
                                                class="text-danger">*</span></label>
                                        <input type="file" name="foto_kk" id="foto_kk"
                                            class=" py-3 ps-4 form-control" required>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <a href="/" class="btn btn-danger w-100 py-md-3 py-2">Kembali</a>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-cyan w-100 py-md-3 py-2">Daftar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // membuat fungsi lihat
        function lihat() {

            // membuat variabel berisi tipe input dari id='pass', id='pass' adalah form input password 
            var x = document.getElementById('pass').type;

            //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
            if (x == 'password') {

                //ubah form input password menjadi text
                document.getElementById('pass').type = 'text';

                //ubah icon mata terbuka menjadi tertutup
                document.getElementById('mybutton').innerHTML = `<i class="bi bi-eye-slash-fill"></i>`;
            } else {

                //ubah form input password menjadi text
                document.getElementById('pass').type = 'password';

                //ubah icon mata terbuka menjadi tertutup
                document.getElementById('mybutton').innerHTML = `<i class="bi bi-eye-fill"></i>`;
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
