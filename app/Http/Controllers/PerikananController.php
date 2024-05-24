<?php

namespace App\Http\Controllers;

use App\Models\Perikanan;
use Illuminate\Support\Str;
use App\Models\Ikan;
use Illuminate\Http\Request;
use App\Http\Requests\PerikananRequest;
use Yajra\DataTables\Facades\DataTables;

class PerikananController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = Perikanan::query();
            return DataTables::of($query)
                ->addColumn('action', function($item) {
                    return '
                        <a href="'.route('petugas.perikanan.gallery.index', $item->id).'" class="px-2 py-1 m-2">
                            Gallery
                        </a>
                        <a href="'.route('petugas.perikanan.edit', $item->id).'" class="px-2 py-1 m-2">
                            Edit
                        </a>
                        <form class="inline-block" action="'.route('petugas.perikanan.destroy', $item->id).'" method="POST">
                            '.csrf_field().method_field('delete').'
                            <button class="px-2 py-1 m-2">
                                Hapus
                            </button>
                        </form>
                    ';
                })
                ->editColumn('Harga_Ikan', function($item) {
                    return number_format($item->Harga_Ikan, 2);
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.petugas.perikanan.index');
    }

    public function create()
{
    // Fetch the list of fish from the database
    $ikanList = Ikan::all(); // Assuming you have an Ikan model

    // Pass the list to the view
    return view('pages.petugas.perikanan.create', compact('ikanList'));
}

    public function store(PerikananRequest $request)
    {
        $data = $request->all();
        
        Perikanan::create($data);

        return redirect()->route('petugas.perikanan.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Perikanan $perikanan)
    {
        return view('pages.petugas.perikanan.edit', compact('perikanan'));
    }

    public function update(PerikananRequest $request, Perikanan $perikanan)
    {
        $data = $request->all();
        
        $perikanan->update($data);

        return redirect()->route('petugas.perikanan.index');
    }

    public function destroy(Perikanan $perikanan)
    {
        $perikanan->delete();

        return redirect()->route('petugas.perikanan.index');
    }
}
