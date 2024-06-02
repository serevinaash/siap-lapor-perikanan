<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IkanRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'Nama_Ikan' => 'required|string|max:50',
            'Deskripsi' => 'required|string',
            'ID_Kategori' => 'required|exists:kategori,id', // Assuming there's a 'kategori' table with 'id' column
            'Kategori_Ikan' => 'required|string|max:50',
        ];
    }
}
