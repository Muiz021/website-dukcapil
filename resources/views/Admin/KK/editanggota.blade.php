@extends('Admin.Layouts.app', ['title' => 'Kartu Keluarga'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <p class="fs-4 mb-4 fw-semibold">
                    Edit Data Anggota Keluarga
                </p>
                <form action="{{ route('kkadmin.updateanggota', ['id' => $kk->id]) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nokk" class="form-label">Nomor Kartu Keluarga<span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="nokk" id="nokk"
                                    value="{{ $kk->nokk }}">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nama" id="nama"
                                    value="{{ $kk->nama }}" placeholder="Masukkan Nama Kepala Keluarga">
                            </div>
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="nik" id="nik"
                                    value="{{ $kk->nik }}" placeholder="Masukkan NIK ">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Jenis Kelamin<span class="text-danger">*</span></label>
                                <div class="flex mt-2">
                                    <input class="form-check-input" type="radio" name="jk" id="laki-laki"
                                        value="LAKI-LAKI" {{ $kk->jk == 'LAKI-LAKI' ? 'checked' : '' }}>
                                    <label class="form-check-label me-3" for="laki-laki">
                                        Laki-Laki
                                    </label>
                                    <input class="form-check-input" type="radio" name="jk" id="perempuan"
                                        value="PEREMPUAN" {{ $kk->jk == 'PEREMPUAN' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="perempuan">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="tempatlahir" class="form-label">Tempat Lahir<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="tempatlahir" id="tempatlahir"
                                    value="{{ $kk->tempatlahir }}" placeholder="Masukkan Tempat Lahir ">
                            </div>
                            <div class="mb-3">
                                <label for="tgllahir" class="form-label">Tanggal Lahir<span
                                        class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="tgllahir" id="tgllahir"
                                    value="{{ $kk->tgllahir }}" placeholder="Masukkan Tanggal Lahir ">
                            </div>
                            <div class="mb-3">
                                <label for="agama" class="form-label">Agama<span class="text-danger">*</span></label>
                                <select name="agama" id="agama" class="form-select">
                                    <option value="{{ $kk->agama }}">{{ $kk->agama }}</option>
                                    <option value="ISLAM" {{ $kk->agama == 'ISLAM' ? 'hidden' : '' }}>ISLAM</option>
                                    <option value="KRISTEN" {{ $kk->agama == 'KRISTEN' ? 'hidden' : '' }}>KRISTEN</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="pendidikan" class="form-label">Pendidikan<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="pendidikan" id="pendidikan"
                                    value="{{ $kk->pendidikan }}" placeholder="Masukkan Pendidikan ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="jpekerjaan" class="form-label">Jenis Pekerjaan<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="jpekerjaan" id="jpekerjaan"
                                    value="{{ $kk->jpekerjaan }}" placeholder="Masukkan Jenis Pekerjaan ">
                            </div>
                            <div class="mb-3">
                                <label for="goldarah" class="form-label">Golongan Darah<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="goldarah" id="goldarah"
                                    value="{{ $kk->goldarah }}" placeholder="Masukkan Golongan Darah Anda">
                            </div>
                            <div class="mb-3">
                                <label for="statusperkawinan" class="form-label">Status
                                    Perkawinan<span class="text-danger">*</span></label>
                                <select name="statusperkawinan" id="statusperkawinan" class="form-select">
                                    <option value="{{ $kk->statusperkawinan }}">{{ $kk->statusperkawinan }}</option>
                                    <option value="KAWIN TERCATAT"
                                        {{ $kk->statusperkawinan == 'KAWIN TERCATAT' ? 'hidden' : '' }}>KAWIN TERCATAT
                                    </option>
                                    <option value="BELUM KAWIN"
                                        {{ $kk->statusperkawinan == 'BELUM KAWIN' ? 'hidden' : '' }}>BELUM KAWIN</option>
                                    <option value="CERAI MATI"
                                        {{ $kk->statusperkawinan == 'CERAI MATI' ? 'hidden' : '' }}>CERAI MATI</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tglperkawinan" class="form-label">Tanggal Perkawinan/Perceraian<span
                                        class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="tglperkawinan" id="tglperkawinan"
                                    value="{{ $kk->tglperkawinan }}">
                            </div>
                            <div class="mb-3">
                                <label for="statushubkeluarga" class="form-label">Status Hubungan Dalam Keluarga<span
                                        class="text-danger">*</span></label>
                                <select name="statushubkeluarga" id="statushubkeluarga" class="form-select">
                                    <option value="{{ $kk->statushubkeluarga }}">{{ $kk->statushubkeluarga }}</option>
                                    <option value="KEPALA KELUARGA"
                                        {{ $kk->statushubkeluarga == 'KEPALA KELUARGA' ? 'hidden' : '' }}>KEPALA
                                        KELUARGA</option>
                                    <option value="ISTERI" {{ $kk->statushubkeluarga == 'ISTERI' ? 'hidden' : '' }}>ISTERI
                                    </option>
                                    <option value="ANAK" {{ $kk->statushubkeluarga == 'ANAK' ? 'hidden' : '' }}>ANAK
                                    </option>
                                    <option value="ORANG TUA" {{ $kk->statushubkeluarga == 'ORANG TUA' ? 'hidden' : '' }}>
                                        ORANG TUA
                                    </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="kewarganegaraan" class="form-label">Kewarganegaraan<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan"
                                    value="{{ $kk->kewarganegaraan }}" placeholder="Masukkan Kewarganegaraan">
                            </div>
                            <div class="mb-3">
                                <label for="nopaspor" class="form-label">Nomor Paspor<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nopaspor" id="nopaspor"
                                    value="{{ $kk->nopaspor }}" placeholder="Masukkan Nomor Paspor">
                            </div>
                            <div class="mb-3">
                                <label for="nokitap" class="form-label">No. Kitap<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nokitap" id="nokitap"
                                    value="{{ $kk->nokitap }}" placeholder="Masukkan Nomor Kitas/Kitap">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex justify-content-end gap-3 mt-md-4">
                                <a href="{{ route('kkadmin.index') }}" class="btn btn-danger"><i
                                        class="bi bi-arrow-left-circle"></i>
                                    Kembali</a>
                                <button class="btn btn-primary"><i class="bi bi-cloud-arrow-up"></i>
                                    Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
