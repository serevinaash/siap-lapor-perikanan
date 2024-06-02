<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ikan;
use App\Models\Produksi;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        // Mendapatkan data dari tabel produksi_perikanan dan ikan
        $produksiData = Produksi::with('ikan')->get();

        // Mengambil data untuk chart
        $categories = [];
        $values = [];

        foreach ($produksiData as $data) {
            $categories[] = $data->ikan->Nama_Ikan; // Nama ikan dari relasi
            $values[] = $data->Jumlah_Produksi; // Jumlah produksi
        }

        // Mengirim data ke view
        return view("pages.frontend.index", compact('categories', 'values'));
    }
}
