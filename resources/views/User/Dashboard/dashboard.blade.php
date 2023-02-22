<?php
use App\Models\Aktakelahiran;
use App\Models\Aktakematian;
?>

@extends('User.Layouts.app', ['title' => 'Dashboard User'])

@section('content')
    <section id="dashboard">
        <div class="row">
            <div class="col-md-3 mb-md-4 mb-3">
                <div class="card p-4">
                    <p class="title">Akta Kelahiran</p>
                    <p class="subtitle">Jumlah Pengajuan</p>
                    <img src="{{ asset('assets/img/imgkelahiran.png') }}" alt="" width="100%" height="140px" loading="lazy">
                    <div class="mt-3">
                        <p class="mb-0"><span
                                class="text-danger fw-bold fs-4">{{ Aktakelahiran::where('is_verification', '=', '0')->where('user_id', '=', auth()->user()->id)->count() }}
                            </span>Pengajuan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-md-4 mb-3">
                <div class="card p-4">
                    <p class="title">Akta Kematian</p>
                    <p class="subtitle">Jumlah Pengajuan</p>
                    <img src="{{ asset('assets/img/imgkematian.png') }}" alt="" width="100%" height="140px" loading="lazy">
                    <div class="mt-3">
                        <p class="mb-0"><span
                                class="text-danger fw-bold fs-4">{{ Aktakematian::where('is_verification', '=', '0')->where('user_id', '=', auth()->user()->id)->count() }}
                            </span>Pengajuan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-md-4 mb-3">
                <div class="card p-4">
                    <p class="title">Akta Kelahiran</p>
                    <p class="subtitle">Jumlah Diterima</p>
                    <img src="{{ asset('assets/img/imgkelahiran.png') }}" alt="" width="100%" height="140px" loading="lazy">
                    <div class="mt-3">
                        <p class="mb-0"><span
                                class="text-success fw-bold fs-4">{{ Aktakelahiran::where('is_verification', '=', '1')->where('user_id', '=', auth()->user()->id)->count() }}
                            </span>Diterima</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-md-4 mb-3">
                <div class="card p-4">
                    <p class="title">Akta Kematian</p>
                    <p class="subtitle">Jumlah Diterima</p>
                    <img src="{{ asset('assets/img/imgkematian.png') }}" alt="" width="100%" height="140px" loading="lazy">
                    <div class="mt-3">
                        <p class="mb-0"><span
                                class="text-success fw-bold fs-4">{{ Aktakematian::where('is_verification', '=', '1')->where('user_id', '=', auth()->user()->id)->count() }}
                            </span>Diterima</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
