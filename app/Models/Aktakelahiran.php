<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktakelahiran extends Model
{
    use HasFactory;
    protected $fillable = [
        'namattdkelahiran',
        'nikttdkelahiran',
        'umurttdkelahiran',
        'pekerjaanttdkelahiran',
        'alamatttdkelahiran',

        'namaanak',
        'nikanak',
        'ttlanak',
        'anakke',
        'alamatanak',

        'namaibu',
        'nikibu',
        'ttlibu',
        'pekerjaanibu',
        'alamatibu',

        'namapenolong',
        'nikinikpenolongbu',
        'ttlipekerjaanpenolongbu',
        'pekerjaanibu',
        'alamatalamatpenolongibu',

        'bukunikah',
        'suratketbidan',
        'ktportuaibu',
        'ktportuayah',
        'kkkelahiran',
    ];
}
