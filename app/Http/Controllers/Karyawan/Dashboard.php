<?php

namespace App\Http\Controllers\Karyawan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Traits\KaryawanDefaultLayout;

class Dashboard extends Controller
{
    use KaryawanDefaultLayout;

    public function index()
    {
        $layout = $this->default();
        return view('karyawan.index')->with('layout', $layout);
    }
}
