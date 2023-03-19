@extends('Admin.Layouts.app', ['title' => 'Kartu Keluarga'])

@section('content')
    <section id="formulirkelahiran">
        <div class="row">
            <div class="col-12">
                <div class="card p-4">
                    <p class="fs-4 mb-4 fw-semibold">
                        Data Kepala Keluarga
                    </p>
                    <form action="{{ route('kkadmin.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nokk" class="form-label">Nomor Kartu Keluarga<span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="nokk" id="nokk" required
                                        placeholder="Masukkan Nomor Kartu Keluarga">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="alamat" id="alamat" required
                                        placeholder="Masukkan Alamat">
                                </div>
                                <div class="mb-3">
                                    <label for="rt_rw" class="form-label">RT/RW<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="rt_rw" id="rt_rw" required
                                        placeholder="Masukkan RT/RW">
                                </div>
                                <div class="mb-3">
                                    <label for="kel" class="form-label">Kelurahan<span
                                            class="text-danger">*</span></label>
                                    <select name="kel" id="kel" class="form-select" >
                                        <option>Pilihan Kelurahan</option>
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
                                    <label for="kec" class="form-label">Kecamatan<span
                                            class="text-danger">*</span></label>
                                    <select name="kec" id="kec" class="form-select" >
                                        <option>Pilihan Kecamatan</option>
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
                                    <label for="kota" class="form-label">Kota/Kabupaten<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="kota" id="kota" required
                                        placeholder="Masukkan Kota/Kab" value="JENEPONTO">
                                </div>
                                <div class="mb-3">
                                    <label for="kode_pos" class="form-label">Kode Pos<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="kode_pos" id="kode_pos" required
                                        placeholder="Masukkan Kode Pos">
                                </div>
                                <div class="mb-3">
                                    <label for="provinsi" class="form-label">Provinsi<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="provinsi" id="provinsi" required
                                        value="Sulawesi Selatan">
                                </div>

                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="nama" id="nama" required
                                        placeholder="Masukkan Nama Kepala Keluarga">
                                </div>
                                <div class="mb-3">
                                    <label for="nik" class="form-label">NIK <span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="nik" id="nik" required
                                        placeholder="Masukkan NIK ">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Jenis Kelamin<span class="text-danger">*</span></label>
                                    <div class="flex mt-2">
                                        <input class="form-check-input" type="radio" name="jk" id="laki-laki"
                                            value="LAKI-LAKI">
                                        <label class="form-check-label me-3" for="laki-laki">
                                            Laki-Laki
                                        </label>
                                        <input class="form-check-input" type="radio" name="jk" id="perempuan"
                                            value="PEREMPUAN">
                                        <label class="form-check-label" for="perempuan">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="tempatlahir" class="form-label">Tempat Lahir<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="tempatlahir" id="tempatlahir"
                                        required placeholder="Masukkan Tempat Lahir ">
                                </div>
                                <div class="mb-3">
                                    <label for="tgllahir" class="form-label">Tanggal Lahir<span
                                            class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="tgllahir" id="tgllahir" required
                                        placeholder="Masukkan Tanggal Lahir ">
                                </div>
                                <div class="mb-3">
                                    <label for="agama" class="form-label">Agama<span
                                            class="text-danger">*</span></label>
                                    <select name="agama" id="agama" class="form-select">
                                        <option>Pilihan Agama</option>
                                        <option value="ISLAM">ISLAM</option>
                                        <option value="KRISTEN">KRISTEN</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="pendidikan" class="form-label">Pendidikan<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="pendidikan" id="pendidikan"
                                        required placeholder="Masukkan Pendidikan ">
                                </div>
                                <div class="mb-3">
                                    <label for="jpekerjaan" class="form-label">Jenis Pekerjaan<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="jpekerjaan" id="jpekerjaan"
                                        required placeholder="Masukkan Jenis Pekerjaan ">
                                </div>
                                <div class="mb-3">
                                    <label for="goldarah" class="form-label">Golongan Darah<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="goldarah" id="goldarah"
                                        required placeholder="Masukkan Golongan Darah Anda">
                                </div>
                                <div class="mb-3">
                                    <label for="statusperkawinan" class="form-label">Status
                                        Perkawinan<span class="text-danger">*</span></label>
                                    <select name="statusperkawinan" id="statusperkawinan" class="form-select">
                                        <option>status perkawinan</option>
                                        <option value="KAWIN TERCATAT">KAWIN TERCATAT</option>
                                        <option value="BELUM KAWIN">BELUM KAWIN</option>
                                        <option value="CERAI MATI">CERAI MATI</option>
                                    </select>
                                </div><div class="mb-3">
                                    <label for="tglperkawinan" class="form-label">Tanggal Perkawinan/Perceraian<span
                                            class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="tglperkawinan" id="tglperkawinan"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="statushubkeluarga" class="form-label">Status Hubungan Dalam Keluarga<span
                                            class="text-danger">*</span></label>
                                    <select name="statushubkeluarga" id="statushubkeluarga" class="form-select">
                                        <option>Pilih Status</option>
                                        <option value="KEPALA KELUARGA">KEPALA KELUARGA</option>
                                        <option value="ISTERI">ISTERI</option>
                                        <option value="ANAK">ANAK</option>
                                        <option value="ORANG TUA">ORANG TUA</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="kewarganegaraan" class="form-label">Kewarganegaraan<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="kewarganegaraan"
                                        id="kewarganegaraan" required placeholder="Masukkan Kewarganegaraan">
                                </div>
                                <div class="mb-3">
                                    <label for="nopaspor" class="form-label">Nomor Paspor<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="nopaspor" id="nopaspor" required
                                        placeholder="Masukkan Nomor Paspor">
                                </div>
                                <div class="mb-3">
                                    <label for="nokitap" class="form-label">No. Kitap<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="nokitap" id="nokitap" required
                                        placeholder="Masukkan Nomor Kitas/Kitap">
                                </div>
                                <div class="mb-3">
                                    <label for="namaibu" class="form-label">Nama Ibu <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="namaibu" id="namaibu" required
                                        placeholder="Masukkan Nama Ibu Kandung">
                                </div>
                                <div class="mb-3">
                                    <label for="namaayah" class="form-label">Nama Ayah <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="namaayah" id="namaayah" required
                                        placeholder="Masukkan Nama Ayah Kandung">
                                </div>

                                <div class="mb-3">
                                    <label for="tgl_keluar" class="form-label">Tanggal diKeluarkan<span
                                            class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="tgl_keluar" id="tgl_keluar"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="nama_dinas" class="form-label">Nama Dinas<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="nama_dinas" id="nama_dinas"
                                        required placeholder="Masukkan Nama Dinas yang berTTD">
                                </div>
                                <div class="mb-3">
                                    <label for="nik_dinas" class="form-label">NIK Dinas<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="nik_dinas" id="nik_dinas" required
                                        placeholder="Masukkan NIK Dinas yang berTTD">
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
