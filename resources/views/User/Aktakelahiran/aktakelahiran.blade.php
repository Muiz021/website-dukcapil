@extends('User.Layouts.app', ['title' => 'Akta Kelahiran'])

@section('content')
    <section id="kelahiran">
        <div class="row">
            <div class="col-12">
                <div class="card p-4">
                    <div class="d-flex">
                        <p class="fw-bold fs-5">Data Pelaporan Kelahiran</p>
                        <a href="/user/formulirkelahiran" class="btn btn-primary ms-auto pt-2"><i
                                class="bi bi-clipboard-plus"></i> Ajukan Pelaporan</a>
                    </div>

                    <div class="table-responsive table mt-4">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pelapor</th>
                                    <th>Nama Anak</th>
                                    <th>Nama Ayah dan Ibu</th>
                                    <th>Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Aa</td>
                                    <td>Bb</td>
                                    <td>20 Desember 2023</td>
                                    <td>
                                        <p class="text-success mb-0">Diterima</p>
                                        <p class="text-info mb-0">Diproses</p>
                                    </td>
                                    <td class="d-flex justify-content-center gap-2">
                                        <a href="/user/showaktakelahiran" class="btn btn-sm btn-primary">Lihat Data</a>
                                        <a href="/user/editaktakelahiran" class="btn btn-sm btn-info">Edit Data</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
