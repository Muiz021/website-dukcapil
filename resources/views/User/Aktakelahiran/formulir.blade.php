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
                                                        id="namaanak" required placeholder="Masukkan Nama Anak yg lahir">
                                                   
                                                </div>
                                                {{-- <div class="mb-3">
                                                    <label for="nikanak" class="form-label">NIK <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" name="nikanak" id="nikanak"
                                                        required placeholder="Masukkan NIK Anak">
                                                </div> --}}
                                                <div class="mb-3">
                                                    <label class="form-label">Jenis Kelamin<span
                                                            class="text-danger">*</span></label>
                                                    <div class="flex">
                                                        <input class="form-check-input" type="radio" name="jk"
                                                            id="laki-laki" value="LAKI-LAKI">
                                                        <label class="form-check-label me-3" for="laki-laki">
                                                            Laki-Laki
                                                        </label>
                                                        <input class="form-check-input" type="radio" name="jk"
                                                            id="perempuan" value="PEREMPUAN">
                                                        <label class="form-check-label" for="perempuan">
                                                            Perempuan
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tempatlahiranak" class="form-label">Tempat Lahir<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="tempatlahiranak"
                                                        id="tempatlahiranak" required
                                                        placeholder="Masukkan Tempat Lahir Anak">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tgllahiranak" class="form-label">Tanggal Lahir<span
                                                            class="text-danger">*</span></label>
                                                    <input type="date" class="form-control" name="tgllahiranak"
                                                        id="tgllahiranak" required
                                                        placeholder="Masukkan Tanggal Lahir Anak">
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
                                                <!-- <div class="mb-3">
                                                    <label for="pendidikan" class="form-label">Pendidikan<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="pendidikan"
                                                        id="pendidikan" required placeholder="Masukkan Pendidikan Anak">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="jpekerjaan" class="form-label">Jenis Pekerjaan</label>
                                                    <input type="text" class="form-control" name="jpekerjaan"
                                                        id="jpekerjaan" value="-">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="statuspernikahan" class="form-label">Status
                                                        Pernikahan</label>
                                                    <select name="statuspernikahan" id="statuspernikahan"
                                                        class="form-select">
                                                        <option value="-">-</option>
                                                        <option value="KAWIN">KAWIN</option>
                                                        <option value="BELUM KAWIN">BELUM KAWIN</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="statushubkeluarga" class="form-label">Status Hubungan
                                                        Dalam Keluarga</label>
                                                    <select name="statushubkeluarga" id="statushubkeluarga"
                                                        class="form-select">
                                                        <option>Pilih Status</option>
                                                        <option value="ANAK">ANAK</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="kewarganegaraan" class="form-label">Kewarganegaraan<span
                                                            class="text-danger">*</span></label>
                                                    <select name="kewarganegaraan" id="kewarganegaraan"
                                                        class="form-select">
                                                        <option value="WNI">WNI</option>
                                                        <option value="WNA">WNA</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nopaspor" class="form-label">Nomor Paspor</label>
                                                    <input type="text" class="form-control" name="nopaspor"
                                                        id="nopaspor" required value="-">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nokitas" class="form-label">No. Kitas/Kitap</label>
                                                    <input type="text" class="form-control" name="nokitas"
                                                        id="nokitas" required value="-">
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
                                                        id="namaibu" required placeholder="Masukkan Nama Ibu Kandung">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="namaayah" class="form-label">Nama Ayah <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="namaayah"
                                                        id="namaayah" required placeholder="Masukkan Nama Ayah Kandung">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="bukunikah" class="form-label">Buku Nikah <span class="text-danger">* |
                                            Format PDF | Max:5Mb</span></label>
                                    <input type="file" class="form-control @error('bukunikah') is-invalid @enderror" name="bukunikah" required id="bukunikah">
                                    @error('bukunikah')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="suratketbidan" class="form-label">Surat Keterangan
                                        Bidan <span class="text-danger">* | Format PDF |
                                            Max:5Mb</span></label>
                                    <input type="file" class="form-control @error('suratketbidan') is-invalid @enderror" name="suratketbidan" required
                                        id="suratketbidan">
                                    @error('suratketbidan')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="ktportuaibu" class="form-label">KTP
                                        Orangtua/Ibu <span class="text-danger">* | Format PDF |
                                            Max:5Mb</span></label>
                                    <input type="file" class="form-control @error('ktportuaibu') is-invalid @enderror" name="ktportuaibu" required
                                        id="ktportuaibu">
                                    @error('ktportuaibu')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="ktportuayah" class="form-label">KTP
                                        Orangtua/Ayah <span class="text-danger">* | Format PDF |
                                            Max:5Mb</span></label>
                                    <input type="file" class="form-control @error('ktportuayah') is-invalid @enderror" name="ktportuayah" required
                                        id="ktportuayah">
                                    @error('ktportuayah')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="kkkelahiran" class="form-label">Kartu Keluarga <span
                                            class="text-danger">* |
                                            Format PDF | Max:5Mb</span></label>
                                    <input type="file" class="form-control @error('kkkelahiran') is-invalid @enderror" name="kkkelahiran" required
                                        id="kkkelahiran">
                                    @error('kkkelahiran')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
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
