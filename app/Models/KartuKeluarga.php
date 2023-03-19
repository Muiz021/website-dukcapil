<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuKeluarga extends Model
{
    use HasFactory;

    protected $fillable = [
        'nokk',
        'alamat',
        'rt_rw',
        'kel',
        'kec',
        'kota',
        'kode_pos',
        'provinsi',

        'nama',
        'nik',
        'jk',
        'tempatlahir',
        'tgllahir',
        'agama',
        'pendidikan',
        'jpekerjaan',
        'goldarah',
        'statusperkawinan',
        'tglperkawinan',
        'statushubkeluarga',
        'kewarganegaraan',
        'nopaspor',
        'nokitap',
        'namaibu',
        'namaayah',

        'tgl_keluar',
        'nama_dinas',
        'nik_dinas',
    ];
}
