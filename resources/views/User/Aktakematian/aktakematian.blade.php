@extends('User.Layouts.app', ['title' => 'Akta Kematian'])

@section('content')
    <section id="kematian">
        <div class="row">
            <div class="col-12">
                <div class="card p-4">
                    <div class="d-flex">
                        <p class="fw-bold fs-5">Data Pelaporan Kematian</p>
                        <a href="{{ route('aktakematian.create') }}" class="btn btn-primary ms-auto pt-2"><i
                                class="bi bi-clipboard-plus"></i> Ajukan Pelaporan</a>
                    </div>
                    <p class="text-warning mt-md-0 mt-2"><i class="bi bi-exclamation-triangle-fill"> Jika data diproses lebih
                            dari 3hari, periksa kembali data anda, lalu perbaiki</i></p>

                    <div class="table-responsive table mt-4">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama yang Meninggal</th>
                                    <th>NIK yang Meninggal</th>
                                    <th>Waktu Meninggal</th>
                                    <th>Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($aktakematian as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->namaalm }}</td>
                                        <td>{{ $item->nikalm }}</td>
                                        <td>{{ $item->hari }}, {{ $item->tgl }}</td>
                                        <td>
                                            <span class="badge bg-success"
                                                {{ $item->is_verification == 1 ? '' : 'hidden' }}>Diterima</span>
                                            <span class="badge bg-danger"
                                                {{ $item->is_verification == 0 ? '' : 'hidden' }}>Diproses</span>
                                        </td>
                                        <td class="d-flex justify-content-center gap-2">
                                            <a href="/User/aktakematian/show/{{ $item->id }}"
                                                class="btn btn-sm btn-primary">Lihat Data</a>
                                            <a href="/User/aktakematian/edit/{{ $item->id }}"
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
