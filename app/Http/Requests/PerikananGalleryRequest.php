<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class PerikananGalleryRequest extends FormRequest
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
            'ID_Produksi' => 'required|exists:produksi_perikanan,ID_Produksi',
            'files.*' => 'required|image|max:2048', // Max size 2MB per image
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
            'ID_Produksi.required' => 'ID Produksi is required.',
            'ID_Produksi.exists' => 'The selected ID Produksi does not exist.',
            'files.*.required' => 'Image file is required.',
            'files.*.image' => 'Each file must be an image.',
            'files.*.max' => 'Each image must not exceed 2MB.',
        ];
    }
}
