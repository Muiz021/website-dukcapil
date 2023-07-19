<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kartu Keluarga</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/imglogin.png') }}" type="image/x-icon">
    <style>
        html,
        body {
            margin: 0;
            background-color: #fff;
            padding: 0;
        }

        p,
        td,
        th {
            margin-bottom: 0px;
            font-size: 12px;
        }

        #table table,
        #table th,
        #table td {
            border: 2px solid #000;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <div style="font-family:Arial, Helvetica, sans-serif; padding:8px 0px;">
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="width:30%;">
                        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('assets/img/garuda.png'))) }}"
                            alt="" style="margin-left: 40px; width: 100px;">
                    </td>
                    <td style="width:40%; text-align: center;">
                        <p style="font-size: 36px; font-weight: 600; margin-top: -24px;">KARTU KELUARGA</p>
                        <p style="font-size:30px; font-weight: 500; margin-top:-2px;">No. {{ auth()->user()->nokk }}</p>
                    </td>
                    <td style="width: 30%;"></td>
                </tr>
            </tbody>
        </table>
        {{-- <div style="display: flex;">
            <div style="width:30%;">
                <img src="{{ asset('assets/img/garuda.png') }}" alt="" width="200px">
            </div>
            <div style="width:40%; text-align:center;">
                <p style="font-size: 40px; font-weight: 600;">KARTU KELUARGA</p>
                <p style="font-size:36px; font-weight: 500; margin-top:-2px;">No. {{ auth()->user()->nokk }}</p>
            </div>
            <div style="width: 30%;">
                <p class="fs-6 text-end">No. 21345678345345</p>
            </div>
        </div> --}}
        <table style="width: 100%; padding:0px 30px;">
            <tbody>
                <tr>
                    <td style="width: 16%;">
                        <p style="margin-top: 1px;">Nama Kepala Keluarga</p>
                        <p style="margin-top: 1px;">Alamat</p>
                        <p style="margin-top: 1px;">RT/RW</p>
                        <p style="margin-top: 1px;">Desa/Kelurahan</p>
                    </td>
                    <td style="width: 52%; text-transform: uppercase;">
                        @foreach ($kartukeluarga as $item)
                            @if ($item->statushubkeluarga == 'KEPALA KELUARGA')
                                <p style="margin-top: 1px;">: {{ $item->nama }}</p>
                                <p style="margin-top: 1px;">: {{ $item->alamat }}</p>
                                <p style="margin-top: 1px;">: {{ $item->rt_rw }}</p>
                                <p style="margin-top: 1px;">: {{ $item->kel }}</p>
                            @endif
                        @endforeach
                    </td>
                    <td style="width: 16%;">
                        <div style="display: flex;">
                            <div style="width: 40%;">
                                <p style="margin-top: 1px;">Kecamatan</p>
                                <p style="margin-top: 1px;">Kabupaten/Kota</p>
                                <p style="margin-top: 1px;">Kode Pos</p>
                                <p style="margin-top: 1px;">Provinsi</p>
                            </div>
                        </div>
                    </td>
                    <td style="width: 16%; text-transform: uppercase;">
                        @foreach ($kartukeluarga as $item)
                            @if ($item->statushubkeluarga == 'KEPALA KELUARGA')
                                <p style="margin-top: 1px;">: {{ $item->kec }}</p>
                                <p style="margin-top: 1px;">: {{ $item->kota }}</p>
                                <p style="margin-top: 1px;">: {{ $item->kode_pos }}</p>
                                <p style="margin-top: 1px;">: {{ $item->provinsi }}</p>
                            @endif
                        @endforeach
                    </td>
                </tr>
            </tbody>
        </table>


        {{-- <div style="display: flex; padding:0px 20px; margin-top: 10px;">
            <div style="width: 70%;">
                <div style="display: flex;">
                    <div style="width: 30%;">
                        <p>Nama Kepala Keluarga</p>
                        <p>Alamat</p>
                        <p>RT/RW</p>
                        <p>Desa/Kelurahan</p>
                    </div>
                    <div style="width: 70%; text-transform: uppercase;">
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
            <div style="width: 30%;">
                <div style="display: flex;">
                    <div style="width: 40%;">
                        <p>Kecamatan</p>
                        <p>Kabupaten/Kota</p>
                        <p>Kode Pos</p>
                        <p>Provinsi</p>
                    </div>
                    <div style="width: 60%; text-transform: uppercase;">
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
        </div> --}}

        <div id="table">
            {{-- table data atas --}}
            <div style="padding: 0px 20px; padding-top: 10px;">
                <table style="width: 100%;">
                    <thead>
                        <tr style="text-align: center;">
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
                        <tr style=" text-align: center;">
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
                            <tr style="text-transform: uppercase;">
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
            <div style="padding: 0px 20px; padding-top: 10px;">
                <table style="width: 100%;">
                    <thead>
                        <tr style="text-align: center;">
                            <th rowspan="2">No</th>
                            <th rowspan="2">Status <br> Pernikahan</th>
                            <th rowspan="2">Tanggal <br> Perkawinan <br>/Perceraian</th>
                            <th rowspan="2">Status Hubungan <br> Dalam Keluarga</th>
                            <th rowspan="2">Kewarganegaraan</th>
                            <th colspan="2">Dokumen Imigrasi</th>
                            <th colspan="2">Nama Orang Tua</th>
                        </tr>
                        <tr style="text-align: center;">
                            <th>No. Paspor</th>
                            <th>No. KITAS/KITAP</th>
                            <th>Ayah</th>
                            <th>Ibu</th>
                        </tr>
                        <tr style="text-align: center;">
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
                            <tr style="text-transform: uppercase;">
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
        </div>

        <table style="width: 100%; padding:0px 50px; margin-top: -40px;">
            <tbody>
                <tr>
                    <td style="width: 16%;">
                        <div style="margin-top: -68px;">
                            <p>Dikeluarkan Tanggal</p>
                            <p>Lembar</p>
                        </div>
                    </td>
                    <td style="width: 20%;">
                        @foreach ($kartukeluarga as $item)
                            @if ($item->statushubkeluarga == 'KEPALA KELUARGA')
                                <p>: <span
                                        style="margin-left: 8px; border:1px solid #000;">{{ $item->tgl_keluar }}</span>
                                </p>
                            @endif
                        @endforeach
                        <p>: <span style="margin-left: 8px">I. Kepala Keluarga</span></p>
                        <p> <span style="margin-left: 14px"> II. Dukuh</span></p>
                        <p> <span style="margin-left: 14px"> III. Desa/Keluarahan</span></p>
                        <p> <span style="margin-left: 14px"> IV. Kecamatan</span></p>
                    </td>
                    <td style="width: 24%; text-align: center;">
                        <div style="margin-top: 72px;">
                            <p>KEPALA KELUARGA</p>
                        </div>
                        <div style="margin-top: 56px;">
                            @foreach ($kartukeluarga as $item)
                                @if ($item->statushubkeluarga == 'KEPALA KELUARGA')
                                    <p style="text-decoration: underline; font-weight: 600;">
                                        {{ $item->nama }}
                                    </p>
                                @endif
                            @endforeach
                            <p style="font-size: 14px;">Tanda Tangan/Cap Jempol</p>
                        </div>
                    </td>
                    <td style="width: 40%; text-align: center;">
                        <div style="margin-top: 72px;">
                            <p>KEPALA DINAS KEPENDUDUKAN DAN <br> PENCATATAN SIPIL KAB. JENEPONTO</p>
                        </div>
                        <div style="margin-top: 40px;">
                            @foreach ($kartukeluarga as $item)
                                @if ($item->statushubkeluarga == 'KEPALA KELUARGA')
                                    <p style="text-decoration: underline; font-weight: 600;">{{ $item->nama_dinas }}
                                    </p>
                                    <p style="font-size: 14px;">NIP. {{ $item->nik_dinas }}</p>
                                @endif
                            @endforeach
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        {{-- lembar pengesahan --}}
        {{-- <div style="display: flex; padding:0px 120px;">
            <div style="width: 40%;">
                <div style="display: flex; padding-left: 20px;">
                    <div style="width: 20%;">
                        <p>Dikeluarkan Tanggal</p>
                        <p>Lembar</p>
                    </div>
                    <div style="width: 65%;">
                        @foreach ($kartukeluarga as $item)
                            @if ($item->statushubkeluarga == 'KEPALA KELUARGA')
                                <p>: <span
                                        style="margin-left: 8px; border:1px solid #000;">{{ $item->tgl_keluar }}</span>
                                </p>
                            @endif
                        @endforeach
                        <p>: <span style="margin-left: 8px">I. Kepala Keluarga</span></p>
                        <p> <span style="margin-left: 14px"> II. Dukuh</span></p>
                        <p> <span style="margin-left: 14px"> III. Desa/Keluarahan</span></p>
                        <p> <span style="margin-left: 14px"> IV. Kecamatan</span></p>
                    </div>
                </div>
            </div>
            <div style="width: 20%; text-align: center; margin-top: 34px;">
                <div>
                    <p>KEPALA KELUARGA</p>
                </div>
                <div style="margin-top: 74px;">
                    <p style="text-decoration: underline; font-weight: 600;">{{ auth()->user()->nama_kepala_keluarga }}
                    </p>
                    <p class="fs-6">Tanda Tangan/Cap Jempol</p>
                </div>
            </div>
            <div style="width: 40%; text-align: center; margin-top: 34px;">
                <div>
                    <p>KEPALA DINAS KEPENDUDUKAN DAN <br> PENCATATAN SIPIL</p>
                </div>
                <div style="margin-top: 56px;">
                    @foreach ($kartukeluarga as $item)
                        @if ($item->statushubkeluarga == 'KEPALA KELUARGA')
                            <p style="text-decoration: underline; font-weight: 600;">{{ $item->nama_dinas }}</p>
                            <p style="font-size: 16px;">NIP. {{ $item->nik_dinas }}</p>
                        @endif
                    @endforeach
                </div>
            </div>
        </div> --}}
    </div>
</body>

</html>
