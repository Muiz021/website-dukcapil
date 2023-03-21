<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kartu Keluarga</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/imglogin.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        p {
            margin-bottom: 0px;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-12 p-4">
                <div class="card p-3 border-0"
                    style="background-color: #B8F1F7; font-family:'Times New Roman', Times, serif;">
                    <div class="row px-5">
                        <div class="col-4">
                            <img src="{{ asset('assets/img/garuda.png') }}" alt="" width="100px">
                        </div>
                        <div class="col-4 text-center align-self-end">
                            <p class="fs-1 fw-bold mb-0">KARTU KELUARGA</p>
                            <p class="fs-4 fw-bold">No. {{ auth()->user()->nokk }}</p>
                        </div>
                        {{-- <div class="col-4">
                            <p class="fs-6 text-end">No. 21345678345345</p>
                        </div> --}}
                    </div>

                    <div class="row px-5 mt-3">
                        <div class="col-4">
                            <div class="row">
                                <div class="col-5">
                                    <p>Nama Kepala Keluarga</p>
                                    <p>Alamat</p>
                                    <p>RT/RW</p>
                                    <p>Desa/Kelurahan</p>
                                </div>
                                <div class="col-7 text-uppercase">
                                    @foreach ($kartukeluarga as $item)
                                        @if ($item->statushubkeluarga == 'KEPALA KELUARGA')
                                            <p>: {{ auth()->user()->nama_kepala_keluarga }}</p>
                                            <p>: {{ $item->alamat }}</p>
                                            <p>: {{ $item->rt_rw }}</p>
                                            <p>: {{ $item->kel }}</p>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-5">
                                    <p>Kecamatan</p>
                                    <p>Kabupaten/Kota</p>
                                    <p>Kode Pos</p>
                                    <p>Provinsi</p>
                                </div>
                                <div class="col-7 text-uppercase">
                                    @foreach ($kartukeluarga as $item)
                                        @if ($item->statushubkeluarga == 'KEPALA KELUARGA')
                                            <p>: {{ $item->kec }}</p>
                                            <p>: {{ $item->kota }}</p>
                                            <p>: {{ $item->kode_pos }}</p>
                                            <p>: {{ $item->provinsi }}</p>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- table data atas --}}
                    <div class="px-3 pt-3">
                        <table class="table table-bordered border-dark">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>NIK</th>
                                    <th>Jenis <br> Kelamin</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal <br> Lahir</th>
                                    <th>Agama</th>
                                    <th>Pendidikan</th>
                                    <th>Jenis Pekerjaan</th>
                                    <th>Golongan <br> Darah</th>
                                </tr>
                                <tr class="text-center" style="background-color: rgb(164, 192, 199);">
                                    <th></th>
                                    <th>(1)</th>
                                    <th>(2)</th>
                                    <th>(3)</th>
                                    <th>(4)</th>
                                    <th>(5)</th>
                                    <th>(6)</th>
                                    <th>(7)</th>
                                    <th>(8)</th>
                                    <th>(9)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kartukeluarga as $item)
                                    <tr class="text-uppercase">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nik }}</td>
                                        <td>{{ $item->jk }}</td>
                                        <td>{{ $item->tempatlahir }}</td>
                                        <td>{{ $item->tgllahir }}</td>
                                        <td>{{ $item->agama }}</td>
                                        <td>{{ $item->pendidikan }}</td>
                                        <td>{{ $item->jpekerjaan }}</td>
                                        <td>{{ $item->goldarah }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{-- table data bawah --}}
                    <div class="px-3 pt-3">
                        <table class="table table-bordered border-dark">
                            <thead>
                                <tr class="text-center">
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">Status <br> Pernikahan</th>
                                    <th rowspan="2">Tanggal <br> Perkawinan <br>/Perceraian</th>
                                    <th rowspan="2">Status Hubungan <br> Dalam Keluarga</th>
                                    <th rowspan="2">Kewarganegaraan</th>
                                    <th colspan="2">Dokumen Imigrasi</th>
                                    <th colspan="2">Nama Orang Tua</th>
                                </tr>
                                <tr class="text-center">
                                    <th>No. Paspor</th>
                                    <th>No. KITAS/KITAP</th>
                                    <th>Ayah</th>
                                    <th>Ibu</th>
                                </tr>
                                <tr class="text-center" style="background-color: rgb(164, 192, 199);">
                                    <th></th>
                                    <th>(10)</th>
                                    <th>(11)</th>
                                    <th>(12)</th>
                                    <th>(13)</th>
                                    <th>(14)</th>
                                    <th>(15)</th>
                                    <th>(16)</th>
                                    <th>(17)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kartukeluarga as $item)
                                    <tr class="text-uppercase">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->statusperkawinan }}</td>
                                        <td>{{ $item->tglperkawinan }}</td>
                                        <td>{{ $item->statushubkeluarga }}</td>
                                        <td>{{ $item->kewarganegaraan }}</td>
                                        <td>{{ $item->nopaspor }}</td>
                                        <td>{{ $item->nokitap }}</td>
                                        <td>{{ $item->namaayah }}</td>
                                        <td>{{ $item->namaibu }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{-- lembar pengesahan --}}
                    <div class="row ps-5 pe-3">
                        <div class="col-5">
                            <div class="row ps-5">
                                <div class="col-5">
                                    <p>Dikeluarkan Tanggal</p>
                                    <p>Lembar</p>
                                </div>
                                <div class="col-7">
                                    @foreach ($kartukeluarga as $item)
                                        @if ($item->statushubkeluarga == 'KEPALA KELUARGA')
                                            <p>: <span
                                                    class="ms-2 border border-1 border-dark">{{ $item->tgl_keluar }}</span>
                                            </p>
                                        @endif
                                    @endforeach
                                    <p>: <span class="ms-2">I. Kepala Keluarga</span></p>
                                    <p> <span class="ms-3"> II. Dukuh</span></p>
                                    <p> <span class="ms-3"> III. Desa/Keluarahan</span></p>
                                    <p> <span class="ms-3"> IV. Kecamatan</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 text-center mt-4">
                            <div>
                                <p>KEPALA KELUARGA</p>
                            </div>
                            <div style="margin-top: 74px;">
                                <p class="text-decoration-underline fw-bold">{{ auth()->user()->nama_kepala_keluarga }}
                                </p>
                                <p class="fs-6">Tanda Tangan/Cap Jempol</p>
                            </div>
                        </div>
                        <div class="col-5 text-center mt-4">
                            <div>
                                <p>KEPALA DINAS KEPENDUDUKAN DAN <br> PENCATATAN SIPIL</p>
                            </div>
                            <div class="mt-5">
                                @foreach ($kartukeluarga as $item)
                                    @if ($item->statushubkeluarga == 'KEPALA KELUARGA')
                                        <p class="text-decoration-underline fw-bold">{{ $item->nama_dinas }}</p>
                                        <p class="fs-6">NIP. {{ $item->nik_dinas }}</p>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
