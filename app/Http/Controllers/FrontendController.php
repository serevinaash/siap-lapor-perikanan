<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produksi;
use App\Models\IkanProduksi;

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

        // Mendapatkan data produksi per bulan untuk line chart
        $produksiBulanan = Produksi::selectRaw('MONTH(Tanggal_Produksi) as month, SUM(Jumlah_Produksi) as total_produksi')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        // Inisialisasi data untuk chart bulanan
        $labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $monthlyValues = array_fill(0, 12, 0); // Inisialisasi array dengan 12 bulan dengan nilai 0

        // Mengisi nilai produksi berdasarkan bulan
        foreach ($produksiBulanan as $data) {
            $monthlyValues[$data->month - 1] = $data->total_produksi;
        }

        // Mengirim data ke view
        return view("pages.frontend.index", compact('categories', 'values', 'labels', 'monthlyValues'));
    }
}
