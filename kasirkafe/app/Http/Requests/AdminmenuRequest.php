<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminmenuRequest extends FormRequest
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
            'nama_menu' => 'required|max:50',
            'harga' => 'required|numeric|min:0|not_in:0',
            'ket' => 'required|max:200' ,
            'foto' => 'required' ,
        ];
    }

    public function attributes()
    {
        return [
            'nama_menu' => 'Nama Menu',
            'harga' => 'Harga',
            'ket' => 'Keterangan' ,
            'foto' => 'Foto' ,
        ];
    }

    public function messages()
    {
        return [
            'nama_menu.required' => 'Nama Menu wajib diisi untuk melakukan penambahan menu baru!',
            'harga.required' => 'Harga wajib diisi untuk melakukan penambahan menu baru!',
            'ket.required' => 'Keterangan wajib diisi untuk melakukan penambahan menu baru!' ,
            'foto.required' => 'Foto wajib diisi untuk melakukan penambahan menu baru!' ,
            'nama_menu.max:50' => 'Nama Menu diisi maksimal 50 karakter!',
            'harga.numeric|min:0|not_in:0' => 'Harga tidak boleh diisi dengan angka 0 !',
            'ket.max:200' => 'Keterangan diisi maksimal 200 karakter!' ,
        ];
    }
}
