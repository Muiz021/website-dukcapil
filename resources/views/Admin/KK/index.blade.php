@extends('Admin.Layouts.app', ['title' => 'Kartu Keluarga User'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <div class="d-flex">
                    <p class="fw-bold fs-5">Data Kartu Keluarga Masyarakat</p>
                    <a href="" class="btn btn-primary ms-auto pt-2"><i
                            class="bi bi-clipboard-plus"></i> Tambahkan Data</a>
                </div>

                <div class="table-responsive table mt-4">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor Kartu Keluarga</th>
                                <th>Nama Kepala Keluarga</th>
                                <th>NIK Kepala Keluarga</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
