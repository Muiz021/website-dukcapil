<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Aktakelahiran;
use Illuminate\Support\Facades\Auth;

class AktakelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $aktakelahiran = Aktakelahiran::where('user_id', $user->id)->get();
        return view('User.Aktakelahiran.aktakelahiran', compact('aktakelahiran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User.Aktakelahiran.formulir');
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
            'namattdkelahiran' => 'required',
            'nikttdkelahiran' => 'required',
            'umurttdkelahiran' => 'required',
            'pekerjaanttdkelahiran' => 'required',
            'alamatttdkelahiran' => 'required',

            'namaanak' => 'required',
            'nikanak' => 'required',
            'ttlanak' => 'required',
            'anakke' => 'required',
            'alamatanak' => 'required',

            'namaibu' => 'required',
            'nikibu' => 'required',
            'ttlibu' => 'required',
            'pekerjaanibu' => 'required',
            'alamatibu' => 'required',

            'namapenolong' => 'required',
            'nikpenolong' => 'required',
            'pekerjaanpenolong' => 'required',
            'alamatpenolong' => 'required',

            'bukunikah' => 'required|mimes:jpeg,png,jpg|max:5000',
            'suratketbidan' => 'required|mimes:jpeg,png,jpg|max:5000',
            'ktportuaibu' => 'required|mimes:jpeg,png,jpg|max:5000',
            'ktportuayah' => 'required|mimes:jpeg,png,jpg|max:5000',
            'kkkelahiran' => 'required|mimes:jpeg,png,jpg|max:5000',
        ]);


        $aktakelahiran = new Aktakelahiran();
        $aktakelahiran->user_id = Auth::user()->id;
        $aktakelahiran->fill($data);

        $dir = 'Aktakelahiran/' . $request->namattdkelahiran;
        $path = $request
            ->file('bukunikah')
            ->storePubliclyAs($dir, "bukunikah.{$request->file('bukunikah')->extension()}");
        $aktakelahiran->bukunikah = Str::of($path)->replace('public', 'storage')->toString();

        $dir = 'Aktakelahiran/' . $request->namattdkelahiran;
        $path = $request
            ->file('suratketbidan')
            ->storePubliclyAs($dir, "suratketbidan.{$request->file('suratketbidan')->extension()}");
        $aktakelahiran->suratketbidan = Str::of($path)->replace('public', 'storage')->toString();

        $dir = 'Aktakelahiran/' . $request->namattdkelahiran;
        $path = $request
            ->file('ktportuaibu')
            ->storePubliclyAs($dir, "ktportuaibu.{$request->file('ktportuaibu')->extension()}");
        $aktakelahiran->ktportuaibu = Str::of($path)->replace('public', 'storage')->toString();

        $dir = 'Aktakelahiran/' . $request->namattdkelahiran;
        $path = $request
            ->file('ktportuayah')
            ->storePubliclyAs($dir, "ktportuayah.{$request->file('ktportuayah')->extension()}");
        $aktakelahiran->ktportuayah = Str::of($path)->replace('public', 'storage')->toString();

        $dir = 'Aktakelahiran/' . $request->namattdkelahiran;
        $path = $request
            ->file('kkkelahiran')
            ->storePubliclyAs($dir, "kkkelahiran.{$request->file('kkkelahiran')->extension()}");
        $aktakelahiran->kkkelahiran = Str::of($path)->replace('public', 'storage')->toString();

        $aktakelahiran->save();
        return redirect()->route('aktakelahiran.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aktakelahiran  $aktakelahiran
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aktakelahiran = Aktakelahiran::find($id);
        return view('User.Aktakelahiran.show', compact('aktakelahiran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aktakelahiran  $aktakelahiran
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aktakelahiran = Aktakelahiran::where('id', $id)->first();
        return view('User.Aktakelahiran.edit', compact('aktakelahiran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aktakelahiran  $aktakelahiran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aktakelahiran = Aktakelahiran::where('id', $id)->first();
        $data = $request->all();

        if (!$request->file("bukunikah") && !$request->file("suratketbidan") && !$request->file("ktportuaibu") && !$request->file("ktportuayah") && !$request->file("kkkelahiran")) {
            $aktakelahiran->fill($data);
            $aktakelahiran->save();
        }
        if ($request->file("bukunikah")) {
            $aktakelahiran->fill($data);

            // foto anda
            $dir = 'Aktakelahiran/' . $request->namattdkelahiran;
            $path = $request
                ->file('bukunikah')
                ->storePubliclyAs($dir, "bukunikah.{$request->file('bukunikah')->extension()}");
            $aktakelahiran->bukunikah = Str::of($path)->replace('public', 'storage')->toString();
            $aktakelahiran->save();
        }
        if ($request->file("suratketbidan")) {
            $aktakelahiran->fill($data);

            // foto anda
            $dir = 'Aktakelahiran/' . $request->namattdkelahiran;
            $path = $request
                ->file('suratketbidan')
                ->storePubliclyAs($dir, "suratketbidan.{$request->file('suratketbidan')->extension()}");
            $aktakelahiran->suratketbidan = Str::of($path)->replace('public', 'storage')->toString();
            $aktakelahiran->save();
        }
        if ($request->file("ktportuaibu")) {
            // foto ktp
            $dir = 'Aktakelahiran/' . $request->namattdkelahiran;
            $path = $request
                ->file('ktportuaibu')
                ->storePubliclyAs($dir, "ktportuaibu.{$request->file('ktportuaibu')->extension()}");
            $aktakelahiran->ktportuaibu = Str::of($path)->replace('public', 'storage')->toString();
            $aktakelahiran->save();
        }
        if ($request->file("ktportuayah")) {
            // foto ktp
            $dir = 'Aktakelahiran/' . $request->namattdkelahiran;
            $path = $request
                ->file('ktportuayah')
                ->storePubliclyAs($dir, "ktportuayah.{$request->file('ktportuayah')->extension()}");
            $aktakelahiran->ktportuayah = Str::of($path)->replace('public', 'storage')->toString();
            $aktakelahiran->save();
        }
        if ($request->file("kkkelahiran")) {
            // foto ktp
            $dir = 'Aktakelahiran/' . $request->namattdkelahiran;
            $path = $request
                ->file('kkkelahiran')
                ->storePubliclyAs($dir, "kkkelahiran.{$request->file('kkkelahiran')->extension()}");
            $aktakelahiran->kkkelahiran = Str::of($path)->replace('public', 'storage')->toString();
            $aktakelahiran->save();
        }

        return redirect()->route('aktakelahiran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aktakelahiran  $aktakelahiran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aktakelahiran $aktakelahiran)
    {
        //
    }
}
