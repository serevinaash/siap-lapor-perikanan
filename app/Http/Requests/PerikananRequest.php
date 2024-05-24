<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class PerikananRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ID_Ikan' => 'required|exists:ikan,ID_Ikan',
            'Jumlah_Produksi' => 'required|integer|min:1',
            'Tanggal_Produksi' => 'required|date',
            'Lokasi_Produksi' => 'required|string|max:50',
            'Harga_Ikan' => 'required|numeric|min:0',
            'Pengola_Produksi' => 'required|exists:users,id',
            'Status_Produksi' => 'required|string|max:20',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'ID_Ikan.required' => 'ID Ikan is required.',
            'ID_Ikan.exists' => 'The selected ID Ikan does not exist.',
            'Jumlah_Produksi.required' => 'Jumlah Produksi is required.',
            'Jumlah_Produksi.integer' => 'Jumlah Produksi must be an integer.',
            'Jumlah_Produksi.min' => 'Jumlah Produksi must be at least 1.',
            'Tanggal_Produksi.required' => 'Tanggal Produksi is required.',
            'Tanggal_Produksi.date' => 'Tanggal Produksi must be a valid date.',
            'Lokasi_Produksi.required' => 'Lokasi Produksi is required.',
            'Lokasi_Produksi.string' => 'Lokasi Produksi must be a string.',
            'Lokasi_Produksi.max' => 'Lokasi Produksi must not exceed 50 characters.',
            'Harga_Ikan.required' => 'Harga Ikan is required.',
            'Harga_Ikan.numeric' => 'Harga Ikan must be a number.',
            'Harga_Ikan.min' => 'Harga Ikan must be at least 0.',
            'Pengola_Produksi.required' => 'Pengola Produksi is required.',
            'Pengola_Produksi.exists' => 'The selected Pengola Produksi does not exist.',
            'Status_Produksi.required' => 'Status Produksi is required.',
            'Status_Produksi.string' => 'Status Produksi must be a string.',
            'Status_Produksi.max' => 'Status Produksi must not exceed 20 characters.',
        ];
    }
}
