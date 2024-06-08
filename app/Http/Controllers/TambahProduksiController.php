<?php

namespace App\Http\Controllers;

use App\Models\IkanProduksi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
                    <form class="inline-block" action="' . route('petugas.dataproduksi.create', ['ID_ikan' => $item->ID_Ikan]) . '" method="GET">
                    <button type="submit" class="px-2 py-1 m-2 bg-green-500 hover:bg-green-700 text-white font-bold rounded">
                        Produksi
                    </button>
                    </form
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('pages.petugas.tambahproduksi.index');
    }
}