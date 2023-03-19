@extends('Admin.Layouts.app', ['title' => 'Kartu Keluarga'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <div class="d-flex">
                    <p class="fw-bold fs-5">Data Kartu Keluarga Masyarakat</p>
                    <a href="{{ route('kkadmin.create') }}" class="btn btn-primary ms-auto pt-2"><i
                            class="bi bi-clipboard-plus"></i> Tambahkan Data</a>
                </div>

                <div class="table-responsive table mt-4">
                    <table class="table table-responsive" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor KK</th>
                                <th>Nama Kepala Keluarga</th>
                                <th>NIK Kepala Keluarga</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kk as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nokk }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->nik }}</td>
                                    <td class="d-flex justify-content-center gap-2">
                                        <button class="btn btn-sm btn-success">+ Anggota</button>
                                        <button class="btn btn-sm btn-primary">Lihat KK</button>
                                        <button class="btn btn-sm btn-warning">Edit</button>
                                        <button class="btn btn-sm btn-danger">Hapus</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
