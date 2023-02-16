<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Aktakematian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AktakematianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $aktakematian = Aktakematian::where('user_id', $user->id)->get();
        return view('User.Aktakematian.aktakematian', compact('aktakematian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User.Aktakematian.formulir');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabkota' => 'required',

            'namattd' => 'required',
            'nikttd' => 'required',
            'umurttd' => 'required',
            'pekerjaanttd' => 'required',
            'alamatttd' => 'required',

            'keteranganlaporan' => 'required',
            'namaalm' => 'required',
            'nikalm' => 'required',
            'umuralm' => 'required',
            'pekerjaanalm' => 'required',
            'agamaalm' => 'required',
            'alamatalm' => 'required',

            'hari' => 'required',
            'tgl' => 'required',
            'pukul' => 'required',
            'bertempat' => 'required',
            'penyebab' => 'required',
            'bukti' => 'required|mimes:jpeg,png,jpg|max:5000',

            'kkasli' => 'required|mimes:jpeg,png,jpg|max:5000',
            'ktppemohon' => 'required|mimes:jpeg,png,jpg|max:5000',
            'ktpsaksi1' => 'required|mimes:jpeg,png,jpg|max:5000',
            'ktpsaksi2' => 'required|mimes:jpeg,png,jpg|max:5000',
        ]);

        $aktakematian = new Aktakematian();
        $aktakematian->user_id = Auth::user()->id;
        $aktakematian->fill($data);

        $dir = 'Aktakematian/' . $request->namattd;
        $path = $request
            ->file('bukti')
            ->storePubliclyAs($dir, "bukti.{$request->file('bukti')->extension()}");
        $aktakematian->bukti = Str::of($path)->replace('public', 'storage')->toString();

        $dir = 'Aktakematian/' . $request->namattd;
        $path = $request
            ->file('kkasli')
            ->storePubliclyAs($dir, "kkasli.{$request->file('kkasli')->extension()}");
        $aktakematian->kkasli = Str::of($path)->replace('public', 'storage')->toString();

        $dir = 'Aktakematian/' . $request->namattd;
        $path = $request
            ->file('ktppemohon')
            ->storePubliclyAs($dir, "ktppemohon.{$request->file('ktppemohon')->extension()}");
        $aktakematian->ktppemohon = Str::of($path)->replace('public', 'storage')->toString();

        $dir = 'Aktakematian/' . $request->namattd;
        $path = $request
            ->file('ktpsaksi1')
            ->storePubliclyAs($dir, "ktpsaksi1.{$request->file('ktpsaksi1')->extension()}");
        $aktakematian->ktpsaksi1 = Str::of($path)->replace('public', 'storage')->toString();

        $dir = 'Aktakematian/' . $request->namattd;
        $path = $request
            ->file('ktpsaksi2')
            ->storePubliclyAs($dir, "ktpsaksi2.{$request->file('ktpsaksi2')->extension()}");
        $aktakematian->ktpsaksi2 = Str::of($path)->replace('public', 'storage')->toString();

        $aktakematian->save();
        return redirect()->route('aktakematian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aktakematian  $aktakematian
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aktakematian = Aktakematian::find($id);
        return view('User.Aktakematian.show', compact('aktakematian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aktakematian  $aktakematian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aktakematian = Aktakematian::where('id', $id)->first();
        return view('User.Aktakematian.edit', compact('aktakematian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aktakematian  $aktakematian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aktakematian = Aktakematian::where('id', $id)->first();
        $data = $request->all();

        if (!$request->file("bukti") && !$request->file("kkasli") && !$request->file("ktppemohon") && !$request->file("ktpsaksi1") && !$request->file("ktpsaksi2")) {
            $aktakematian->fill($data);
            $aktakematian->save();
        }
        if ($request->file("bukti")) {
            $aktakematian->fill($data);

            $dir = 'Aktakematian/' . $request->namattd;
            $path = $request
                ->file('bukti')
                ->storePubliclyAs($dir, "bukti.{$request->file('bukti')->extension()}");
            $aktakematian->bukti = Str::of($path)->replace('public', 'storage')->toString();
            $aktakematian->save();
        }
        if ($request->file("kkasli")) {
            $aktakematian->fill($data);

            $dir = 'Aktakematian/' . $request->namattd;
            $path = $request
                ->file('kkasli')
                ->storePubliclyAs($dir, "kkasli.{$request->file('kkasli')->extension()}");
            $aktakematian->kkasli = Str::of($path)->replace('public', 'storage')->toString();
            $aktakematian->save();
        }
        if ($request->file("ktppemohon")) {

            $dir = 'Aktakematian/' . $request->namattd;
            $path = $request
                ->file('ktppemohon')
                ->storePubliclyAs($dir, "ktppemohon.{$request->file('ktppemohon')->extension()}");
            $aktakematian->ktppemohon = Str::of($path)->replace('public', 'storage')->toString();
            $aktakematian->save();
        }
        if ($request->file("ktpsaksi1")) {

            $dir = 'Aktakematian/' . $request->namattd;
            $path = $request
                ->file('ktpsaksi1')
                ->storePubliclyAs($dir, "ktpsaksi1.{$request->file('ktpsaksi1')->extension()}");
            $aktakematian->ktpsaksi1 = Str::of($path)->replace('public', 'storage')->toString();
            $aktakematian->save();
        }
        if ($request->file("ktpsaksi2")) {

            $dir = 'Aktakematian/' . $request->namattd;
            $path = $request
                ->file('ktpsaksi2')
                ->storePubliclyAs($dir, "ktpsaksi2.{$request->file('ktpsaksi2')->extension()}");
            $aktakematian->ktpsaksi2 = Str::of($path)->replace('public', 'storage')->toString();
            $aktakematian->save();
        }

        return redirect()->route('aktakematian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aktakematian  $aktakematian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aktakematian $aktakematian)
    {
        //
    }
}
