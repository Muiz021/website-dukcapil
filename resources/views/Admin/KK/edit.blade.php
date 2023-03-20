@extends('Admin.Layouts.app', ['title' => 'Kartu Keluarga'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <p class="fs-4 mb-4 fw-semibold">
                    Edit Data Kepala Keluarga
                </p>
                <form action="{{ route('kkadmin.update', ['id' => $kk->id]) }}" method="POST">
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
                                <label for="alamat" class="form-label">Alamat<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="alamat" id="alamat"
                                    value="{{ $kk->alamat }}">
                            </div>
                            <div class="mb-3">
                                <label for="rt_rw" class="form-label">RT/RW<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="rt_rw" id="rt_rw"
                                    value="{{ $kk->rt_rw }}" placeholder="Masukkan RT/RW">
                            </div>
                            <div class="mb-3">
                                <label for="kel" class="form-label">Kelurahan<span class="text-danger">*</span></label>
                                <select name="kel" id="kel" class="form-select">
                                    <option value="{{ $kk->kel }}">{{ $kk->kel }}</option>
                                    <option value="BENTENG">BENTENG</option>
                                    <option value="PALLENGU">PALLENGU</option>
                                    <option value="PANTAI BAHARI">PANTAI BAHARI</option>
                                    <option value="BONTORANNU">BONTORANNU</option>
                                    <option value="PALLANTIKANG">PALLANTIKANG</option>
                                    <option value="KALIMPORO">KALIMPORO</option>
                                    <option value="PUNAGAYA">PUNAGAYA</option>
                                    <option value="MALLASORO">MALLASORO</option>
                                    <option value="KAPITA">KAPITA</option>
                                    <option value="MARAYOKA">MARAYOKA</option>
                                    <option value="JENETALLASA">JENETALLASA</option>
                                    <option value="TOMBO TOMBOLO">TOMBO TOMBOLO</option>
                                    <option value="GUNUNG SILANU">GUNUNG SILANU</option>
                                    <option value="BONTOMANAI">BONTOMANAI</option>
                                    <option value="BONTO TANGA">BONTO TANGA</option>
                                    <option value="TONRO KASSI">TONRO KASSI</option>
                                    <option value="TONRO KASSI BARAT">TONRO KASSI BARAT</option>
                                    <option value="TONRO KASSI TIMUR">TONRO KASSI TIMUR</option>
                                    <option value="TAMAN ROYA">TAMAN ROYA</option>
                                    <option value="MANJANGLOE">MANJANGLOE</option>
                                    <option value="BORONGTALA">BORONGTALA</option>
                                    <option value="BONTOSUNGGU">BONTOSUNGGU</option>
                                    <option value="TURATEA">TURATEA</option>
                                    <option value="KARELAYU">KARELAYU</option>
                                    <option value="BONTOJAI">BONTOJAI</option>
                                    <option value="TURATEA TIMUR">TURATEA TIMUR</option>
                                </select>
                            </div>
                            <div class="mb-3 search_select_box">
                                <label for="kec" class="form-label">Kecamatan<span class="text-danger">*</span></label>
                                <select name="kec" id="kec" class="form-select">
                                    <option value="{{ $kk->kec }}">{{ $kk->kec }}</option>
                                    <option value="BANGKALA">BANGKALA</option>
                                    <option value="TAMALATEA">TAMALATEA</option>
                                    <option value="BINAMU">BINAMU</option>
                                    <option value="BATANG">BATANG</option>
                                    <option value="KELARA">KELARA</option>
                                    <option value="BANGKALA BARAT">BANGKALA BARAT</option>
                                    <option value="BONTORAMBA">BONTORAMBA</option>
                                    <option value="TURATEA">TURATEA</option>
                                    <option value="ARUNGKEKE">ARUNGKEKE</option>
                                    <option value="RUMBIA">RUMBIA</option>
                                    <option value="TAROWANG">TAROWANG</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="kota" class="form-label">Kota/Kabupaten<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="kota" id="kota"
                                    value="{{ $kk->kota }}" placeholder="Masukkan Kota/Kab" value="JENEPONTO">
                            </div>
                            <div class="mb-3">
                                <label for="kode_pos" class="form-label">Kode Pos<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="kode_pos" id="kode_pos"
                                    value="{{ $kk->kode_pos }}" placeholder="Masukkan Kode Pos">
                            </div>
                            <div class="mb-3">
                                <label for="provinsi" class="form-label">Provinsi<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="provinsi" id="provinsi"
                                    value="{{ $kk->provinsi }}" value="Sulawesi Selatan">
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
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="pendidikan" class="form-label">Pendidikan<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="pendidikan" id="pendidikan"
                                    value="{{ $kk->pendidikan }}" placeholder="Masukkan Pendidikan ">
                            </div>
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
                            <div class="mb-3">
                                <label for="namaibu" class="form-label">Nama Ibu <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="namaibu" id="namaibu"
                                    value="{{ $kk->namaibu }}" placeholder="Masukkan Nama Ibu Kandung">
                            </div>
                            <div class="mb-3">
                                <label for="namaayah" class="form-label">Nama Ayah <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="namaayah" id="namaayah"
                                    value="{{ $kk->namaayah }}" placeholder="Masukkan Nama Ayah Kandung">
                            </div>

                            <div class="mb-3">
                                <label for="tgl_keluar" class="form-label">Tanggal diKeluarkan<span
                                        class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="tgl_keluar" id="tgl_keluar"
                                    value="{{ $kk->tgl_keluar }}">
                            </div>
                            <div class="mb-3">
                                <label for="nama_dinas" class="form-label">Nama Dinas<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nama_dinas" id="nama_dinas"
                                    value="{{ $kk->nama_dinas }}" placeholder="Masukkan Nama Dinas yang berTTD">
                            </div>
                            <div class="mb-3">
                                <label for="nik_dinas" class="form-label">NIK Dinas<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nik_dinas" id="nik_dinas"
                                    value="{{ $kk->nik_dinas }}" placeholder="Masukkan NIK Dinas yang berTTD">
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
