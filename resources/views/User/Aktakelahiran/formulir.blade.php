@extends('User.Layouts.app', ['title' => 'Formulir Pelaporan Kelahiran'])

@section('content')
    <section id="formulirkelahiran">
        <div class="row">
            <div class="col-12">
                <div class="card p-4">
                    <p class="fs-4 mb-4 text-center fw-semibold">SURAT PERNYATAAN TANGGUNG JAWAB MUTLAK (SPTJM) KEBENARAN
                        <br>
                        DATA KELAHIRAN
                    </p>
                    <form action="{{ route('aktakelahiran.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
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
                                                    <label for="namattdkelahiran" class="form-label">Nama Lengkap <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="namattdkelahiran"
                                                        id="namattdkelahiran" required
                                                        value="{{ auth()->user()->nama_kepala_keluarga }}"
                                                        placeholder="Masukkan Nama Lengkap yg ber tanda tangan">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nikttdkelahiran" class="form-label">NIK <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" name="nikttdkelahiran"
                                                        id="nikttdkelahiran" required
                                                        placeholder="Masukkan NIK yg ber tanda tangan">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="umurttdkelahiran" class="form-label">Umur <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" name="umurttdkelahiran"
                                                        id="umurttdkelahiran" required
                                                        placeholder="Masukkan Umur yg ber tanda tangan">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pekerjaanttdkelahiran" class="form-label">Pekerjaan <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="pekerjaanttdkelahiran"
                                                        id="pekerjaanttdkelahiran" required
                                                        placeholder="Masukkan Pekerjaan yg ber tanda tangan">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamatttdkelahiran" class="form-label">Alamat <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="alamatttdkelahiran"
                                                        id="alamatttdkelahiran" required
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
                                                    <label for="namaanak" class="form-label">Nama <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="namaanak"
                                                        id="namaanak" required placeholder="Masukkan Nama Anak yg lahir">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nikanak" class="form-label">NIK <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" name="nikanak"
                                                        id="nikanak" required placeholder="Masukkan NIK Anak">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ttlanak" class="form-label">Tempat, Tanggal Lahir <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="ttlanak"
                                                        id="ttlanak" required
                                                        placeholder="Masukkan Tempat, Tanggal Lahir Anak">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="anakke" class="form-label">Anak Ke <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" name="anakke"
                                                        id="anakke" required placeholder="Anak Ke berapa">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamatanak" class="form-label">Alamat <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="alamatanak"
                                                        id="alamatanak" required placeholder="Masukkan Alamat Anak">
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
                                                    <label for="namaibu" class="form-label">Nama Ibu <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="namaibu"
                                                        id="namaibu" required placeholder="Masukkan Nama Ibu Kandung">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nikibu" class="form-label">NIK <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" name="nikibu"
                                                        id="nikibu" required placeholder="Masukkan NIK Ibu Kandung">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ttlibu" class="form-label">Tempat, Tanggal Lahir <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="ttlibu"
                                                        id="ttlibu" required
                                                        placeholder="Masukkan Tempat, Tanggal Lahir Ibu">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pekerjaanibu" class="form-label">Pekerjaan <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="pekerjaanibu"
                                                        id="pekerjaanibu" required
                                                        placeholder="Masukkan Pekerjaan Ibu Kandung">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamatibu" class="form-label">Alamat <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="alamatibu"
                                                        id="alamatibu" required placeholder="Masukkan Alamat Ibu Kandung">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-1 mb-3 accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button type="button" class="accordion-button collapsed"
                                                data-bs-toggle="collapse" data-bs-target="#dokumen" aria-expanded="false"
                                                aria-controls="dokumen" role="tabpanel">
                                                Dokumen Persyaratan
                                            </button>
                                        </h2>
                                        <div id="dokumen" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body mt-3">
                                                <div class="mb-3">
                                                    <label for="bukunikah" class="form-label">Buku Nikah <span
                                                            class="text-danger">*</span></label>
                                                    <input type="file" class="form-control" name="bukunikah" required
                                                        id="bukunikah">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="suratketbidan" class="form-label">Surat Keterangan
                                                        Bidan <span class="text-danger">*</span></label>
                                                    <input type="file" class="form-control" name="suratketbidan"
                                                        required id="suratketbidan">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="ktportuaibu" class="form-label">KTP
                                                        Orangtua/Ibu <span class="text-danger">*</span></label>
                                                    <input type="file" class="form-control" name="ktportuaibu"
                                                        required id="ktportuaibu">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ktportuayah" class="form-label">KTP
                                                        Orangtua/Ayah <span class="text-danger">*</span></label>
                                                    <input type="file" class="form-control" name="ktportuayah"
                                                        required id="ktportuayah">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="kkkelahiran" class="form-label">Kartu Keluarga <span
                                                            class="text-danger">*</span></label>
                                                    <input type="file" class="form-control" name="kkkelahiran"
                                                        required id="kkkelahiran">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-end gap-3 mt-md-4">
                                    <a href="{{ route('aktakelahiran.index') }}" class="btn btn-danger"><i
                                            class="bi bi-arrow-left-circle"></i>
                                        Kembali</a>
                                    <button class="btn btn-primary"><i class="bi bi-cloud-arrow-up"></i>
                                        Kirim</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
