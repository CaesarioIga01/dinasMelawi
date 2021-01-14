@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Karyawan</h1>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="bg-white">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0" id="user-table">
                            <thead>
                                <tr>
                                    <th class="border px-6 py-4 text-center">ID</th>
                                    <th class="border px-6 py-4 text-center">Username</th>
                                    <th class="border px-6 py-4 text-center">Nama</th>
                                    <th class="border px-6 py-4 text-center">Jenis Kelamin</th>
                                    <th class="border px-6 py-4 text-center">Alamat</th>
                                    <th class="border px-6 py-4 text-center">No Telpon</th>
                                    <th class="border px-6 py-4 text-center">Tanggal Lahir</th>
                                    <th class="border px-6 py-4 text-center">Instansi</th>
                                    <th class="border px-6 py-4 text-center">Role</th>
                                    <th class="border px-6 py-4 text-center">Nama Mentor</th>
                                    <th class="border px-6 py-4 text-center">Action</th>
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
                                            <form action="{{ $datas['id'] }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
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
    <script>
        $(function() {
            $('#user-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: url: '{{ url('
                data - karyawan ') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchrable: false
                    },
                    {
                        data: 'id',
                        name: 'id'
                    } {
                        data: 'username',
                        name: 'username'
                    } {
                        data: 'nama',
                        name: 'nama'
                    } {
                        data: 'jenis_kelamin',
                        name: 'jenis_kelamin'
                    } {
                        data: 'alamat',
                        name: 'alamat'
                    } {
                        data: 'no_telepon',
                        name: 'no_telepon'
                    } {
                        data: 'tgl_lahir',
                        name: 'tgl_lahir'
                    } {
                        data: 'instansi',
                        name: 'instansi'
                    } {
                        data: 'role',
                        name: 'role'
                    } {
                        data: 'nama_mentor',
                        name: 'nama_mentor'
                    } {
                        data: '',
                        name: ''
                    }
                ]
            });
        });

    </script>
    <!-- /.container-fluid -->

@endsection
