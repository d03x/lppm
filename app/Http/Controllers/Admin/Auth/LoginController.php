<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginView()
    {
        return view('auth.login');
    }
    public function loginProsess(Request $request)
    {
        $data = $request->validate([
            'email' => "required|email",
            'password' => "required"
        ]);
        if (Auth::attempt($data)) {
            return redirect()->route('admin.index');
        }
        return redirect()->back()->withInput($data)->withErrors([
            'email' => 'Email tidak di temukan'
        ]);
    }
}
