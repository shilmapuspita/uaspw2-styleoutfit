@extends('backend.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Produk</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/administrator') }}">Home</a></li>
                            <li class="breadcrumb-item active">Produk</li>
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
                                    <a href="{{ url('/administrator/produk/create') }}" class="btn btn-primary">Tambah
                                        Data</a>
                                @endif
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Kategori</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($produk as $pro)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $pro->kode }}</td>
                                                <td>{{ $pro->nama }}</td>
                                                <td>{{ $pro->nama_kategori }}</td>
                                                <td>Rp.{{ number_format($pro->harga) }}</td>
                                                <td>{{ $pro->stok }}</td>
                                                <td>{{ $pro->deskripsi }}</td>
                                                <td class="d-flex">

                                                    <a href="{{ '/administrator/produk/' . $pro->id  }}"
                                                        class="btn btn-info btn-sm mr-1">Show</a>
                                                    @if (Auth::check() && Auth::user()->role == 'admin')
                                                        <a href="{{ '/administrator/produk/' . $pro->id . '/edit' }}"
                                                            class="btn btn-warning btn-sm mr-1">Edit</a>
                                                        <form action="{{ '/administrator/produk/' . $pro->id }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class=" btn btn-danger btn-sm">Hapus</button>
                                                        </form>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>NO</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Kategori</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
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
