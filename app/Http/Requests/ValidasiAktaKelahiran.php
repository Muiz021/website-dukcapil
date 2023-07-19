<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidasiAktaKelahiran extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'namaanak' => 'required',
              // 'nikanak' => 'required',
            'jk' => 'required',
            'tempatlahiranak' => 'required',
            'tgllahiranak' => 'required',
            'agama' => 'required',
            // 'pendidikan' => 'required',
            // 'jpekerjaan' => 'required',
            // 'statuspernikahan' => 'required',
            // 'statushubkeluarga' => 'required',
            // 'kewarganegaraan' => 'required',
            // 'nopaspor' => 'required',
            // 'nokitas' => 'required',

            'namaibu' => 'required',
            'namaayah' => 'required',

            'bukunikah' => 'required|mimes:pdf|max:5000',
            'suratketbidan' => 'required|mimes:pdf|max:5000',
            'ktportuaibu' => 'required|mimes:pdf|max:5000',
            'ktportuayah' => 'required|mimes:pdf|max:5000',
            'kkkelahiran' => 'required|mimes:pdf|max:5000',
        ];
    }

    public function messages()
    {
        return[
          'namaanak' => 'Tidak Boleh Kosong',
          
          'jk' => 'Tidak Boleh Kosong',
          'tempatlahiranak' => 'Tidak Boleh Kosong',
          'tgllahiranak' => 'Tidak Boleh Kosong',
          'agama' => 'Tidak Boleh Kosong',

          'namaibu' => 'Tidak Boleh Kosong',
          'namaayah' => 'Tidak Boleh Kosong',

          'bukunikah' => 'Harus File PDF',
          'suratketbidan' => 'Harus File PDF',
          'ktportuaibu' => 'Harus File PDF',
          'ktportuayah' => 'Harus File PDF',
          'kkkelahiran' => 'Harus File PDF',
        ];
    }
}
