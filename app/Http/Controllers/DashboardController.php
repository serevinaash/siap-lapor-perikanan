<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->roles == "ADMIN") {
           
            return view("dashboard");
        }

        return redirect("/");
    }
    
}
