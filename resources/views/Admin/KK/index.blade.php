@extends('Admin.Layouts.app', ['title' => 'Kartu Keluarga'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <div class="d-flex">
                    <p class="fw-bold fs-5">Data Kartu Keluarga Masyarakat</p>
                    <a href="{{ route('kkadmin.create') }}" class="btn btn-primary ms-auto pt-2"><i
                            class="bi bi-clipboard-plus"></i> Data Kepala Keluarga</a>
                </div>

                <div class="table-responsive table mt-4">
                    <table class="table table-responsive" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor KK</th>
                                <th>Nama Kepala Keluarga</th>
                                <th>NIK Kepala Keluarga</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kk as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nokk }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->nik }}</td>
                                    <td class="d-flex justify-content-center gap-2">
                                        <a href="/admin/kartukeluarga/createanggota/{{$item->nokk}}" class="btn btn-sm btn-success"><i
                                                class="bi bi-person-plus"></i></a>
                                        <a href="/admin/kartukeluarga/nokartu/{{ $item->nokk }}" class="btn btn-sm btn-primary"><i class="bi bi-dash"></i></a>
                                        <a href="/admin/kartukeluarga/edit/{{ $item->id }}"
                                            class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                                        <form action="/admin/kartukeluarga/{{ $item->id }}" method="post">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                <i class="bi bi-trash"></i>
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
@endsection
