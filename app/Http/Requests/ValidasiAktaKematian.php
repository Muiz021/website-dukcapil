<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidasiAktaKematian extends FormRequest
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
            'keteranganlaporan' => 'required',
            'namaalm' => 'required',
            'nikalm' => 'required',
            'umuralm' => 'required',

            'hari' => 'required',
            'tgl' => 'required',
            'pukul' => 'required',
            'bertempat' => 'required',
            'penyebab' => 'required',
            'bukti' => 'required|mimes:jpeg,png,jpg|max:5000',

            'kkasli' => 'required|mimes:pdf|max:5000',
            'ktppemohon' => 'required|mimes:pdf|max:5000',
            'ktpsaksi1' => 'required|mimes:pdf|max:5000',
            'ktpsaksi2' => 'required|mimes:pdf|max:5000',
        ];
    }

    public function messages()
    {
        return[
            'keteranganlaporan' => 'Tidak Boleh Kosong',
            'namaalm' => 'Tidak Boleh Kosong',
            'nikalm' => 'Tidak Boleh Kosong',
            'umuralm' => 'Tidak Boleh Kosong',
    
            'hari' => 'Tidak Boleh Kosong',
            'tgl' => 'Tidak Boleh Kosong',
            'pukul' => 'Tidak Boleh Kosong',
            'bertempat' => 'Tidak Boleh Kosong',
            'penyebab' => 'Tidak Boleh Kosong',
            'bukti' => 'File harus JPEG,PNG,JPG ',
    
            'kkasli' => 'File Harus PDF',
            'ktppemohon' => 'File Harus PDF',
            'ktpsaksi1' => 'File Harus PDF',
            'ktpsaksi2' => 'File Harus PDF',
        ];
    }
}
