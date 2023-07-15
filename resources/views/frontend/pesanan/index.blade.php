@extends('frontend.layouts.app')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <a href="/produk">Products</a>
                        <span>Pesanan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 table-responsive">
                    <table class="table">
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
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($pesanan as $pes)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pes->tanggal }}</td>
                                    <td>{{ $pes->user->name }}</td>
                                    <td>{{ $pes->alamat }}</td>
                                    <td>{{ $pes->telepon }}</td>
                                    <td>{{ $pes->produk->nama }}</td>
                                    <td>Rp.{{ number_format($pes->total) }}</td>
                                    <td>{{ $pes->keterangan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
@endsection
