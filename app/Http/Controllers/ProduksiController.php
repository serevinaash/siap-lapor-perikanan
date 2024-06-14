<?php

namespace App\Http\Controllers;

use App\Models\IkanProduksi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\ProduksiRequest;
use Yajra\DataTables\Facades\DataTables;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportUser;
use Illuminate\Support\Facades\Auth;

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
    
    //Export
    public function exportxlsxUsers(Request $request){
        return Excel::download(new ExportUser, 'users.xlsx');
    }
    public function downloadPDF(Request $request) {
        return Excel::download(new ExportUser, 'users.pdf');
    }
}

