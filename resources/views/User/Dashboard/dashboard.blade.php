<?php
use App\Models\Aktakelahiran;
use App\Models\Aktakematian;
?>

@extends('User.Layouts.app', ['title' => 'Dashboard User'])

@section('content')
    <section id="dashboard">
        <div class="row">
            <div class="col-md-4 mb-md-4 mb-3">
                <div class="card p-4">
                    <p class="title fs-5">Kartu Keluarga</p>
                    <img src="{{ asset('assets/img/imgkk.jpg') }}" alt="" loading="lazy">
                    <a href="{{ route('kk.index') }}" class="btn btn-primary w-100">Lihat Data</a>
                </div>
            </div>
            <div class="col-md-4 mb-md-4 mb-3">
                <div class="card p-4">
                    <p class="title fs-5">Akta Kelahiran</p>
                    <img src="{{ asset('assets/img/imgkk.jpg') }}" alt="" loading="lazy">
                    <a href="{{ route('aktakelahiran.index') }}" class="btn btn-primary w-100">Ajukan Akta Kelahiran</a>
                </div>
            </div>
            <div class="col-md-4 mb-md-4 mb-3">
                <div class="card p-4">
                    <p class="title fs-5">Akta Kematian</p>
                    <img src="{{ asset('assets/img/imgkk.jpg') }}" alt="" loading="lazy">
                    <a href="{{ route('aktakematian.index') }}" class="btn btn-primary w-100">Ajukan Akta Kematian</a>
                </div>
            </div>
        </div>
    </section>
@endsection
