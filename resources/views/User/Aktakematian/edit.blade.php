@extends('User.Layouts.app', ['title' => 'Akta Kematian'])

@section('content')
    <section id="formulir">
        <div class="row">
            <div class="col-12">
                <div class="card p-4">
                    <p class="fs-4 mb-4 fw-semibold">Halaman Edit Data Akta Kematian</p>
                    <form action="{{ route('aktakematian.update', ['id' => $aktakematian->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="accordion" id="accordionExample">
                                    <div class="border-1 mb-3 accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button type="button" class="accordion-button collapsed"
                                                data-bs-toggle="collapse" data-bs-target="#hubungan"
                                                aria-expanded="false" aria-controls="hubungan" role="tabpanel">
                                                Data Almarhum/Almarhumah
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
                                                         value="{{ $aktakematian->keteranganlaporan }}" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="namaalm" class="form-label">Nama Lengkap <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="namaalm"
                                                        id="namaalm"
                                                        placeholder="Masukkan Nama Lengkap Almarhum/Almarhumah"  value="{{ $aktakematian->namaalm }}" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nikalm" class="form-label">NIK <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" name="nikalm"
                                                        id="nikalm" placeholder="Masukkan NIK Almarhum/Almarhumah"
                                                         value="{{ $aktakematian->nikalm }}" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="umuralm" class="form-label">Umur <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" name="umuralm"
                                                        id="umuralm" placeholder="Masukkan Umur Almarhum/Almarhumah"
                                                         value="{{ $aktakematian->umuralm }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="accordion" id="accordionExample">
                                    
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
                                                         value="{{ $aktakematian->hari }}" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tgl" class="form-label">Tanggal Kematian <span
                                                            class="text-danger">*</span></label>
                                                    <input type="date" class="form-control" name="tgl"
                                                        id="tgl" placeholder="Tanggal berpulang kerahmatullah"
                                                         value="{{ $aktakematian->tgl }}" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pukul" class="form-label">Pukul <span
                                                            class="text-danger">*</span></label>
                                                    <input type="time" class="form-control" name="pukul"
                                                        id="pukul" placeholder="Pukul berpulang kerahmatullah"
                                                         value="{{ $aktakematian->pukul }}" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="bertempat" class="form-label">Bertempat di <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="bertempat"
                                                        id="bertempat" placeholder="Tempat kediaman"  value="{{ $aktakematian->bertempat }}" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="penyebab" class="form-label">Penyebab Kematian <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="penyebab"
                                                        id="penyebab" placeholder="Penyebab Kematian"  value="{{ $aktakematian->penyebab }}" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="bukti" class="form-label">Bukti Kematian <span
                                                            class="text-danger">*</span></label>
                                                    <input type="file" class="form-control" name="bukti"
                                                        id="buti" placeholder="Bukti Kematian"  />
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

                                    <input type="file" class="form-control" name="kkasli" id="kkasli">
                                </div>
                                <div class="mb-3">
                                    <label for="ktppemohon" class="form-label">KTP Pemohon</label>

                                    <input type="file" class="form-control" name="ktppemohon" id="ktppemohon">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="ktpsaksi1" class="form-label">KTP Saksi 1</label>

                                    <input type="file" class="form-control" name="ktpsaksi1" id="ktpsaksi1">
                                </div>
                                <div class="mb-3">
                                    <label for="ktpsaksi2" class="form-label">KTP Saksi 2</label>

                                    <input type="file" class="form-control" name="ktpsaksi2" id="ktpsaksi2">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-end gap-3">
                                    <a href="{{ route('aktakematian.index') }}" class="btn btn-danger"><i
                                            class="bi bi-arrow-left-circle"></i>
                                        Kembali</a>
                                    <button type="submit" class="btn btn-primary"><i class="bi bi-cloud-arrow-up"></i>
                                        Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
