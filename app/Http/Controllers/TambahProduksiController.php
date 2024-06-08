<?php

namespace App\Http\Controllers;

use App\Models\IkanProduksi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Ikan;
use App\Http\Requests\ProduksiRequest;
use Yajra\DataTables\Facades\DataTables;

class TambahProduksiController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = IkanProduksi::where('Status_Produksi', '!=', 'selesai');
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <form class="inline-block" action="' . route('petugas.tambahproduksi.create') . '" method="GET">
                            <input type="hidden" name="ID_ikan" value="' . $item->ID_ikan . '">
                            <button type="submit" class="px-2 py-1 m-2 bg-green-500 hover:bg-green-700 text-white font-bold rounded">
                                Produksi
                            </button>
                        </form>
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('pages.petugas.tambahproduksi.index');
    }

    public function create(Ikan $ikan)
    {
        return view('pages.petugas.tambahproduksi.create', compact('ikan'));
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
        $ID_ikan = $request->input('ID_ikan');
        $requestData['ID_Ikan'] = $ID_ikan;

        IkanProduksi::create($requestData);

        return redirect()->route('petugas.tambahproduksi.create')->with('success', 'Data produksi berhasil dibuat.');
    }
}
