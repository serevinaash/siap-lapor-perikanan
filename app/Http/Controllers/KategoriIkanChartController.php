<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriIkanChartController extends Controller
{
    public function index()
    {
        // Mendapatkan data dari tabel ikan dalam database siaplaporperikanan
        $fishData = DB::table('ikan')->get();

        // Mengambil data untuk chart
        $categories = [];
        $values = [];

        foreach ($fishData as $data) {
            // Contoh asumsi bahwa kolom pertama adalah nama dan kolom kedua adalah count
            $categories[] = $data->column1; // Ganti column1 dengan nama kolom yang sesuai
            $values[] = $data->column2; // Ganti column2 dengan nama kolom yang sesuai
        }
        
        dd($categories);
        dd($values);
    

        // Mengirim data ke view
        return view('pages.kategori_ikan_chart', compact('categories', 'values'));
    }
}
