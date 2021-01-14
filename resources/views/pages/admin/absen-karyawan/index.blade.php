@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Absen Karyawan</h1>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="bg-white">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="border px-6 py-4 text-center">User Id</th>
                                    <th class="border px-6 py-4 text-center">Checkin</th>
                                    <th class="border px-6 py-4 text-center">Checkout</th>
                                    <th class="border px-6 py-4 text-center">Nama</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($absen as $absens)
                                    <tr>
                                        <td class="border px-6 py-4 text-center">{{ $absens['user_id'] }}</td>
                                        <td class="border px-6 py-4 text-center">{{ $absens['checkin'] }}</td>
                                        <td class="border px-6 py-4 text-center">{{ $absens['checkout'] }}</td>
                                        <td class="border px-6 py-4 text-center">{{ $absens['nama'] }}</td>
                                        {{-- <a href="#" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a> --}}
                                        {{-- <form
                                            action="{{ route('absen-karyawan.destroy', $data->id) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- <div class="text-center mt-5">
                        {{ $data->links() }}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

@endsection
