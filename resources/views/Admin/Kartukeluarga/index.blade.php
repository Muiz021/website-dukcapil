@extends('Admin.Layouts.app', ['title' => 'Kartu Keluarga'])

@section('content')
    <section id="kk">
          <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header fs-4 fw-bold">
                        Data Kartu Keluarga
                    </div>
                     <div class="card-body table-responsive">
                        <table class="table table-responsive" id="table1">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Username/Email</th>
                                    <th>Nama Kepala Keluarga</th>
                                    <th>Nomor KK</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datakk as $item)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->username }}</td>
                                        <td>{{ $item->nama_lengkap }}</td>
                                        <td>{{ $item->nik }}</td>
                                        <td class="d-flex justify-content-center gap-2">
                                            <a href="/admin/detaildatakematian/{{ $item->id }}"
                                                class="btn btn-sm btn-primary">Lihat Data KK</a>
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
