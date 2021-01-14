<?php

namespace App\Http\Controllers\Admin;

use App\DataKaryawan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //membuat untuk akses halaman dashboard
    public function index(Request $request)  
    {
        return view('pages.admin.dashboard', [
            'user' => DataKaryawan::count(),
        ]);
    }
}
