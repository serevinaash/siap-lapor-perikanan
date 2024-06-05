<?php

namespace App\Http\Controllers;

use App\Models\DataProduksi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\DataProduksiRequest;
use Yajra\DataTables\Facades\DataTables;

class DataProduksiController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = DataProduksi::query();
            return DataTables::of($query)
                ->addColumn('action', function($item) {
                    return '
                    <form class="inline-block" action="' . route('petugas.dataproduksi.edit', $item->ID_Produksi) . '" method="GET">
                    <button type="submit" class="px-2 py-1 m-2 bg-green-500 hover:bg-green-700 text-white font-bold rounded">
                        Edit
                    </button>
                        </form>
                        <form class="inline-block" action="' . route('petugas.dataproduksi.destroy', $item->ID_Produksi) . '" method="POST">
                            <button type="submit" class="px-2 py-1 m-2 bg-red-500 hover:bg-red-700 text-white font-bold rounded">
                                Hapus
                            </button>
                            ' . method_field('delete') . csrf_field() . '
                        </form>
        
                    ';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.petugas.dataproduksi.index');
    }

    public function create()
    {
        return view('pages.petugas.dataproduksi.create');
    }
    public function store(DataProduksiRequest $request)
    {
        $request->merge(['Pengola_Produksi' => Auth::id()]);
        DataProduksi::create($request->all());
    
        return redirect()->route('petugas.dataproduksi.index')->with('success', 'Data produksi berhasil dibuat.');
    }

    public function show(DataProduksi $dataproduksi)
    {
        return view('pages.petugas.dataproduksi.show', compact('dataproduksi'));
    }
    public function edit(DataProduksi $dataproduksi)
    {
        return view('pages.petugas.dataproduksi.edit', compact('dataproduksi'));
    }
    
    
    public function update(Request $request, DataProduksi $dataproduksi)
    {
        $request->validate([
            'ID_Ikan' => 'required|exists:ikan,ID_Ikan',
            'Jumlah_Produksi' => 'required|integer|min:0',
            'Tanggal_Produksi' => 'required|date',
            'Lokasi_Produksi' => 'required|string|max:50',
            'Harga_Ikan' => 'required|numeric|min:0',
            'Status_Produksi' => 'required|string|max:20',
        ]);
        $dataproduksi->update(array_merge($request->all(), ['Pengola_Produksi' => $dataproduksi->Pengola_Produksi]));

        return redirect()->route('petugas.dataproduksi.index')->with('success', 'Data produksi berhasil diperbarui.');
    }
    
    public function destroy(DataProduksi $dataproduksi)
    {
        $dataproduksi->delete();
    
        return redirect()->route('petugas.dataproduksi.index')->with('success', 'Production data deleted successfully.');
    }
}    