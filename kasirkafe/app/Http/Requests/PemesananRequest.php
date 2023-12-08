<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PemesananRequest extends FormRequest
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
            'nm_pelanggan' => 'required|max:50',
            'id_menu' => 'required',
            'jumlah' => 'required|numeric|min:0|not_in:0|max:3',
            'kursi' => 'required',
            'ket' => 'required|max:200',
        ];
    }

    public function attributes()
    {
        return [
            'nm_pelanggan' => 'Nama Pelanggan',
            'id_menu' => 'Nama Menu',
            'jumlah' => 'Jumlah Pemesanan',
            'kursi' => 'Nomor Kursi',
            'ket' => 'Keterangan',
        ];
    }
    public function messages()
    {
        return [
            'nm_pelanggan.required' => 'Nama Pelanggan wajib diisi untuk melakukan pemesanan!',
            'id_menu.required' => 'Nama Menu wajib diisi untuk melakukan pemesanan!',
            'jumlah.required' => 'Jumlah Pemesanan wajib diisi untuk melakukan pemesanan!',
            'kursi.required' => 'Nomor Kursi  wajib diisi untuk melakukan pemesanan!',
            'ket.required' => 'Keterangan wajib diisi untuk melakukan pemesanan!',
            'nm_pelanggan.max:50' => 'Nama Pelanggan diisi maksimal 50 karakter!',
            'jumlah.numeric.min:0.not_in:0' => 'Jumlah Pemesanan tidak boleh diisi angka 0 !',
            'jumlah.max:3' => 'Jumlah Pemesanan diisi maksimal sebanyak 3 angka!',
            'ket.max:200' => 'Keterangan diisi maksimal 200 karakter!',
        ];
    }
}
