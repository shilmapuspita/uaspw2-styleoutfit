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
                        <span>Kategori</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Related Products Section End -->
    <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>All Products {{$kat->nama}} </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $item)
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{ $item->foto }}" alt="">
                                <div class="sale">{{$item->kategori->nama}}</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="/produk/{{$item->kode}}"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="/produk/{{$item->kode}}">+ Quick View</a></li>
                                    <li class="w-icon"><a href="/produk/{{$item->kode}}"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">{{$item->kategori->nama}}</div>
                                <a href="#">
                                    <h5>{{$item->nama}}</h5>
                                </a>
                                <div class="product-price">
                                    Rp.{{number_format($item->harga,0,'.',',')}}
                                    <span>Rp.{{number_format($item->harga*0.5,0,'.',',')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Related Products Section End -->
@endsection
