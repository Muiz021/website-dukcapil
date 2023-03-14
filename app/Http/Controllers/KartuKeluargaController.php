<?php

namespace App\Http\Controllers;

use App\Models\Aktakematian;
use Illuminate\Http\Request;
use App\Models\Aktakelahiran;
use Illuminate\Support\Facades\Auth;

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
        return view('Admin.KK.index');
    }
}
