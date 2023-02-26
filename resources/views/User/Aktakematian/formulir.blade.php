@extends('User.Layouts.app', ['title' => 'Formulir Pelaporan Kematian'])

@section('content')
    <section id="formulir">
        <div class="row">
            <div class="col-12">
                <div class="card p-4">
                    <p class="fs-4 mb-4 text-center fw-semibold">FORMULIR PELAPORAN KEMATIAN</p>
                    <form action="{{ route('aktakematian.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="accordion" id="accordionExample">
                                    <div class="border-1 mb-3 accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button type="button" class="accordion-button collapsed"
                                                data-bs-toggle="collapse" data-bs-target="#datadaerah" aria-expanded="false"
                                                aria-controls="datadaerah" role="tabpanel">
                                                Data Daerah
                                            </button>
                                        </h2>
                                        <div id="datadaerah" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body mt-3">
                                                <div class="mb-3">
                                                    <label for="kelurahan" class="form-label">Pemerintahan Desa
                                                        Kelurahan <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="kelurahan"
                                                        id="kelurahan" placeholder="Kediaman Almarhum/Almarhumah"
                                                        required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="kecamatan" class="form-label">Kecamatan <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="kecamatan"
                                                        id="kecamatan" placeholder="Kediaman Almarhum/Almarhumah"
                                                        required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="kabkota" class="form-label">Kabupaten/Kota <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="kabkota" id="kabkota"
                                                        placeholder="Kediaman Almarhum/Almarhumah" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-1 mb-3 accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button type="button" class="accordion-button collapsed"
                                                data-bs-toggle="collapse" data-bs-target="#yangberttd" aria-expanded="false"
                                                aria-controls="yangberttd" role="tabpanel">
                                                Yang bertanda tangan dibawah ini
                                            </button>
                                        </h2>
                                        <div id="yangberttd" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body mt-3">
                                                <div class="mb-3">
                                                    <label for="namattd" class="form-label">Nama Lengkap <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="namattd" id="namattd"
                                                        placeholder="Masukkan Nama Lengkap yg ber tanda tangan" required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nikttd" class="form-label">NIK <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" name="nikttd" id="nikttd"
                                                        placeholder="Masukkan NIK yg ber tanda tangan" required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="umurttd" class="form-label">Umur <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" name="umurttd" id="umurttd"
                                                        placeholder="Masukkan Umur yg ber tanda tangan" required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pekerjaanttd" class="form-label">Pekerjaan <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="pekerjaanttd"
                                                        id="pekerjaanttd"
                                                        placeholder="Masukkan Pekerjaan yg ber tanda tangan" required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamatttd" class="form-label">Alamat <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="alamatttd"
                                                        id="alamatttd" placeholder="Masukkan Alamat yg ber tanda tangan"
                                                        required />
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
                                                data-bs-toggle="collapse" data-bs-target="#hubungan"
                                                aria-expanded="false" aria-controls="hubungan" role="tabpanel">
                                                Hubungan dengan yang mati
                                            </button>
                                        </h2>
                                        <div id="hubungan" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body mt-3">
                                                <div class="mb-3">
                                                    <label for="keteranganlaporan" class="form-label">Melaporkan
                                                        Bahwa <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="keteranganlaporan"
                                                        id="keteranganlaporan" placeholder="Masukkan Keterangan Laporan"
                                                        required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="namaalm" class="form-label">Nama Lengkap <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="namaalm"
                                                        id="namaalm"
                                                        placeholder="Masukkan Nama Lengkap Almarhum/Almarhumah" required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nikalm" class="form-label">NIK <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" name="nikalm"
                                                        id="nikalm" placeholder="Masukkan NIK Almarhum/Almarhumah"
                                                        required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="umuralm" class="form-label">Umur <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" name="umuralm"
                                                        id="umuralm" placeholder="Masukkan Umur Almarhum/Almarhumah"
                                                        required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pekerjaanalm" class="form-label">Pekerjaan <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="pekerjaanalm"
                                                        id="pekerjaanalm"
                                                        placeholder="Masukkan Pekerjaan Almarhum/Almarhumah" required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="agamaalm" class="form-label">Agama <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="agamaalm"
                                                        id="agamaalm" placeholder="Masukkan Agama Almarhum/Almarhumah"
                                                        required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamatalm" class="form-label">Alamat <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="alamatalm"
                                                        id="alamatalm" placeholder="Masukkan Alamat Almarhum/Almarhumah"
                                                        required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-1 mb-3 accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button type="button" class="accordion-button collapsed"
                                                data-bs-toggle="collapse" data-bs-target="#waktumeninggal"
                                                aria-expanded="false" aria-controls="waktumeninggal" role="tabpanel">
                                                Telah meninggal dunia pada
                                            </button>
                                        </h2>
                                        <div id="waktumeninggal" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body mt-3">
                                                <div class="mb-3">
                                                    <label for="hari" class="form-label">Hari <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="hari"
                                                        id="hari" placeholder="Hari berpulang kerahmatullah"
                                                        required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tgl" class="form-label">Tanggal Kematian <span
                                                            class="text-danger">*</span></label>
                                                    <input type="date" class="form-control" name="tgl"
                                                        id="tgl" placeholder="Tanggal berpulang kerahmatullah"
                                                        required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pukul" class="form-label">Pukul <span
                                                            class="text-danger">*</span></label>
                                                    <input type="time" class="form-control" name="pukul"
                                                        id="pukul" placeholder="Pukul berpulang kerahmatullah"
                                                        required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="bertempat" class="form-label">Bertempat di <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="bertempat"
                                                        id="bertempat" placeholder="Tempat kediaman" required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="penyebab" class="form-label">Penyebab Kematian <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="penyebab"
                                                        id="penyebab" placeholder="Penyebab Kematian" required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="bukti" class="form-label">Bukti Kematian <span
                                                            class="text-danger">*</span></label>
                                                    <input type="file" class="form-control" name="bukti"
                                                        id="buti" placeholder="Bukti Kematian" required />
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
                                    <label for="kkasli" class="form-label">Kartu Keluarga Asli <span
                                            class="text-danger">*</span></label>
                                    <input type="file" class="form-control" name="kkasli" id="kkasli" required />
                                </div>
                                <div class="mb-3">
                                    <label for="ktppemohon" class="form-label">KTP Pemohon <span
                                            class="text-danger">*</span></label>
                                    <input type="file" class="form-control" name="ktppemohon" id="ktppemohon"
                                        required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="ktpsaksi1" class="form-label">KTP Saksi 1 <span
                                            class="text-danger">*</span></label>
                                    <input type="file" class="form-control" name="ktpsaksi1" id="ktpsaksi1"
                                        required />
                                </div>
                                <div class="mb-3">
                                    <label for="ktpsaksi2" class="form-label">KTP Saksi 2 <span
                                            class="text-danger">*</span></label>
                                    <input type="file" class="form-control" name="ktpsaksi2" id="ktpsaksi2"
                                        required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-end gap-3">
                                    <a href="{{ route('aktakematian.index') }}" class="btn btn-danger"><i
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
