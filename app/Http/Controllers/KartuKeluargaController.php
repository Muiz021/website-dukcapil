<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\PDF;
use App\Models\Aktakematian;
use Illuminate\Http\Request;
use App\Models\Aktakelahiran;
use App\Models\KartuKeluarga;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class KartuKeluargaController extends Controller
{
    // public function pdf_history_antrian()
    // {
    //     $tanggapan = Tanggapan::orderBy('tgl_periksa', 'asc')->get();

    //     $pdf = PDF::loadView('admin.pdf.history-antrian-pdf', compact('tanggapan'))->setPaper('A4', 'potrait')->setOptions(['defaultFont' => 'sans-serif']);
    //     $pdf->render();
    //     $waktu = date("d-F-Y");
    //     return $pdf->stream("data_history_antrian_{$waktu} .pdf");
    // }
    public function downloadPDF()
    {
        $user = Auth::user();
        $kartukeluarga = KartuKeluarga::where('nokk', $user->nokk)->get();
        $pdf = PDF::loadView('User.downloadPDF.kkPDF', compact('kartukeluarga'))->setPaper('A4', 'landscape')->setOptions(['defaultFont' => 'sans-serif']);
        $pdf->render();
        return $pdf->stream("KARTU KELARGA.pdf");
    }
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
        $kartukeluarga = KartuKeluarga::where('nokk', $user->nokk)->get();
        return view('User.KartuKeluarga.show', compact('kartukeluarga'));
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
    public function editAnggota($id)
    {
        $kk = KartuKeluarga::find($id);
        return view('Admin.KK.editanggota', compact('kk'));
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

    public function createAnggota($nokk)
    {
        $data = KartuKeluarga::where('nokk', $nokk)->get();
        $kelahiran = Aktakelahiran::where('is_verification', '=', '1')->get();
        return view('Admin.KK.tambahanggota', compact('data', 'nokk', 'kelahiran'));
    }
    

    public function storeAnggota(Request $request)
    {
        // dd("tes");
        $data = $request->validate([
            'nokk' => 'required',
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
        $kematian = AktaKematian::where('is_verification', '=', '1')->get();
        return view('Admin.KK.show', compact('kk', 'data', 'datakk', 'kematian'));
    }
}
