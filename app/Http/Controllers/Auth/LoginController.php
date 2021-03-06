<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        
        if (!auth()->attempt($request->only('email','password'), $request->remember)){
            return back()->with('error', 'Invalid login details');
        }
        $user=auth()->user();
        if ($user->isadmin==1)
        {
            return redirect()->route('admindashboard');
        }

        return redirect()->route('dashboard');

    }

    public function adminlogin()
    {
        return view('admin.adminlogin');
    }
}

