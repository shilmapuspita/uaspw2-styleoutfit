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
                            <li class="breadcrumb-item"><a href="{{ url('/administrator/stokmasuk') }}">Stokmasuk</a></li>
                            <li class="breadcrumb-item active">Edit</li>
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
                                <a href="{{ url('/administrator/stokmasuk') }}" class="btn btn-secondary">Back</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form method="post" action="{{ url('/administrator/stokmasuk/' . $stokmasuk->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group row">
                                        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                                        <div class="col-8">
                                            <input id="tanggal" name="tanggal" type="date" class="form-control"
                                                value="{{ $stokmasuk->tanggal }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="produk_id" class="col-4 col-form-label">Produk </label>
                                        <div class="col-8">
                                            <select id="produk_id" name="produk_id" class="form-control">
                                                <option value="">-- Pilih Produk --</option>
                                                @foreach ($produk as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $stokmasuk->produk_id == $item->id ? 'selected' : '' }}>
                                                        {{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="vendor_id" class="col-4 col-form-label">Vendor </label>
                                        <div class="col-8">
                                            <select id="vendor_id" name="vendor_id" class="form-control">
                                                <option value="">-- Pilih Vendor --</option>
                                                @foreach ($vendor as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $stokmasuk->vendor_id == $item->id ? 'selected' : '' }}>
                                                        {{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                                        <div class="col-8">
                                            <input id="jumlah" name="jumlah" type="text" class="form-control"
                                                value="{{ $stokmasuk->jumlah }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga" class="col-4 col-form-label">Harga</label>
                                        <div class="col-8">
                                            <input id="harga" name="harga" type="text" class="form-control"
                                                value="{{ $stokmasuk->harga }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
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
