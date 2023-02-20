@extends('Admin.Layouts.app', ['title' => 'Data Akta Kelahiran'])

@section('content')
    <section id="aktakelahiran">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header fs-4 fw-bold">
                        Data Akta Kelahiran
                    </div>

                    <div class="card-body table-responsive">
                        <table class="table table-responsive" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kepala Keluarga</th>
                                    <th>Nama Anak</th>
                                    <th>Nama Ibu</th>
                                    <th>Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kelahiran as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->namattdkelahiran }}</td>
                                        <td>{{ $item->namaanak }}</td>
                                        <td>{{ $item->namaibu }}</td>
                                        <td>
                                            <span class="badge bg-success"
                                                {{ $item->is_verification == 1 ? '' : 'hidden' }}>Diterima</span>
                                            <span class="badge bg-danger"
                                                {{ $item->is_verification == 0 ? '' : 'hidden' }}>Belum diperiksa</span>
                                        </td>
                                        <td class="d-flex justify-content-center gap-2">
                                            <a href="/admin/detaildatakelahiran/{{ $item->id }}"
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
