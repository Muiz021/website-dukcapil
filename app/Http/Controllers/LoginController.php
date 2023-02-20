<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function login()
    {
        return view('Login.login');
    }
    public function register()
    {
        return view('Login.regis');
    }

    public function dashboard_admin()
    {
        return view('Admin.Dashboard.dashboard');
    }

    public function dashboard_user()
    {
        return view('User.Dashboard.dashboard');
    }

    public function register_action(Request $request)
    {
        $user = new User();

        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->roles = 'user';
        $user->nama_lengkap = $request->nama_lengkap;
        $user->nik = $request->nik;
        $user->foto_ktp = $request->foto_ktp;
        $user->foto_kk = $request->foto_kk;

        $data = $user;

        $dir = 'Data Masyarakat/' . $request->username;
        $path = $request
            ->file('foto_ktp')
            ->storePubliclyAs($dir, "foto_ktp.{$request->file('foto_ktp')->extension()}");
        $data->foto_ktp = Str::of($path)->replace('public', 'storage')->toString();

        $dir = 'Data Masyarakat/' . $request->username;
        $path = $request
            ->file('foto_kk')
            ->storePubliclyAs($dir, "foto_kk.{$request->file('foto_kk')->extension()}");
        $data->foto_kk = Str::of($path)->replace('public', 'storage')->toString();

        $data->save();
        Alert::success('Sukses Mendaftar', 'Tunggu Verifikasi dari Admin');
        return redirect('/');
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            if (auth()->user()->roles == 'admin') {
                return redirect()->route('dashboard-admin');
                return view('Admin.Dashboard.dashboard')->with('users', $request);
            } else {
                if (auth()->user()->roles == 'user' && auth()->user()->is_verification == 1) {
                    return redirect()->route('dashboard-user');
                    return view('User.Dashboard.dashboard')->with('users', $request);
                } else {
                    return back()->with('wait', 'akun anda belum di verifikasi oleh admin');
                }
            }
        }
        return back()->withErrors([
            'password' => 'Username atau Password anda salah',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
