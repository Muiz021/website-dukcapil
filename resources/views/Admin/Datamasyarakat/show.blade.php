@extends('Admin.Layouts.app', ['title' => 'Data Masyarakat'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <p class="fs-4 fw-bold">Detail Data Masyarakat</p>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" disabled value="{{ $user->username }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" disabled value="{{ $user->nama_lengkap }}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NIK</label>
                            <input type="text" class="form-control" disabled value="{{ $user->nik }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Foto KTP</label>
                            <img src="/storage/{{ $user->foto_ktp }}" width="100%" alt="" loading="lazy"
                                class="form-control p-2">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Foto KK</label>
                            <img src="/storage/{{ $user->foto_kk }}" width="100%" alt="" loading="lazy" class="form-control p-2">
                        </div>
                        <div class="mb-3 d-flex justify-content-end gap-3">
                            <a href="{{ route('datamasyarakat.index') }}" class="btn btn-danger">Kembali</a>
                            <form action="{{ route('verifikasi_user', $user->id) }}" method="POST" accept-charset="utf-8"
                                style="display: inline">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="is_verification" value="1">
                                @if ($user->is_verification != 1)
                                    <button type="submit" class="btn btn-success"
                                        onclick="confirm('Apakah ingin di verifikasi?')">
                                        <i class="bi bi-person-check"></i> Verifikasi
                                    </button>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
