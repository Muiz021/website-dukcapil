<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktakematian extends Model
{
    use HasFactory;

    protected $fillable = [
        'kelurahan',
        'kecamatan',
        'kab/kota',

        'namattd',
        'nikttd',
        'umurttd',
        'pekerjaanttd',
        'alamatttd',

        'keteranganlaporan',
        'namaalm',
        'nikalm',
        'umuralm',
        'pekerjaanalm',
        'agamaalm',
        'alamatalm',

        'hari',
        'tgl',
        'pukul',
        'bertempat',
        'penyebab',
        'bukti',

        'kkasli',
        'ktppemohon',
        'ktpsaksi1',
        'ktpsaksi2',
    ];
}
