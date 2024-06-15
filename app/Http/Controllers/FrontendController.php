<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produksi;
use App\Models\IkanProduksi;
use Yajra\DataTables\Facades\DataTables;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportUser;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        $produksiData = Produksi::with('ikan')->get();

        $totalJumlahProduksi = Produksi::sum('Jumlah_Produksi');
        $produksiProses = Produksi::where('Status_Produksi', 'proses')->count();
        $produksiSelesai = Produksi::where('Status_Produksi', 'selesai')->count();
        $totalProduksi = $produksiProses + $produksiSelesai;
       
         // Kirim data ke view
         return view('pages.frontend.index', [
            'totalJumlahProduksi' => $totalJumlahProduksi,
            'produksiProses' => $produksiProses,
            'produksiSelesai' => $produksiSelesai,
            'totalProduksi' => $totalProduksi,
         ]);
    }

     public function reports()
    {
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
        return view("pages.frontend.reports", compact('categories', 'values', 'labels', 'monthlyValues'));
    }

    public function download()
    {
        if (request()->ajax()) {
            $query = IkanProduksi::where('Status_Produksi', 'selesai');

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('pages.frontend.download');
    }

    public function team()
    {
        return view('pages.frontend.team');
    }

    public function contact()
    {
        return view('pages.frontend.contact');
    }
    
}
