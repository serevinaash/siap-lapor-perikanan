<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Produksi;
use App\Models\IkanProduksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetugasController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->roles == "PETUGAS") {
            // Fetch all production data with relationship
            $produksiData = Produksi::with('ikan')->get();

            // Calculate total counts
            $totalJumlahProduksi = Produksi::sum('Jumlah_Produksi');
            $produksiProses = Produksi::where('Status_Produksi', 'proses')->count();
            $produksiSelesai = Produksi::where('Status_Produksi', 'selesai')->count();
            $totalProduksi = $produksiProses + $produksiSelesai;
      
            // Fetch data for chart
            $categories = [];
            $values = [];

            foreach ($produksiData as $data) {
                $categories[] = $data->ikan->Nama_Ikan; // Nama ikan dari relasi
                $values[] = $data->Jumlah_Produksi; // Jumlah produksi
            }

            // Fetch monthly production data for line chart
            $produksiBulanan = Produksi::selectRaw('MONTH(Tanggal_Produksi) as month, SUM(Jumlah_Produksi) as total_produksi')
                ->groupBy('month')
                ->orderBy('month')
                ->get();

            // Initialize data for monthly chart
            $labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            $monthlyValues = array_fill(0, 12, 0); // Initialize array with 12 months with value 0

            // Populate monthly production values
            foreach ($produksiBulanan as $data) {
                $monthlyValues[$data->month - 1] = $data->total_produksi;
            }

            // Pass data to the view
            return view("petugas", compact('categories', 'values', 'labels', 'monthlyValues', 'totalProduksi', 'produksiProses', 'produksiSelesai','totalJumlahProduksi'));
        }

        return redirect("/");
    }
}
