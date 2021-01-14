@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Karyawan</h1>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="bg-white">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0" id="user-table">
                            <thead>
                                <tr>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($data as $datas)
                                    <tr>
                                        <td class="border px-6 py-4 text-center">{{ $datas['id'] }}</td>
                                        <td class="border px-6 py-4 text-center">{{ $datas['username'] }}</td>
                                        <td class="border px-6 py-4 text-center">{{ $datas['nama'] }}</td>
                                        <td class="border px-6 py-4 text-center">{{ $datas['jenis_kelamin'] }}</td>
                                        <td class="border px-6 py-4 text-center">{{ $datas['alamat'] }}</td>
                                        <td class="border px-6 py-4 text-center">{{ $datas['no_telepon'] }}</td>
                                        <td class="border px-6 py-4 text-center">{{ $datas['tgl_lahir'] }}</td>
                                        <td class="border px-6 py-4 text-center">{{ $datas['instansi'] }}</td>
                                        <td class="border px-6 py-4 text-center">{{ $datas['role'] }}</td>
                                        <td class="border px-6 py-4 text-center">{{ $datas['nama_mentor'] }}</td>
                                        <td>
                                            {{-- <a
                                                href="{{ route('data-karyawan.edit', $datas->id) }}" class="btn btn-info">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a> --}}
                                            <a href="#" class="btn btn-info">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <br></br>
                                            {{-- <a href="#" class="fa fa-info"></a>
                                            --}}
                                            <form action="{{ route('data-karyawan.update') }}" method="post" class="d-inline">
                                                @method('PUT')
                                                @csrf
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-info"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

@endsection
