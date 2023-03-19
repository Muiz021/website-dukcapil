<?php

namespace App\Http\Controllers;

use App\Models\Aktakematian;
use Illuminate\Http\Request;
use App\Models\Aktakelahiran;
use App\Models\KartuKeluarga;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class KartuKeluargaController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $aktakelahiran = Aktakelahiran::where('user_id', $user->id)->get();
        $aktakematian = Aktakematian::where('user_id', $user->id)->get();
        return view('User.KartuKeluarga.index', compact('aktakelahiran', 'aktakematian'));
    }
    public function show()
    {
        $user = Auth::user();
        $aktakelahiran = Aktakelahiran::where('user_id', $user->id)->get();
        return view('User.KartuKeluarga.show', compact('aktakelahiran'));
    }

    public function indexAdmin()
    {
        $kk = KartuKeluarga::where('statushubkeluarga', '=', 'Kepala Keluarga')->get();
        return view('Admin.KK.index', compact('kk'));
    }

    public function create()
    {
        return view('Admin.KK.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nokartu' => 'required',
            'nokk' => 'required',
            'alamat' => 'required',
            'rt_rw' => 'required',
            'kel' => 'required',
            'kec' => 'required',
            'kota' => 'required',
            'kode_pos' => 'required',
            'provinsi' => 'required',

            'nama' => 'required',
            'nik' => 'required',
            'jk' => 'required',
            'tempatlahir' => 'required',
            'tgllahir' => 'required',
            'agama' => 'required',
            'pendidikan' => 'required',
            'jpekerjaan' => 'required',
            'statuspernikahan' => 'required',
            'statushubkeluarga' => 'required',
            'kewarganegaraan' => 'required',
            'nopaspor' => 'required',
            'nokitas' => 'required',
            'namaibu' => 'required',
            'namaayah' => 'required',

            'tgl_keluar' => 'required',
            'nama_dinas' => 'required',
            'nik_dinas' => 'required',
        ]);

        $kk = new KartuKeluarga();
        $kk->fill($data);

        $kk->save();
        Alert::success('Sukses', 'Data Berhasil Ditambah');
        return redirect()->route('kkadmin.index');
    }
}
