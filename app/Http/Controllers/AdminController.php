<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        if(request()->ajax()){
            $query=User::query();
            return DataTables::of($query)
            ->addColumn('action', function($item){
                return '
                  <a href="' . route('dashboard.user.edit', $item->id) . '" class="px-2 py-1 m-2">
                            Edit
                        </a>
                    <form class="inline-block" action="'.route('dashboard.destroy', $item->id).'" method="POST">
                        <button class="px-2 py-1 m-2">
                            Hapus
                        </button>
                        '.method_field('delete').csrf_field().'
                    </form>
                ';
            })->rawColumns(['action'])
            ->make();
        }
        return view('pages.dashboard.index');
    }
}

