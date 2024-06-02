<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Laporan extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ID_Ikan' => 'required|exists:ikan,ID_Ikan|integer',
            'Jumlah_Produksi' => 'required|integer',
            'Tanggal_Produksi' => 'required|date',
            'Lokasi_Produksi' => 'required|string|max:50',
            'Harga_Ikan' => 'required|numeric|min:0',
            'Pengola_Produksi' => 'required|exists:users,id|integer',
            'Status_Produksi' => 'required|string|max:20',
        ];
    }
}
