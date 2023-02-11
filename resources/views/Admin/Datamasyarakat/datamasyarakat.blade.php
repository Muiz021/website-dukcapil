@extends('Admin.Layouts.app', ['title' => 'Data Masyarakat'])

@section('content')
    <section id="datamasyarakat">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header fs-4 fw-bold">
                        Data Masyarakat
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-responsive" id="table1">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Nama Lengkap</th>
                                    <th>NIK</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Darius</td>
                                    <td>velit@nec.com</td>
                                    <td>1234567123452</td>
                                    <td>
                                        <span class="badge bg-success">Active</span>
                                        <span class="badge bg-danger">Belum Active</span>
                                    </td>
                                    <td>
                                        <a href="/admin/showdatamasyarakat" class="btn btn-primary btn-sm">Lihat Data</a>
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
