<?php

namespace App\Http\Controllers;

use App\Models\Ikan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\IkanRequest;
use Yajra\DataTables\Facades\DataTables;

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
                            Edit
                        </button>
                    </form>
                    <form class="inline-block" action="' . route('petugas.ikan.destroy', $item->ID_Ikan) . '" method="POST">
                        ' . method_field('delete') . csrf_field() . '
                        <button type="submit" class="px-2 py-1 m-2 bg-red-500 hover:bg-red-700 text-white font-bold rounded">
                            Hapus
                        </button>
                    </form>
                         <button type="submit" class="px-2 py-1 m-2 bg-green-500 hover:bg-green-700 text-white font-bold rounded">
                             Create Laporan
                          </button>
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

        return redirect()->route('pages.petugas.ikan.index')->with('success', 'Ikan created successfully.');
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

        return redirect()->route('ikan.index')->with('success', 'Ikan updated successfully.');
    }

    public function destroy(Ikan $ikan)
    {
        $ikan->delete();

        return redirect()->route('ikan.index')->with('success', 'Ikan deleted successfully.');
    }
}
