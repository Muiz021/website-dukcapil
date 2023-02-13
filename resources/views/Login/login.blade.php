<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/imglogin.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <section id="login" style="contain: content;">
        <div class="row">
            <div class="col-md-5 kiri">
                <img src="{{ asset('assets/img/imglogin.png') }}" alt="">
            </div>
            <div class="col-md-7 kanan">
                <p class="title">Log In</p>
                <div class="mx-auto">
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
                    <form action="{{ route('login.action') }}" method="POST">
                        @csrf
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group mb-4 d-flex">
                            <input type="text" class="form-control py-3 bg-transparent text-light border-0"
                                name="username" id="username" placeholder="Username Email/Petugas" required>
                            <i class="bi bi-person-fill align-self-center fs-3 pe-3"></i>
                        </div>
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group mb-5 d-flex">
                            <input type="password" class="form-control py-3 bg-transparent text-light border-0"
                                name="password" id="password" placeholder="Password" required>
                            <i class="bi bi-key-fill align-self-center fs-3 pe-3"></i>
                        </div>
                        <select class="form-select py-3 bg-transparent text-light mb-5"
                            aria-label="Default select example">
                            <option class="bg-dark" selected>Level User</option>
                            <option class="bg-dark" value="Admin">Admin</option>
                            <option class="bg-dark" value="Masyarakat">Masyarakat</option>
                        </select>
                        <div class="row">
                            <div class="col-6">
                                <a href="{{ route('register') }}" class="btn btn-submit">Daftar</a>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-submit">Masuk</button>
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
