<?php

namespace App\Http\Controllers;

use App\Models\Aktakelahiran;
use App\Models\Aktakematian;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexkelahiran()
    {
        $kelahiran = Aktakelahiran::all();
        return view('Admin.Aktakelahiran.aktakelahiran', compact('kelahiran'));
    }

    public function detaildatakelahiran($id)
    {
        $kelahiran = Aktakelahiran::find($id);
        return view('Admin.Aktakelahiran.detailaktakelahiran', compact('kelahiran'));
    }

    public function verifikasi_dataaktakelahiran($id)
    {
        $kelahiran = Aktakelahiran::findorfail($id);
        $kelahiran->update([
            "is_verification" => 1
        ]);
        return redirect()->route('datakelahiran.index');
    }


    public function indexkematian()
    {
        $kematian = Aktakematian::all();
        return view('Admin.Aktakematian.aktakematian', compact('kematian'));
    }

    public function detaildatakematian($id)
    {
        $kematian = Aktakematian::find($id);
        return view('Admin.Aktakematian.detailaktakematian', compact('kematian'));
    }

    public function verifikasi_dataaktakematian($id)
    {
        $kelahiran = Aktakematian::findorfail($id);
        $kelahiran->update([
            "is_verification" => 1
        ]);
        return redirect()->route('datakematian.index');
    }
}
