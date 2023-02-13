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
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $item)
                                    <tr>
                                        <td>{{ $item->username }}</td>
                                        <td>{{ $item->nama_lengkap }}</td>
                                        <td>{{ $item->nik }}</td>
                                        <td>
                                            <span class="badge bg-success"
                                                {{ $item->is_verification == 1 ? '' : 'hidden' }}>Active</span>
                                            <span class="badge bg-danger"
                                                {{ $item->is_verification == 0 ? '' : 'hidden' }}>Belum Active</span>
                                        </td>
                                        <td class="d-flex justify-content-center gap-3">
                                            <a href="/admin/showdatamasyarakat/{{ $item->id }}"
                                                class="btn btn-primary btn-sm">Lihat
                                                Data</a>

                                            <form action="/admin/datamasyarakat/{{ $item->id }}" method="post">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                    Hapus Akun
                                                </button>
                                            </form>
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
