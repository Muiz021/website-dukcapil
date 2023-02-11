@extends('Admin.Layouts.app', ['title' => 'Akta Kematian'])

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
                                    <th>Username</th>
                                    <th>Nama Pelapor</th>
                                    <th>Nama Alm</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Darius</td>
                                    <td>velit@nec.com</td>
                                    <td>Ways</td>
                                    <td>
                                        <span class="badge bg-success">Diterima</span>
                                        <span class="badge bg-danger">Belum diperikas</span>
                                    </td>
                                    <td>
                                        <a href="/admin/detailaktakematian" class="btn btn-primary btn-sm">Lihat Data</a>
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
