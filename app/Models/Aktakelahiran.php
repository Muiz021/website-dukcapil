<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktakelahiran extends Model
{
    use HasFactory;
    protected $fillable = [
        'is_verification',

        'namattdkelahiran',
        'nikttdkelahiran',
        'umurttdkelahiran',
        'pekerjaanttdkelahiran',
        'alamatttdkelahiran',

        'namaanak',
        'nikanak',
        'tempatlahiranak',
        'tgllahiranak',
        'anakke',
        'alamatanak',

        'namaibu',
        'nikibu',
        'pekerjaanibu',
        'alamatibu',

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
