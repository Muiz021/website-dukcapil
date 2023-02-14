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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>City</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Darius</td>
                                    <td>velit@nec.com</td>
                                    <td>0309 690 7871</td>
                                    <td>Ways</td>
                                    <td>
                                        <span class="badge bg-success">Diterima</span>
                                        <span class="badge bg-danger">Belum diperiksa</span>
                                    </td>
                                    <td>
                                        <a href="/admin/detailaktakelahiran" class="btn btn-sm btn-primary">Lihat Data</a>
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
