<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProduksiRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'ID_Produksi' => 'required|integer',
            'Nama_Ikan' => 'required|string|max:50',
            'Deskripsi' => 'required|string',
            'Kategori_Ikan' => 'required|string|max:50',
            'Jumlah_Produksi' => 'required|integer',
            'Tanggal_Produksi' => 'required|date',
            'Lokasi_Produksi' => 'required|string|max:50',
            'Harga_Ikan' => 'required|numeric',
            'Pengola_Produksi' => 'required|integer',
            'Status_Produksi' => 'required|string|in:proses,selesai|max:20',
            'ID_Ikan' => 'required|interger',
        ];
    }
}
