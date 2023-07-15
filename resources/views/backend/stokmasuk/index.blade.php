@extends('backend.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Stokmasuk</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/administrator') }}">Home</a></li>
                            <li class="breadcrumb-item active">Stokmasuk</li>
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
                                @if (Auth::check() && Auth::user()->role == 'admin')
                                    <a href="{{ url('/administrator/stokmasuk/create') }}" class="btn btn-primary">Tambah
                                        Data</a>
                                @endif
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Tanggal</th>
                                            <th>Produk</th>
                                            <th>Vendor</th>
                                            <th>Jumlah</th>
                                            <th>Harga</th>
                                            @if (Auth::check() && Auth::user()->role == 'admin')
                                                <th>Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($stokmasuk as $stok)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $stok->tanggal }}</td>
                                                <td>{{ $stok->nama_produk }}</td>
                                                <td>{{ $stok->nama_vendor }}</td>
                                                <td>{{ $stok->jumlah }}</td>
                                                <td>Rp.{{ number_format($stok->harga) }}</td>
                                                @if (Auth::check() && Auth::user()->role == 'admin')
                                                    <td class="d-flex">
                                                        <a href="{{ '/administrator/stokmasuk/' . $stok->id . '/edit' }}"
                                                            class="btn btn-warning btn-sm mr-1">Edit</a>
                                                        <form action="{{ '/administrator/stokmasuk/' . $stok->id }}"
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
                                            <th>Produk</th>
                                            <th>Vendor</th>
                                            <th>Jumlah</th>
                                            <th>Harga</th>
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
