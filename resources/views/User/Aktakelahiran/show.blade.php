@extends('User.Layouts.app', ['title' => 'Akta Kelahiran'])

@section('content')
    <section id="aktakelahiran">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header fs-4 fw-bold">
                        Halaman Lihat Data Akta Kelahiran
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
                                                Saya yang bertanda tangan dibawah ini
                                            </button>
                                        </h2>
                                        <div id="ttdkelahiran" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body mt-3">
                                                <div class="mb-3">
                                                    <label for="namattdkelahiran" class="form-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control" name="namattdkelahiran"
                                                        id="namattdkelahiran" disabled
                                                        value="{{ $aktakelahiran->namattdkelahiran }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nikttdkelahiran" class="form-label">NIK</label>
                                                    <input type="number" class="form-control" name="nikttdkelahiran"
                                                        id="nikttdkelahiran" disabled
                                                        value="{{ $aktakelahiran->nikttdkelahiran }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="umurttdkelahiran" class="form-label">Umur</label>
                                                    <input type="number" class="form-control" name="umurttdkelahiran"
                                                        id="umurttdkelahiran" disabled
                                                        value="{{ $aktakelahiran->umurttdkelahiran }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pekerjaanttdkelahiran" class="form-label">Pekerjaan</label>
                                                    <input type="text" class="form-control" name="pekerjaanttdkelahiran"
                                                        id="pekerjaanttdkelahiran" disabled
                                                        value="{{ $aktakelahiran->pekerjaanttdkelahiran }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamatttdkelahiran" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamatttdkelahiran"
                                                        id="alamatttdkelahiran" disabled
                                                        value="{{ $aktakelahiran->alamatttdkelahiran }}">
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
                                                        id="namaanak" disabled value="{{ $aktakelahiran->namaanak }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nikanak" class="form-label">NIK</label>
                                                    <input type="number" class="form-control" name="nikanak" id="nikanak"
                                                        disabled value="{{ $aktakelahiran->nikanak }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ttlanak" class="form-label">Tempat, Tanggal Lahir</label>
                                                    <input type="text" class="form-control" name="ttlanak"
                                                        id="ttlanak" disabled value="{{ $aktakelahiran->ttlanak }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="anakke" class="form-label">Anak Ke</label>
                                                    <input type="number" class="form-control" name="anakke"
                                                        id="anakke" disabled value="{{ $aktakelahiran->anakke }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamatanak" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamatanak" disabled
                                                        value="{{ $aktakelahiran->alamatanak }}">
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
                                                        id="namaibu" disabled value="{{ $aktakelahiran->namaibu }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nikibu" class="form-label">NIK</label>
                                                    <input type="number" class="form-control" name="nikibu"
                                                        id="nikibu" disabled value="{{ $aktakelahiran->nikibu }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ttlibu" class="form-label">Tempat, Tanggal Lahir</label>
                                                    <input type="text" class="form-control" name="ttlibu"
                                                        id="ttlibu" disabled value="{{ $aktakelahiran->ttlibu }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pekerjaanibu" class="form-label">Pekerjaan</label>
                                                    <input type="text" class="form-control" name="pekerjaanibu"
                                                        id="pekerjaanibu" disabled
                                                        value="{{ $aktakelahiran->pekerjaanibu }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamatibu" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamatibu"
                                                        id="alamatibu" disabled value="{{ $aktakelahiran->alamatibu }}">
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
                                                        value="{{ $aktakelahiran->namapenolong }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nikpenolong" class="form-label">NIK</label>
                                                    <input type="number" class="form-control" name="nikpenolong"
                                                        id="nikpenolong" disabled
                                                        value="{{ $aktakelahiran->nikpenolong }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pekerjaanpenolong" class="form-label">Pekerjaan</label>
                                                    <input type="text" class="form-control" name="pekerjaanpenolong"
                                                        id="pekerjaanpenolong" disabled
                                                        value="{{ $aktakelahiran->pekerjaanpenolong }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamatpenolong" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamatpenolong"
                                                        id="alamatpenolong" disabled
                                                        value="{{ $aktakelahiran->alamatpenolong }}">
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
                                    <img src="/storage/{{ $aktakelahiran->bukunikah }}" class="form-control"
                                        alt="">
                                </div>
                                <div class="mb-3">
                                    <label for="suratketbidan" class="form-label">Surat Keterangan Bidan</label>
                                    <img src="/storage/{{ $aktakelahiran->suratketbidan }}" class="form-control"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="ktportuaibu" class="form-label">KTP Orangtua/Ibu</label>
                                    <img src="/storage/{{ $aktakelahiran->ktportuaibu }}" class="form-control"
                                        alt="">
                                </div>
                                <div class="mb-3">
                                    <label for="ktportuayah" class="form-label">KTP Orangtua/Ayah</label>
                                    <img src="/storage/{{ $aktakelahiran->ktportuayah }}" class="form-control"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="kkkelahiran" class="form-label">Kartu Keluarga</label>
                                    <img src="/storage/{{ $aktakelahiran->kkkelahiran }}" class="form-control"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-end gap-3 mt-md-4">
                                    <a href="{{ route('aktakelahiran.index') }}" class="btn btn-danger"><i
                                            class="bi bi-arrow-left-circle"></i>
                                        Kembali</a>
                                    <button class="btn btn-success" {{ $aktakelahiran->is_verification == 1 ? '' : 'hidden' }}>Download Surat<i
                                            class="bi bi-download"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
