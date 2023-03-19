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
                                    <label for="nokartu" class="form-label">Nomor Kartu <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="nokartu" id="nokartu" required
                                        placeholder="Masukkan Nomor Kartu">
                                </div>
                                <div class="mb-3">
                                    <label for="nokk" class="form-label">Nomor Kartu Keluarga<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="nokk" id="nokk" required
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
                                    <input type="text" class="form-control" name="kel" id="kel" required
                                        placeholder="Masukkan Kelurahan">
                                </div>
                                <div class="mb-3">
                                    <label for="kec" class="form-label">Kecamatan<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="kec" id="kec" required
                                        placeholder="Masukkan Kecamatan">
                                </div>
                                <div class="mb-3">
                                    <label for="kota" class="form-label">Kota<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="kota" id="kota" required
                                        placeholder="Masukkan Kota">
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
                                        placeholder="Masukkan Nama  yg lahir">
                                </div>
                                <div class="mb-3">
                                    <label for="nik" class="form-label">NIK <span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="nik" id="nik" required
                                        placeholder="Masukkan NIK ">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Jenis Kelamin<span class="text-danger">*</span></label>
                                    <div class="flex">
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
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="agama" class="form-label">Agama<span
                                            class="text-danger">*</span></label>
                                    <select name="agama" id="agama" class="form-select">
                                        <option>Pilihan Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                    </select>
                                </div>
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
                                    <label for="statuspernikahan" class="form-label">Status
                                        Pernikahan<span class="text-danger">*</span></label>
                                    <select name="statuspernikahan" id="statuspernikahan" class="form-select">
                                        <option>status pernikahan</option>
                                        <option value="KAWIN">KAWIN</option>
                                        <option value="BELUM KAWIN">BELUM KAWIN</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="statushubkeluarga" class="form-label">Status Hubungan Dalam Keluarga<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="statushubkeluarga"
                                        id="statushubkeluarga" required
                                        value="Kepala Keluarga">
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
                                    <label for="nokitas" class="form-label">No. Kitas/Kitap<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="nokitas" id="nokitas" required
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
                                    <label for="nik_dinas" class="form-label">Nama Dinas<span
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
