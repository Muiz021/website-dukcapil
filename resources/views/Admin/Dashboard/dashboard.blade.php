@extends('Admin.Layouts.app', ['title' => 'Dashboard Admin'])

@section('content')
    <section id="dashboard">
        <div class="row">
            <div class="col-md-4 mb-md-4 mb-3">
                <div class="card p-4">
                    <p class="title">Akta Kelahiran</p>
                    <p class="subtitle">Jumlah Pengajuan</p>
                    <img src="{{ asset('assets/img/imgkelahiran.png') }}" alt="" width="100%" height="180px">
                    <div class="mt-3">
                        <p class="mb-0"><span class="text-danger fw-bold">100 </span>Pengajuan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-md-4 mb-3">
                <div class="card p-4">
                    <p class="title">Akta Kematian</p>
                    <p class="subtitle">Jumlah Pengajuan</p>
                    <img src="{{ asset('assets/img/imgkematian.png') }}" alt="" width="100%" height="180px">
                    <div class="mt-3">
                        <p class="mb-0"><span class="text-danger fw-bold">100 </span>Pengajuan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-md-4 mb-3">
                <div class="card p-4">
                    <p class="title">Data Masyarakat</p>
                    <p class="subtitle">Jumlah Pengajuan</p>
                    <img src="{{ asset('assets/img/imguser.png') }}" alt="" width="100%" height="180px">
                    <div class="mt-3">
                        <p class="mb-0"><span class="text-danger fw-bold">100 </span>Pengajuan</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-md-4 mb-3">
                <div class="card p-4">
                    <p class="title">Akta Kelahiran</p>
                    <p class="subtitle">Jumlah Selesai</p>
                    <img src="{{ asset('assets/img/imgkelahiransukses.png') }}" alt="" width="100%" height="180px">
                    <div class="mt-3">
                        <p class="mb-0"><span class="text-success fw-bold">100 </span>Selesai</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-md-4 mb-3">
                <div class="card p-4">
                    <p class="title">Akta Kematian</p>
                    <p class="subtitle">Jumlah Selesai</p>
                    <img src="{{ asset('assets/img/imgkematiansukses.png') }}" alt="" width="100%" height="180px">
                    <div class="mt-3">
                        <p class="mb-0"><span class="text-success fw-bold">100 </span>Selesai</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-md-4 mb-3">
                <div class="card p-4">
                    <p class="title">Data Masyarakat</p>
                    <p class="subtitle">Jumlah Selesai</p>
                    <img src="{{ asset('assets/img/imgusersukses.png') }}" alt="" width="100%" height="180px">
                    <div class="mt-3">
                        <p class="mb-0"><span class="text-success fw-bold">100 </span>Selesai</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
