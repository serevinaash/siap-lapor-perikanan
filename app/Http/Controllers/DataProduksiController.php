<?php

namespace App\Http\Controllers;

use App\Models\Ikan;
use App\Models\Produksi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\IkanRequest;
use App\Http\Requests\ProduksiRequest;
use Yajra\DataTables\Facades\DataTables;

class DataProduksiController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = IkanProduksi::query(); // Use the IkanProduksi model

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('pages.petugas.dataproduksi.index');
    }
}