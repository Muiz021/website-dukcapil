@extends('Admin.Layouts.app', ['title' => 'Detail Data Akta Kelahiran'])

@section('content')
    <section id="aktakelahiran">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header fs-4 fw-bold">
                        Detail Data Akta Kelahiran
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="accordion" id="accordionExample">
                                    <div class="border-1 mb-3 accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button type="button" class="accordion-button collapsed"
                                                data-bs-toggle="collapse" data-bs-target="#ttdkelahiran"
                                                aria-expanded="false" aria-controls="ttdkelahiran" role="tabpanel">
                                                Data Kepala Keluarga yang berttd dibawah ini
                                            </button>
                                        </h2>
                                        <div id="ttdkelahiran" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body mt-3">
                                                <div class="mb-3">
                                                    <label for="namattdkelahiran" class="form-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control" name="namattdkelahiran"
                                                        id="namattdkelahiran" disabled
                                                        value="{{ $kelahiran->namattdkelahiran }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nikttdkelahiran" class="form-label">NIK</label>
                                                    <input type="number" class="form-control" name="nikttdkelahiran"
                                                        id="nikttdkelahiran" disabled
                                                        value="{{ $kelahiran->nikttdkelahiran }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="umurttdkelahiran" class="form-label">Umur</label>
                                                    <input type="number" class="form-control" name="umurttdkelahiran"
                                                        id="umurttdkelahiran" disabled
                                                        value="{{ $kelahiran->umurttdkelahiran }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pekerjaanttdkelahiran" class="form-label">Pekerjaan</label>
                                                    <input type="text" class="form-control" name="pekerjaanttdkelahiran"
                                                        id="pekerjaanttdkelahiran" disabled
                                                        value="{{ $kelahiran->pekerjaanttdkelahiran }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamatttdkelahiran" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamatttdkelahiran"
                                                        id="alamatttdkelahiran" disabled
                                                        value="{{ $kelahiran->alamatttdkelahiran }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-1 mb-3 accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button type="button" class="accordion-button collapsed"
                                                data-bs-toggle="collapse" data-bs-target="#menyatakan" aria-expanded="false"
                                                aria-controls="menyatakan" role="tabpanel">
                                                Menyatakan bahwa
                                            </button>
                                        </h2>
                                        <div id="menyatakan" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body mt-3">
                                                <div class="mb-3">
                                                    <label for="namaanak" class="form-label">Nama</label>
                                                    <input type="text" class="form-control" name="namaanak"
                                                        id="namaanak" disabled value="{{ $kelahiran->namaanak }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nikanak" class="form-label">NIK</label>
                                                    <input type="number" class="form-control" name="nikanak" id="nikanak"
                                                        disabled value="{{ $kelahiran->nikanak }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ttlanak" class="form-label">Tempat, Tanggal Lahir</label>
                                                    <input type="text" class="form-control" name="ttlanak"
                                                        id="ttlanak" disabled value="{{ $kelahiran->ttlanak }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="anakke" class="form-label">Anak Ke</label>
                                                    <input type="number" class="form-control" name="anakke"
                                                        id="anakke" disabled value="{{ $kelahiran->anakke }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamatanak" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamatanak" disabled
                                                        value="{{ $kelahiran->alamatanak }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="accordion" id="accordionExample">
                                    <div class="border-1 mb-3 accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button type="button" class="accordion-button collapsed"
                                                data-bs-toggle="collapse" data-bs-target="#anakkandung"
                                                aria-expanded="false" aria-controls="anakkandung" role="tabpanel">
                                                Adalah anak kandung dari
                                            </button>
                                        </h2>
                                        <div id="anakkandung" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body mt-3">
                                                <div class="mb-3">
                                                    <label for="namaibu" class="form-label">Nama Ibu</label>
                                                    <input type="text" class="form-control" name="namaibu"
                                                        id="namaibu" disabled value="{{ $kelahiran->namaibu }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nikibu" class="form-label">NIK</label>
                                                    <input type="number" class="form-control" name="nikibu"
                                                        id="nikibu" disabled value="{{ $kelahiran->nikibu }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ttlibu" class="form-label">Tempat, Tanggal Lahir</label>
                                                    <input type="text" class="form-control" name="ttlibu"
                                                        id="ttlibu" disabled value="{{ $kelahiran->ttlibu }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pekerjaanibu" class="form-label">Pekerjaan</label>
                                                    <input type="text" class="form-control" name="pekerjaanibu"
                                                        id="pekerjaanibu" disabled
                                                        value="{{ $kelahiran->pekerjaanibu }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamatibu" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamatibu"
                                                        id="alamatibu" disabled value="{{ $kelahiran->alamatibu }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-1 mb-3 accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button type="button" class="accordion-button collapsed"
                                                data-bs-toggle="collapse" data-bs-target="#yglahir" aria-expanded="false"
                                                aria-controls="yglahir" role="tabpanel">
                                                Yang lahir dengan penolong kelahiran
                                            </button>
                                        </h2>
                                        <div id="yglahir" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body mt-3">
                                                <div class="mb-3">
                                                    <label for="namapenolong" class="form-label">Nama</label>
                                                    <input type="text" class="form-control" name="namapenolong"
                                                        id="namapenolong" disabled
                                                        value="{{ $kelahiran->namapenolong }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nikpenolong" class="form-label">NIK</label>
                                                    <input type="number" class="form-control" name="nikpenolong"
                                                        id="nikpenolong" disabled
                                                        value="{{ $kelahiran->nikpenolong }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pekerjaanpenolong" class="form-label">Pekerjaan</label>
                                                    <input type="text" class="form-control" name="pekerjaanpenolong"
                                                        id="pekerjaanpenolong" disabled
                                                        value="{{ $kelahiran->pekerjaanpenolong }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamatpenolong" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamatpenolong"
                                                        id="alamatpenolong" disabled
                                                        value="{{ $kelahiran->alamatpenolong }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <p class="fw-semibold">Dokumen Persyaratan</p>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="bukunikah" class="form-label">Buku Nikah</label>
                                    <img src="/storage/{{ $kelahiran->bukunikah }}" class="form-control"
                                        alt="" loading="lazy">
                                </div>
                                <div class="mb-3">
                                    <label for="suratketbidan" class="form-label">Surat Keterangan Bidan</label>
                                    <img src="/storage/{{ $kelahiran->suratketbidan }}" class="form-control"
                                        alt="" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="ktportuaibu" class="form-label">KTP Orangtua/Ibu</label>
                                    <img src="/storage/{{ $kelahiran->ktportuaibu }}" class="form-control"
                                        alt="" loading="lazy">
                                </div>
                                <div class="mb-3">
                                    <label for="ktportuayah" class="form-label">KTP Orangtua/Ayah</label>
                                    <img src="/storage/{{ $kelahiran->ktportuayah }}" class="form-control"
                                        alt="" loading="lazy">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="kkkelahiran" class="form-label">Kartu Keluarga</label>
                                    <img src="/storage/{{ $kelahiran->kkkelahiran }}" class="form-control"
                                        alt="" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-end gap-3 mt-md-4">
                                    <a href="{{ route('datakelahiran.index') }}" class="btn btn-danger">
                                        Kembali</a>
                                    <form action="{{ route('verifikasi_dataaktakelahiran', $kelahiran->id) }}"
                                        method="POST" accept-charset="utf-8" style="display: inline">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="is_verification" value="1">
                                        @if ($kelahiran->is_verification != 1)
                                            <button type="submit" class="btn btn-success"
                                                onclick="confirm('Apakah data diterima?')">
                                                Terima
                                            </button>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
