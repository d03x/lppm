<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        return view('pengumuman.index');
    }
    public function detail($id)
    {
        return view('pengumuman.detail');
    }
}
