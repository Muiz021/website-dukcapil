@extends('User.Layouts.app', ['title' => 'Kartu Keluarga'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <div class="d-flex">
                    <p class="fw-bold fs-5 mb-0 align-items-center d-flex">Data Kartu Keluarga</p>
                    <a href="{{ route('kk.show') }}" class="btn btn-primary ms-auto pt-2"> Lihat Kartu Keluarga</a>
                </div>
            </div>

            <div class="card mt-4 p-4">
                <p class="fw-bold fs-5 mb-0">Data Akta Kelahiran</p>
                <div class="table-responsive table mt-4">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kepala Keluarga</th>
                                <th>No Kartu Keluarga</th>
                                <th>Nama Anak</th>
                                <th>Nama Ibu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($aktakelahiran as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->namattdkelahiran }}</td>
                                    <td>{{ auth()->user()->nokk }}</td>
                                    <td>{{ $item->namaanak }}</td>
                                    <td>{{ $item->namaibu }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card mt-4 p-4">
                <p class="fw-bold fs-5 mb-0">Data Akta Kematian</p>
                <div class="table-responsive table mt-4">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pelapor</th>
                                <th>No Kartu Keluarga</th>
                                <th>Nama yang Meninggal</th>
                                <th>Waktu Meninggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($aktakematian as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->namattd }}</td>
                                    <td>{{ auth()->user()->nokk }}</td>
                                    <td>{{ $item->namaalm }}</td>
                                    <td>{{ $item->hari }}, {{ $item->tgl }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
