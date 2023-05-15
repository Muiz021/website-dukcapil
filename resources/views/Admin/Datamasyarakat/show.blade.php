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
                                    <label class="form-label">Nama Kepala Keluarga</label>
                                    <input type="text" class="form-control" disabled
                                        value="{{ $user->nama_kepala_keluarga }}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor Kartu Keluarga</label>
                            <input type="text" class="form-control" disabled value="{{ $user->nokk }}">
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
                            <img src="/storage/{{ $user->foto_kk }}" width="100%" alt="" loading="lazy"
                                class="form-control p-2">
                        </div>
                        <div class="mb-3 d-flex justify-content-end gap-3">
                            <a href="{{ route('datamasyarakat.index') }}" class="btn btn-danger">Kembali</a>
                            <form action="{{ route('verifikasi_user', $user->id) }}" method="POST" accept-charset="utf-8"
                                style="display: inline">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="is_verification" value="1">
                                @if ($user->is_verification != 1)
                                    <button type="submit" class="btn btn-success">
                                        <i class="bi bi-person-check"></i> Verifikasi
                                    </button>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card p-4 mt-3">

                <div class="table-responsive table mt-4">
                    <table class="table table-responsive" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor KK</th>
                                <th>Nama Kepala Keluarga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kartukeluarga as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nokk }}</td>
                                    <td>{{ $item->nama }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
