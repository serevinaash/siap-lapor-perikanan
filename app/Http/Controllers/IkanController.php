<?php

namespace App\Http\Controllers;

use App\Models\Ikan;
use App\Models\Produksi;
use App\Models\DataProduksi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\IkanRequest;
use App\Http\Requests\ProduksiRequest;
use app\Http\Request\DataProduksiRequest;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IkanController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = Ikan::query();
            return DataTables::of($query)
                ->addColumn('action', function($item) {
                    return '
                    <form class="inline-block" action="' . route('petugas.ikan.edit', $item->ID_Ikan) . '" method="GET">
                        <button type="submit" class="px-2 py-1 m-2 bg-green-500 hover:bg-green-700 text-white font-bold rounded">
                            <i class="fas fa-edit"></i>
                        </button>
                    </form>
                    <form class="inline-block" action="' . route('petugas.ikan.destroy', $item->ID_Ikan) . '" method="POST">
                        <button type="submit" class="px-2 py-1 m-2 bg-red-500 hover:bg-red-700 text-white font-bold rounded">
                        <i class="fas fa-trash"></i> 
                        </button>
                              <a href="/petugas/tambahproduksi/create?id=' . $item->ID_Ikan . '" class="px-2 py-1 m-2 bg-green-500 hover:bg-green-700 text-white font-bold rounded">    <i class="fas fa-plus"></i>
 </a>
                        ' . method_field('delete') . csrf_field() . '
                    </form>
                
                    ';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.petugas.ikan.index');
    }

    public function create()
    {
        return view('pages.petugas.ikan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nama_Ikan' => 'required|string|max:50',
            'Deskripsi' => 'required',
            'Kategori_Ikan' => 'required|string|max:50',
        ]);

        Ikan::create($request->all());

        return redirect()->route('petugas.ikan.index')->with('success', 'Ikan created successfully.');
    }
    public function show(Ikan $ikan)
    {
        return view('pages.petugas.ikan.show', compact('ikan'));
    }

    public function edit(Ikan $ikan)
    {
        return view('pages.petugas.ikan.edit', compact('ikan'));
    }
    public function update(Request $request, Ikan $ikan)
    {
        $request->validate([
            'Nama_Ikan' => 'required|string|max:50',
            'Deskripsi' => 'required',
            'Kategori_Ikan' => 'required|string|max:50',
        ]);

        $ikan->update($request->all());

        return redirect()->route('petugas.ikan.index')->with('success', 'Ikan updated successfully.');
    }

    public function destroy(Ikan $ikan)
    {
        // Menggunakan transaksi database untuk operasi penghapusan
        DB::beginTransaction();

        try {
            // Periksa apakah ada produksi terkait dengan ikan ini
            $produksiCount = Produksi::where('id_ikan', $ikan->ID_Ikan)->count();

            if ($produksiCount > 0) {
                // Jika ada produksi terkait, Anda harus memutuskan untuk menghapus atau menolak penghapusan ikan
                // Di sini saya pilih untuk menghapus semua data produksi yang terkait dengan ikan ini
                Produksi::where('id_ikan', $ikan->ID_Ikan)->delete();
            }

            // Hapus ikan
            $ikan->delete();

            // Commit transaksi jika semua operasi berhasil
            DB::commit();

            return redirect()->route('petugas.ikan.index')
                ->with('success', 'Ikan berhasil dihapus');
        } catch (\Exception $e) {
            // Rollback transaksi jika terjadi kesalahan
            DB::rollback();

            return redirect()->back()
                ->with('error', 'Gagal menghapus ikan: ' . $e->getMessage());
        }
    }
  
}
