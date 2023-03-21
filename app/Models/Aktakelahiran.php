<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktakelahiran extends Model
{
    use HasFactory;
    protected $fillable = [
        'is_verification',

        'namaanak',
        // 'nikanak',
        'jk',
        'tempatlahiranak',
        'tgllahiranak',
        'agama',
        'pendidikan',
        'jpekerjaan',
        'statuspernikahan',
        'statushubkeluarga',
        'kewarganegaraan',
        'nopaspor',
        'nokitas',

        'namaibu',
        'namaayah',

        'bukunikah',
        'suratketbidan',
        'ktportuaibu',
        'ktportuayah',
        'kkkelahiran',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
