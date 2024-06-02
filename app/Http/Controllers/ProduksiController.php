<?php

namespace App\Http\Controllers;

use App\Models\ProduksiIkan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\ProduksiRequest;
use Yajra\DataTables\Facades\DataTables;

class ProduksiController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = Produksi::query();
            return DataTables::of($query)
                ->addColumn('action', function($item) {
                    return '
                    <form class="inline-block" action="' . route('petugas.produksi.edit', $item->ID_Produksi) . '" method="GET">
                        <button type="submit" class="px-2 py-1 m-2 bg-green-500 hover:bg-green-700 text-white font-bold rounded">
                            Edit
                        </button>
                    </form>
                    <form class="inline-block" action="' . route('petugas.produksi.destroy', $item->ID_Produksi) . '" method="POST">
                        ' . method_field('delete') . csrf_field() . '
                        <button type="submit" class="px-2 py-1 m-2 bg-red-500 hover:bg-red-700 text-white font-bold rounded">
                            Hapus
                        </button>
                    </form>
                    ';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.petugas.produksi.index');
    }

}
