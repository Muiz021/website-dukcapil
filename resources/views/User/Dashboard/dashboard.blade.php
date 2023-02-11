@extends('User.Layouts.app', ['title' => 'Dashboard User'])

@section('content')
    <section id="dashboard">
        <div class="row">
            <div class="col-md-4 mb-md-4 mb-3">
                <div class="card p-4">
                    <p class="title">Akta Kelahiran</p>
                    <p class="subtitle">Nama Anak</p>
                    <img src="{{ asset('assets/img/imgkelahiran.png') }}" alt="" width="100%" height="180px">
                    <div class="mt-3 d-flex">
                        <p class="my-auto text-success">Berhasil diproses...</p>
                        <button class="btn btn-success ms-auto btn-sm">Download <i class="bi bi-download"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
