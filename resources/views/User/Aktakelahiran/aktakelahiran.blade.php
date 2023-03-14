@extends('User.Layouts.app', ['title' => 'Akta Kelahiran'])

@section('content')
    <section id="kelahiran">
        <div class="row">
            <div class="col-12">
                <div class="card p-4">
                    <div class="d-flex">
                        <p class="fw-bold fs-5">Data Pelaporan Kelahiran</p>
                        <a href="{{ route('aktakelahiran.create') }}" class="btn btn-primary ms-auto pt-2"><i
                                class="bi bi-clipboard-plus"></i> Ajukan Pelaporan</a>
                    </div>
                    <p class="text-warning mt-md-0 mt-2"><i class="bi bi-exclamation-triangle-fill"> Jika data diproses lebih
                            dari 3hari, periksa kembali data anda, lalu perbaiki</i></p>

                    <div class="table-responsive table mt-4">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Anak</th>
                                    <th>Nama Ayah</th>
                                    <th>Nama Ibu</th>
                                    <th>Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($aktakelahiran as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->namaanak }}</td>
                                        <td>{{ $item->namaayah }}</td>
                                        <td>{{ $item->namaibu }}</td>
                                        <td>
                                            <span class="badge bg-success"
                                                {{ $item->is_verification == 1 ? '' : 'hidden' }}>Diterima</span>
                                            <span class="badge bg-danger"
                                                {{ $item->is_verification == 0 ? '' : 'hidden' }}>Diproses</span>
                                        </td>
                                        <td class="d-flex justify-content-center gap-2">
                                            <a href="/User/aktakelahiran/show/{{ $item->id }}"
                                                class="btn btn-sm btn-primary">Lihat Data</a>
                                            <a href="/User/aktakelahiran/edit/{{ $item->id }}"
                                                class="btn btn-sm btn-info"
                                                {{ $item->is_verification == 1 ? 'hidden' : '' }}>Edit Data</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
