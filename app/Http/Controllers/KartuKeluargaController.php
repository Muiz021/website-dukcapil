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
            'goldarah' => 'required',
            'statusperkawinan' => 'required',
            'tglperkawinan' => 'required',
            'statushubkeluarga' => 'required',
            'kewarganegaraan' => 'required',
            'nopaspor' => 'required',
            'nokitap' => 'required',
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

    public function edit($id)
    {
        $kk = KartuKeluarga::find($id);
        return view('Admin.KK.edit', compact('kk'));
    }
    public function update(Request $request, $id)
    {
        $kk = KartuKeluarga::where('id', $id)->first();
        $data = $request->all();
        $kk->fill($data);
        $kk->save();
        Alert::success('Sukses', 'Data Berhasil Diupdate');
        return redirect()->route('kkadmin.index');
    }

    public function destroy($id)
    {
        $data = KartuKeluarga::find($id);
        $data->delete();
        Alert::success('Sukses', 'Data Kartu Keluarga Berhasil Dihapus');
        return redirect()->route('kkadmin.index');
    }

    public function createAnggota()
    {
        $data = KartuKeluarga::all();
        return view('Admin.KK.tambahanggota', compact('data'));
    }

    public function storeAnggota(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'jk' => 'required',
            'tempatlahir' => 'required',
            'tgllahir' => 'required',
            'agama' => 'required',
            'pendidikan' => 'required',
            'jpekerjaan' => 'required',
            'goldarah' => 'required',
            'statusperkawinan' => 'required',
            'tglperkawinan' => 'required',
            'statushubkeluarga' => 'required',
            'kewarganegaraan' => 'required',
            'nopaspor' => 'required',
            'nokitap' => 'required',
            'namaibu' => 'required',
            'namaayah' => 'required',
        ]);

        $kk = new KartuKeluarga();
        $kk->fill($data);

        $kk->save();
        Alert::success('Sukses', 'Data Anggota Keluarga Berhasil Ditambah');
        return redirect()->route('kkadmin.index');
    }
    public function showAnggota($nokk)
    {
        $kk = KartuKeluarga::find($nokk);
        $data = KartuKeluarga::where('nokk', $nokk)->first();
        $datakk = KartuKeluarga::all();
        return view('Admin.KK.show', compact('kk', 'data', 'datakk'));
    }
}
