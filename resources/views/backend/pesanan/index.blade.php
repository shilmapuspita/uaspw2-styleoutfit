@extends('backend.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pesanan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/administrator') }}">Home</a></li>
                            <li class="breadcrumb-item active">Pesanan</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Pesanan</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Tanggal</th>
                                            <th>User</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>Produk</th>
                                            <th>Total</th>
                                            <th>Keterangan</th>
                                            @if (Auth::check() && Auth::user()->role == 'admin')
                                                <th>Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pesanan as $pes)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $pes->tanggal }}</td>
                                                <td>{{ $pes->nama_user }}</td>
                                                <td>{{ $pes->alamat }}</td>
                                                <td>{{ $pes->telepon }}</td>
                                                <td>{{ $pes->nama_produk }}</td>
                                                <td>Rp.{{ number_format($pes->total) }}</td>
                                                <td>{{ $pes->keterangan }}</td>
                                                @if (Auth::check() && Auth::user()->role == 'admin')
                                                    <td class="d-flex">
                                                        <form action="{{ '/administrator/pesanan/' . $pes->id }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class=" btn btn-danger btn-sm">Hapus</button>
                                                        </form>
                                                    </td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>NO</th>
                                            <th>Tanggal</th>
                                            <th>User</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>Produk</th>
                                            <th>Total</th>
                                            <th>Keterangan</th>
                                            @if (Auth::check() && Auth::user()->role == 'admin')
                                                <th>Action</th>
                                            @endif
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
