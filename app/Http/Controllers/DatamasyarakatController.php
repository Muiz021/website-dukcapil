<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DatamasyarakatController extends Controller
{
    public function index()
    {
        $user = User::where('roles', '=', 'user')->get();
        return view('Admin.Datamasyarakat.datamasyarakat', compact('user'));
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('Admin.Datamasyarakat.show', compact('user'));
    }
    public function destroy($id)
    {
        $user = User::find($id);
        Storage::delete(Str::of($user->foto_ktp)->replace('storage', 'public')->toString());
        Storage::delete(Str::of($user->foto_kk)->replace('storage', 'public')->toString());
        $user->delete();
        return redirect()->route('datamasayarakat.index');
    }

    public function verifikasi_user($id)
    {
        $user = User::findorfail($id);
        $user->update([
            "is_verification" => 1
        ]);
        return redirect()->route('datamasyarakat.index');
    }
}
