<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;

class DashboardUserController extends Controller
{
    /**
     * Display the dashboard for the authenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function dashboard(Request $request)
    {
        if (Auth::user()->roles == "ADMIN") {
            return view("dashboard");
        }

        return redirect("/");
    }

    /**
     * Display a listing of the users.
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->all()]);
    }

    // Additional methods from UserController can be added here as needed
}
