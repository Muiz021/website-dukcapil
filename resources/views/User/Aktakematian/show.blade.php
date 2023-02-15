@extends('User.Layouts.app', ['title' => 'Akta Kematian'])

@section('content')
    <section id="aktakematian">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header fs-4 fw-bold">
                        Halaman Lihat Data Akta Kematian
                    </div>
                    <div class="card-body">
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
                                                        Kelurahan</label>
                                                    <input type="text" class="form-control" disabled
                                                        value="{{ $aktakematian->kelurahan }}" name="kelurahan"
                                                        id="kelurahan">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="kecamatan" class="form-label">Kecamatan</label>
                                                    <input type="text" class="form-control" disabled
                                                        value="{{ $aktakematian->kecamatan }}" name="kecamatan"
                                                        id="kecamatan">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="kabkota" class="form-label">Kabupaten/Kota </label>
                                                    <input type="text" class="form-control" disabled
                                                        value="{{ $aktakematian->kabkota }}" name="kabkota" id="kabkota">
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
                                                    <label for="namattd" class="form-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control" disabled
                                                        value="{{ $aktakematian->namattd }}" name="namattd" id="namattd">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nikttd" class="form-label">NIK</label>
                                                    <input type="number" class="form-control" disabled
                                                        value="{{ $aktakematian->nikttd }}" name="nikttd" id="nikttd">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="umurttd" class="form-label">Umur</label>
                                                    <input type="number" class="form-control" disabled
                                                        value="{{ $aktakematian->umurttd }}" name="umurttd" id="umurttd">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pekerjaanttd" class="form-label">Pekerjaan</label>
                                                    <input type="text" class="form-control" disabled
                                                        value="{{ $aktakematian->pekerjaanttd }}" name="pekerjaanttd"
                                                        id="pekerjaanttd">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamatttd" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" disabled
                                                        value="{{ $aktakematian->alamatttd }}" name="alamatttd"
                                                        id="alamatttd">
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
                                                        Bahwa</label>
                                                    <input type="text" class="form-control" disabled
                                                        value="{{ $aktakematian->keteranganlaporan }}"
                                                        name="keteranganlaporan" id="keteranganlaporan">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="namaalm" class="form-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control" disabled
                                                        value="{{ $aktakematian->namaalm }}" name="namaalm"
                                                        id="namaalm">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nikalm" class="form-label">NIK</label>
                                                    <input type="number" class="form-control" disabled
                                                        value="{{ $aktakematian->nikalm }}" name="nikalm"
                                                        id="nikalm">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="umuralm" class="form-label">Umur</label>
                                                    <input type="number" class="form-control" disabled
                                                        value="{{ $aktakematian->umuralm }}" name="umuralm"
                                                        id="umuralm">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pekerjaanalm" class="form-label">Pekerjaan</label>
                                                    <input type="text" class="form-control" disabled
                                                        value="{{ $aktakematian->pekerjaanalm }}" name="pekerjaanalm"
                                                        id="pekerjaanalm">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="agamaalm" class="form-label">Agama</label>
                                                    <input type="text" class="form-control" disabled
                                                        value="{{ $aktakematian->agamaalm }}" name="agamaalm"
                                                        id="agamaalm">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamatalm" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" disabled
                                                        value="{{ $aktakematian->alamatalm }}" name="alamatalm"
                                                        id="alamatalm">
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
                                                    <label for="hari" class="form-label">Hari</label>
                                                    <input type="text" class="form-control" disabled
                                                        value="{{ $aktakematian->hari }}" name="hari" id="hari">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tgl" class="form-label">Tanggal Kematian</label>
                                                    <input type="date" class="form-control" disabled
                                                        value="{{ $aktakematian->tgl }}" name="tgl" id="tgl">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pukul" class="form-label">Pukul</label>
                                                    <input type="time" class="form-control" disabled
                                                        value="{{ $aktakematian->pukul }}" name="pukul"
                                                        id="pukul">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="bertempat" class="form-label">Bertempat di</label>
                                                    <input type="date" class="form-control" disabled
                                                        value="{{ $aktakematian->bertempat }}" name="bertempat"
                                                        id="bertempat">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="penyebab" class="form-label">Penyebab Kematian</label>
                                                    <input type="text" class="form-control" disabled
                                                        value="{{ $aktakematian->penyebab }}" name="penyebab"
                                                        id="penyebab">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="bukti" class="form-label">Bukti Kematian</label>
                                                    <img src="/storage/{{ $aktakematian->bukti }}"
                                                        class="form-control mb-2" alt="">
                                                    <input type="file" class="form-control" disabled
                                                        value="{{ $aktakematian->bukti }}" name="bukti"
                                                        id="buti">
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
                                    <label for="kkasli" class="form-label">Kartu Keluarga Asli</label>
                                    <img src="/storage/{{ $aktakematian->kkasli }}" class="form-control" alt="">
                                </div>
                                <div class="mb-3">
                                    <label for="ktppemohon" class="form-label">KTP Pemohon</label>
                                    <img src="/storage/{{ $aktakematian->ktppemohon }}" class="form-control"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="ktpsaksi1" class="form-label">KTP Saksi 1</label>
                                    <img src="/storage/{{ $aktakematian->ktpsaksi1 }}" class="form-control"
                                        alt="">
                                </div>
                                <div class="mb-3">
                                    <label for="ktpsaksi2" class="form-label">KTP Saksi 2</label>
                                    <img src="/storage/{{ $aktakematian->ktpsaksi2 }}" class="form-control"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-end gap-3">
                                    <a href="{{ route('aktakematian.index') }}" class="btn btn-danger"><i
                                            class="bi bi-arrow-left-circle"></i>
                                        Kembali</a>
                                    <button class="btn btn-success"
                                        {{ $aktakematian->is_verification == 1 ? '' : 'hidden' }}>Download Surat<i
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
