<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetugasController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->roles == "PETUGAS") {
           
            return view("petugas");
        }

        return redirect("/");
    }
}
