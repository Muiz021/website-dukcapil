@extends('Admin.Layouts.app', ['title' => 'Kartu Keluarga'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <div class="d-flex">
                    <p class="fw-bold fs-5">No Kartu Keluarga {{ $data->nokk }}</p>
                </div>

                <div class="mt-3">
                    <table class="table table-responsive" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Status Hub Keluarga</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <p hidden>{{ $no = 1 }}</p>
                            @foreach ($datakk as $item)
                                @if ($data->nokk == $item->nokk)
                                    <tr>
                                        <td>{{ $no++ }}.</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nik }}</td>
                                        <td>{{ $item->statushubkeluarga }}</td>
                                        <td>
                                            lorem
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end mt-3">
                    <a href="{{ route('kkadmin.index') }}" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
