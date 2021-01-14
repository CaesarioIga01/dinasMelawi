<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\DataKaryawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Datatables;

class DataKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $items = DataKaryawan::all();

        // return view('pages.admin.data-karyawan.index', [
        //     'items' => $items
        // ]);

        // $data = DB::table('users')->paginate(5);

        //Get data user
        $response = Http::get('http://localhost:8001/users');
        $data = $response->json();
        // dd($data);
        return view('pages.admin.data-karyawan.index', [
            'data' => $data
        ]);
    }

    // public function getDataUserAll()
    // {
    //     $data = DataKaryawan::all();
    //     return Datatables::of($data)
    //         ->editColumn()
    //         ->make(true);

    //     // return Datatables::of(DataKaryawan::query())->make(true);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $data = Http::delete('http://localhost:8001/user/{id}');
        // $data->delete($id);

        // return redirect()->route('data-karyawan.index');

        // $response = Http::get('http://localhost:8001/user'.$id);
        // $data = $response->json();

        // return view('pages.admin.data-karyawan.index', [
        //     'data' => $data
        // ]);
    }
}
