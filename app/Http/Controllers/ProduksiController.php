<?php

namespace App\Http\Controllers;

use App\Models\IkanProduksi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\ProduksiRequest;
use Yajra\DataTables\Facades\DataTables;

class ProduksiController extends Controller
{
    public function index()
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

        return view('pages.petugas.produksi.index');
    }
}