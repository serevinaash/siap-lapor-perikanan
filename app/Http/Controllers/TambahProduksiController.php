<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Ikan;
use App\Models\Produksi;
use App\Http\Requests\DataProduksiRequest;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;

class TambahProduksiController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = Produksi::select('produksi_perikanan.*', 'ikan.Nama_Ikan')
                                 ->join('ikan', 'produksi_perikanan.ID_Ikan', '=', 'ikan.ID_Ikan')
                                 ->where('produksi_perikanan.Status_Produksi', '!=', 'selesai');
            
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <form class="inline-block" action="' . route('petugas.dataproduksi.edit', $item->ID_Produksi) . '" method="GET">
                             <button type="submit" class="px-2 py-1 m-2 bg-green-500 hover:bg-green-700 text-white font-bold rounded">
                            <i class="fas fa-edit"></i>
                        </button>
                        </form>
                        <form class="inline-block" action="' . route('petugas.dataproduksi.destroy', $item->ID_Produksi) . '" method="POST">
                            <button type="submit" class="px-2 py-1 m-2 bg-red-500 hover:bg-red-700 text-white font-bold rounded">
                        <i class="fas fa-trash"></i> 
                        </button>
                            ' . method_field('delete') . csrf_field() . '
                        </form>
                           ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('pages.petugas.tambahproduksi.index');
    }
     public function create(Request $request)
    {
        $idIkan = $request->get('id');
        return view('pages.petugas.tambahproduksi.create', compact('idIkan'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'ID_Ikan' => 'required|exists:ikan,ID_Ikan',
            'Jumlah_Produksi' => 'required|numeric',
            'Tanggal_Produksi' => 'required|date',
            'Lokasi_Produksi' => 'required|string|max:100',
            'Harga_Ikan' => 'required|numeric',
            'Pengola_Produksi' => 'required|string|max:100',
            'Status_Produksi' => 'required|string|max:50',
        ]);

        $requestData = $request->all();
        $ID_Ikan = $request->input('ID_Ikan');
        $requestData['ID_Ikan'] = $ID_Ikan;

        Produksi::create($requestData);

        return redirect()->route('petugas.tambahproduksi.create')->with('success', 'Data produksi berhasil dibuat.');
    }
}