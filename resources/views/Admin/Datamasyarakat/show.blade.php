@extends('Admin.Layouts.app', ['title' => 'Data Masyarakat'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <p class="fs-4 fw-bold">Detail Data Masyarakat</p>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" disabled value="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NIK</label>
                            <input type="text" class="form-control" disabled value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Foto KTP</label>
                            <img src="{{ asset('/assets/img/favicon/favicon.ico') }}" width="100%" alt=""
                                class="form-control p-2">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Foto KK</label>
                            <img src="{{ asset('/assets/img/favicon/favicon.ico') }}" width="100%" alt=""
                                class="form-control p-2">
                        </div>
                        <div class="mb-3 d-flex justify-content-end gap-3">
                            <a href="#" class="btn btn-danger">Tolak</a>
                            <a href="#" class="btn btn-success">Terima</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
