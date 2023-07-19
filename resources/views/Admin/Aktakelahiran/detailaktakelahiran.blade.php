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
                                        <h2 class="accordion-header" id="headingThree">
                                            <button type="button" class="accordion-button collapsed"
                                                data-bs-toggle="collapse" data-bs-target="#menyatakan" aria-expanded="false"
                                                aria-controls="menyatakan" role="tabpanel">
                                                Data Anak
                                            </button>
                                        </h2>
                                        <div id="menyatakan" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body mt-3">
                                                <div class="mb-3">
                                                    <label for="namaanak" class="form-label">Nama <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="namaanak"
                                                        id="namaanak" placeholder="Masukkan Nama Anak yg lahir" disabled
                                                        value="{{ $kelahiran->namaanak }}">
                                                </div>
                                                {{-- <div class="mb-3">
                                                    <label for="nikanak" class="form-label">NIK <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" name="nikanak" id="nikanak"
                                                        placeholder="Masukkan NIK Anak" disabled
                                                        value="{{ $kelahiran->nikanak }}">
                                                </div> --}}
                                                <div class="mb-3">
                                                    <label class="form-label">Jenis Kelamin<span
                                                            class="text-danger">*</span></label>
                                                    <div class="flex">
                                                        <input class="form-check-input" type="radio" name="jk"
                                                            id="laki-laki" disabled value="LAKI-LAKI"
                                                            {{ $kelahiran->jk == 'LAKI-LAKI' ? 'checked' : '' }}>
                                                        <label class="form-check-label me-3" for="laki-laki">
                                                            Laki-Laki
                                                        </label>
                                                        <input class="form-check-input" type="radio" name="jk"
                                                            id="perempuan" disabled value="PEREMPUAN"
                                                            {{ $kelahiran->jk == 'PEREMPUAN' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="perempuan">
                                                            Perempuan
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tempatlahiranak" class="form-label">Tempat Lahir<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="tempatlahiranak"
                                                        id="tempatlahiranak" disabled
                                                        value="{{ $kelahiran->tempatlahiranak }}"
                                                        placeholder="Masukkan Tempat Lahir Anak">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tgllahiranak" class="form-label">Tanggal Lahir<span
                                                            class="text-danger">*</span></label>
                                                    <input type="date" class="form-control" name="tgllahiranak"
                                                        id="tgllahiranak" disabled value="{{ $kelahiran->tgllahiranak }}"
                                                        placeholder="Masukkan Tanggal Lahir Anak">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="agama" class="form-label">Agama<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="agama" id="agama"
                                                        disabled value="{{ $kelahiran->agama }}"
                                                        placeholder="Masukkan Agama">
                                                </div>
                                                <!-- <div class="mb-3">
                                                    <label for="pendidikan" class="form-label">Pendidikan<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="pendidikan"
                                                        id="pendidikan" disabled value="{{ $kelahiran->pendidikan }}"
                                                        placeholder="Masukkan Pendidikan Anak">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="jpekerjaan" class="form-label">Jenis Pekerjaan<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="jpekerjaan"
                                                        id="jpekerjaan" disabled value="{{ $kelahiran->jpekerjaan }}"
                                                        placeholder="Masukkan Jenis Pekerjaan Anak">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="statuspernikahan" class="form-label">Status
                                                        Pernikahan<span class="text-danger">*</span></label>
                                                    <select name="statuspernikahan" id="statuspernikahan"
                                                        class="form-select" disabled>
                                                        <option value="{{ $kelahiran->statuspernikahan }}">
                                                            {{ $kelahiran->statuspernikahan }}</option>
                                                        <option value="KAWIN">KAWIN</option>
                                                        <option value="BELUM KAWIN">BELUM KAWIN</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="statushubkeluarga" class="form-label">Status Hubungan
                                                        Dalam Keluarga<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="statushubkeluarga"
                                                        id="statushubkeluarga" disabled
                                                        value="{{ $kelahiran->statushubkeluarga }}"
                                                        placeholder="Masukkan Status Hubungan Dalam Keluarga Anak">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="kewarganegaraan" class="form-label">Kewarganegaraan<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="kewarganegaraan"
                                                        id="kewarganegaraan" disabled
                                                        value="{{ $kelahiran->kewarganegaraan }}"
                                                        placeholder="Masukkan Kewarganegaraan">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nopaspor" class="form-label">Nomor Paspor<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="nopaspor"
                                                        id="nopaspor" disabled value="{{ $kelahiran->nopaspor }}"
                                                        placeholder="Masukkan Nomor Paspor">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nokitas" class="form-label">No. Kitas/Kitap<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="nokitas"
                                                        id="nokitas" disabled value="{{ $kelahiran->nokitas }}"
                                                        placeholder="Masukkan Nomor Kitas/Kitap">
                                                </div> -->
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
                                                        id="namaibu" disabled placeholder="Masukkan Nama Ibu Kandung"
                                                        value="{{ $kelahiran->namaibu }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="namaayah" class="form-label">Nama Ayah <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="namaayah"
                                                        id="namaayah" disabled placeholder="Masukkan Nama Ayah Kandung"
                                                        value="{{ $kelahiran->namaayah }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="accordion" id="accordionExample">
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
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Buku Nikah</label>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                Lihat Buku Nikah
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <embed
                                                                                src="/storage/{{ $kelahiran->bukunikah }}"
                                                                                width="100%" style="height: 70vh;"
                                                                                type="application/pdf">
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
                                                            <label class="form-label">Surat Keterangan Bidang</label>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                                                Lihat Surat Ket Bidan
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal1" tabindex="-1"
                                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <embed
                                                                                src="/storage/{{ $kelahiran->suratketbidan }}"
                                                                                width="100%" style="height: 70vh;"
                                                                                type="application/pdf">
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
                                                            <label class="form-label">KTP
                                                                Orangtua/Ibu</label>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                                                Lihat KTP
                                                                Orangtua/Ibu
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal2" tabindex="-1"
                                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <embed
                                                                                src="/storage/{{ $kelahiran->ktportuaibu }}"
                                                                                width="100%" style="height: 70vh;"
                                                                                type="application/pdf">
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
                                                            <label class="form-label">KTP
                                                                Orangtua/Ayah</label>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                                                Lihat KTP
                                                                Orangtua/Ayah
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal3" tabindex="-1"
                                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <embed
                                                                                src="/storage/{{ $kelahiran->ktportuayah }}"
                                                                                width="100%" style="height: 70vh;"
                                                                                type="application/pdf">
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
                                                    <div class="mb-3">
                                                        <label class="form-label">Kartu Keluarga</label>
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary w-100"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                                            Kartu Keluarga
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal4" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-body">
                                                                        <embed
                                                                            src="/storage/{{ $kelahiran->kkkelahiran }}"
                                                                            width="100%" style="height: 70vh;"
                                                                            type="application/pdf">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex justify-content-end gap-3 mt-md-4">
                                    <a href="{{ route('datakelahiran.index') }}" class="btn btn-danger">
                                        Kembali</a>
                                    <form action="{{ route('verifikasi_dataaktakelahiran', $kelahiran->id) }}"
                                        method="POST" accept-charset="utf-8" style="display: inline">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="is_verification" value="1">
                                        @if ($kelahiran->is_verification != 1)
                                            <button type="submit" class="btn btn-success">
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
