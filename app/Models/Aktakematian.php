<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktakematian extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_verification',

        'keteranganlaporan',
        'namaalm',
        'nikalm',
        'umuralm',

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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
