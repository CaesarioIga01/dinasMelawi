<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ProgressKerja;
use Illuminate\Support\Facades\Http;

class ProgressKerjaController extends Controller
{
    public function index()
    {
        // $progress = ProgressKerja::with([
        //     'user'
        // ])->get();
        $response = Http::get('http://localhost:8001/task');
        $progress = $response->json();
        // dd($progress);
        return view('pages.admin.progress-kerja.progress', compact('progress'));

    }
}
