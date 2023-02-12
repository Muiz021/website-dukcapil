@extends('User.Layouts.app', ['title' => 'Akta Kelahiran'])

@section('content')
    <section id="editkelahiran">
        <div class="row">
            <div class="col-12">
                <div class="card p-4">
                    <p class="fs-4 fw-semibold">Halaman Edit Data Akta Kelahiran</p>
                    <form action="">
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
                                                        id="namattdkelahiran"
                                                        placeholder="Masukkan Nama Lengkap yg ber tanda tangan">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nikttdkelahiran" class="form-label">NIK</label>
                                                    <input type="number" class="form-control" name="nikttdkelahiran"
                                                        id="nikttdkelahiran" placeholder="Masukkan NIK yg ber tanda tangan">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="umurttdkelahiran" class="form-label">Umur</label>
                                                    <input type="number" class="form-control" name="umurttdkelahiran"
                                                        id="umurttdkelahiran"
                                                        placeholder="Masukkan Umur yg ber tanda tangan">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pekerjaanttdkelahiran" class="form-label">Pekerjaan</label>
                                                    <input type="text" class="form-control" name="pekerjaanttdkelahiran"
                                                        id="pekerjaanttdkelahiran"
                                                        placeholder="Masukkan Pekerjaan yg ber tanda tangan">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamatttdkelahiran" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamatttdkelahiran"
                                                        id="alamatttdkelahiran"
                                                        placeholder="Masukkan Alamat yg ber tanda tangan">
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
                                                        id="namaanak" placeholder="Masukkan Nama Anak yg lahir">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nikanak" class="form-label">NIK</label>
                                                    <input type="number" class="form-control" name="nikanak" id="nikanak"
                                                        placeholder="Masukkan NIK Anak">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ttlanak" class="form-label">Tempat, Tanggal Lahir</label>
                                                    <input type="text" class="form-control" name="ttlanak"
                                                        id="ttlanak" placeholder="Masukkan Tempat, Tanggal Lahir Anak">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="anakke" class="form-label">Anak Ke</label>
                                                    <input type="number" class="form-control" name="anakke"
                                                        id="anakke" placeholder="Anak Ke berapa">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamatanak" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamatanak"
                                                        id="alamatanak" placeholder="Masukkan Alamat Anak">
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
                                                        id="namaibu" placeholder="Masukkan Nama Ibu Kandung">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nikibu" class="form-label">NIK</label>
                                                    <input type="number" class="form-control" name="nikibu"
                                                        id="nikibu" placeholder="Masukkan NIK Ibu Kandung">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ttlibu" class="form-label">Tempat, Tanggal Lahir</label>
                                                    <input type="text" class="form-control" name="ttlibu"
                                                        id="ttlibu" placeholder="Masukkan Tempat, Tanggal Lahir Ibu">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pekerjaanibu" class="form-label">Pekerjaan</label>
                                                    <input type="text" class="form-control" name="pekerjaanibu"
                                                        id="pekerjaanibu" placeholder="Masukkan Pekerjaan Ibu Kandung">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamatibu" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamatibu"
                                                        id="alamatibu" placeholder="Masukkan Alamat Ibu Kandung">
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
                                                        id="namapenolong" placeholder="Masukkan Nama Penolong">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nikpenolong" class="form-label">NIK</label>
                                                    <input type="number" class="form-control" name="nikpenolong"
                                                        id="nikpenolong" placeholder="Masukkan NIK Penolong">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pekerjaanpenolong" class="form-label">Pekerjaan</label>
                                                    <input type="text" class="form-control" name="pekerjaanpenolong"
                                                        id="pekerjaanpenolong" placeholder="Masukkan Pekerjaan Penolong">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamatpenolong" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamatpenolong"
                                                        id="alamatpenolong" placeholder="Masukkan Alamat Penolong">
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
                                    <input type="file" class="form-control" name="bukunikah" id="bukunikah">
                                </div>
                                <div class="mb-3">
                                    <label for="suratketbidan" class="form-label">Surat Keterangan Bidan</label>
                                    <input type="file" class="form-control" name="suratketbidan" id="suratketbidan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="ktportuaibu" class="form-label">KTP Orangtua/Ibu</label>
                                    <input type="file" class="form-control" name="ktportuaibu" id="ktportuaibu">
                                </div>
                                <div class="mb-3">
                                    <label for="ktportuayah" class="form-label">KTP Orangtua/Ayah</label>
                                    <input type="file" class="form-control" name="ktportuayah" id="ktportuayah">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="kkkelahiran" class="form-label">Kartu Keluarga</label>
                                    <input type="file" class="form-control" name="kkkelahiran" id="kkkelahiran">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-end gap-3 mt-md-4">
                                    <a href="" class="btn btn-danger"><i class="bi bi-arrow-left-circle"></i>
                                        Kembali</a>
                                    <a href="" class="btn btn-primary"><i class="bi bi-cloud-arrow-up"></i>
                                        Update</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
