<?php

namespace App\Http\Controllers;

use App\Models\DataProduksi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class DataProduksiController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = DataProduksi::where('Status_Produksi', 'selesai');
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

    public function create(Request $request)
    {
        $ID_ikan = $request->input('ID_ikan');
        return view('pages.petugas.dataproduksi.create', compact('ID_ikan'));
    }

    public function store(Request $request)
{
    $data = $request->validate([
        'ID_Ikan' => 'required|exists:ikan,ID_Ikan',
        'Jumlah_Produksi' => 'required|integer|min:0',
        'Tanggal_Produksi' => 'required|date',
        'Lokasi_Produksi' => 'required|string|max:50',
        'Harga_Ikan' => 'required|numeric|min:0',
        'Pengola_Produksi' => 'required|exists:users,id',
        'Status_Produksi' => 'required|string|max:20',
    ]);

    try {
        // Simpan data produksi
        DataProduksi::create($data);
        // Catat informasi berhasil
        Log::info('Data produksi berhasil ditambahkan.');
        // Redirect dengan pesan sukses
        return redirect()->route('petugas.dataproduksi.index')->with('success', 'Data produksi berhasil ditambahkan');
    } catch (\Exception $e) {
        // Tangani kesalahan
        Log::error('Error creating data produksi: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Failed to save data produksi. Error: ' . $e->getMessage());
    }
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

        return redirect()->route('petugas.dataproduksi.index')->with('success', 'Data produksi berhasil dihapus.');
    }
}
