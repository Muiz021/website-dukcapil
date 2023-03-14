@extends('Admin.Layouts.app', ['title' => 'Data Akta Kematian'])

@section('content')
    <section id="aktakematian">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header fs-4 fw-bold">
                        Data Akta Kematian
                    </div>
                     <div class="card-body table-responsive">
                        <table class="table table-responsive" id="table1">
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
                                @foreach ($kematian as $item)
                                    <tr>
                                          <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->namaalm }}</td>
                                        <td>{{ $item->nikalm }}</td>
                                        <td>{{ $item->hari }}, {{ $item->tgl }}</td>
                                        <td>
                                             <span class="badge bg-success" {{ $item->is_verification == 1 ? '' : 'hidden' }}>Diterima</span>
                                            <span class="badge bg-danger" {{ $item->is_verification == 0 ? '' : 'hidden' }}>Belum diperiksa</span>
                                        </td>
                                        <td class="d-flex justify-content-center gap-2">
                                            <a href="/admin/detaildatakematian/{{ $item->id }}"
                                                class="btn btn-sm btn-primary">Lihat Data</a>
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
