<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store()
    {
    }
    public function registerView()
    {
        return view('auth.register');
    }
}
