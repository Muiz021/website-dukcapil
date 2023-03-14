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
                                                data-bs-toggle="collapse" data-bs-target="#hubungan" aria-expanded="false"
                                                aria-controls="hubungan" role="tabpanel">
                                                Data Almarhum/Almarhumah
                                            </button>
                                        </h2>
                                        <div id="hubungan" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body mt-3">
                                                <div class="mb-3">
                                                    <label for="keteranganlaporan" class="form-label">Melaporkan
                                                        Bahwa <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="keteranganlaporan"
                                                        id="keteranganlaporan" placeholder="Masukkan Keterangan Laporan"
                                                        disabled value="{{ $aktakematian->keteranganlaporan }}" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="namaalm" class="form-label">Nama Lengkap <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="namaalm" id="namaalm"
                                                        placeholder="Masukkan Nama Lengkap Almarhum/Almarhumah" disabled
                                                        value="{{ $aktakematian->namaalm }}" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nikalm" class="form-label">NIK <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" name="nikalm" id="nikalm"
                                                        placeholder="Masukkan NIK Almarhum/Almarhumah" disabled
                                                        value="{{ $aktakematian->nikalm }}" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="umuralm" class="form-label">Umur <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" name="umuralm" id="umuralm"
                                                        placeholder="Masukkan Umur Almarhum/Almarhumah" disabled
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
                                                    <input type="text" class="form-control" name="hari" id="hari"
                                                        placeholder="Hari berpulang kerahmatullah" disabled
                                                        value="{{ $aktakematian->hari }}" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tgl" class="form-label">Tanggal Kematian <span
                                                            class="text-danger">*</span></label>
                                                    <input type="date" class="form-control" name="tgl"
                                                        id="tgl" placeholder="Tanggal berpulang kerahmatullah"
                                                        disabled value="{{ $aktakematian->tgl }}" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pukul" class="form-label">Pukul <span
                                                            class="text-danger">*</span></label>
                                                    <input type="time" class="form-control" name="pukul"
                                                        id="pukul" placeholder="Pukul berpulang kerahmatullah"
                                                        disabled value="{{ $aktakematian->pukul }}" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="bertempat" class="form-label">Bertempat di <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="bertempat"
                                                        id="bertempat" placeholder="Tempat kediaman" disabled
                                                        value="{{ $aktakematian->bertempat }}" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="penyebab" class="form-label">Penyebab Kematian <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="penyebab"
                                                        id="penyebab" placeholder="Penyebab Kematian" disabled
                                                        value="{{ $aktakematian->penyebab }}" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="bukti" class="form-label">Bukti Kematian <span
                                                            class="text-danger">*</span></label>
                                                    <input type="file" class="form-control" name="bukti"
                                                        id="buti" placeholder="Bukti Kematian" disabled />
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
                                    <label class="form-label">Kartu Keluarga</label>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal1">
                                        Kartu Keluarga
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal1" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <embed src="/storage/{{ $aktakematian->kkasli }}" width="100%"
                                                        style="height: 70vh;" type="application/pdf">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Kembali</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">KTP Pemohon</label>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal2">
                                        Lihat KTP Pemohon
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal2" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <embed src="/storage/{{ $aktakematian->ktppemohon }}" width="100%"
                                                        style="height: 70vh;" type="application/pdf">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Kembali</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">KTP Saksi 1</label>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal3">
                                        Lihat KTP Saksi 1
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal3" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <embed src="/storage/{{ $aktakematian->ktpsaksi1 }}" width="100%"
                                                        style="height: 70vh;" type="application/pdf">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Kembali</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">KTP Saksi 2</label>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal4">
                                        Lihat KTP Saksi 2
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal4" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <embed src="/storage/{{ $aktakematian->ktpsaksi2 }}" width="100%"
                                                        style="height: 70vh;" type="application/pdf">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Kembali</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
