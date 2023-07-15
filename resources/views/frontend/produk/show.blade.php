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
                        <span>{{ $product->nama }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <ul class="filter-catagories">
                            @foreach ($kategori as $item)
                                <li><a href="/kategori/{{ $item->id }}">{{ $item->nama }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Tags</h4>
                        <div class="fw-tags">
                            <a href="#">Towel</a>
                            <a href="#">Shoes</a>
                            <a href="#">Coat</a>
                            <a href="#">Dresses</a>
                            <a href="#">Trousers</a>
                            <a href="#">Men's hats</a>
                            <a href="#">Backpack</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="{{ $product->foto }}" alt="">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <h3>{{ $product->nama }}</h3>
                                    <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                                </div>
                                <div class="pd-desc">
                                    <p>{{ $product->deskripsi }}</p>
                                    <h4>Rp.{{ number_format($product->harga) }}
                                        <span>{{ number_format($product->harga * 0.5) }}</span>
                                    </h4>
                                </div>
                                <div class="pd-color">
                                    <h6>Color</h6>
                                    <div class="pd-color-choose">
                                        <div class="cc-item">
                                            <input type="radio" id="cc-black">
                                            <label for="cc-black"></label>
                                        </div>
                                        <div class="cc-item">
                                            <input type="radio" id="cc-yellow">
                                            <label for="cc-yellow" class="cc-yellow"></label>
                                        </div>
                                        <div class="cc-item">
                                            <input type="radio" id="cc-violet">
                                            <label for="cc-violet" class="cc-violet"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="pd-size-choose">
                                    <div class="sc-item">
                                        <input type="radio" id="sm-size">
                                        <label for="sm-size">s</label>
                                    </div>
                                    <div class="sc-item">
                                        <input type="radio" id="md-size">
                                        <label for="md-size">m</label>
                                    </div>
                                    <div class="sc-item">
                                        <input type="radio" id="lg-size">
                                        <label for="lg-size">l</label>
                                    </div>
                                    <div class="sc-item">
                                        <input type="radio" id="xl-size">
                                        <label for="xl-size">xs</label>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1">
                                    </div>
                                    @if (Auth::check())
                                        <a data-toggle="modal" data-target="#Pesanann" class="primary-btn pd-cart">Order
                                            Now</a>

                                        <div class="modal fade" id="Pesanann" tabindex="-1" role="dialog"
                                            aria-labelledby="PesanannLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="PesanannLabel">Form Pesan
                                                            {{ Auth::user()->name }}</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="/pesanan" method="POST">
                                                        @csrf
                                                        <div class="modal-body">
                                                            Produk : {{ $product->nama }}
                                                            <input type="hidden" value=" {{ Auth::user()->id }}"
                                                                class="form-control" id="user_id" name="user_id"
                                                                required>
                                                            <input type="hidden" value="{{ $product->id }}"
                                                                class="form-control" id="produk_id" name="produk_id"
                                                                required>
                                                            <input type="hidden" value="{{ $product->harga }}"
                                                                class="form-control" id="harga" name="harga"
                                                                required>
                                                            <div class="form-group">
                                                                <label for="alamat">Alamat</label>
                                                                <input type="text" class="form-control" id="alamat"
                                                                    name="alamat" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="telepon">Telepon</label>
                                                                <input type="number" class="form-control" id="telepon"
                                                                    name="telepon" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="qty">Qty</label>
                                                                <input type="number" class="form-control" id="qty"
                                                                    name="qty" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="keterangan">Keterangan</label>
                                                                <input type="text" class="form-control"
                                                                    id="keterangan" name="keterangan" required>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Tutup</button>
                                                            <button type="submit" class="btn btn-primary">Order</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <a href="/login" class="primary-btn pd-cart">Login</a>
                                    @endif
                                </div>
                                <ul class="pd-tags">
                                    <li><span>CATEGORIES</span>: {{ $product->kategori->nama }}</li>
                                </ul>
                                <div class="pd-share">
                                    <div class="p-code">Sku : {{ $product->kode }}</div>
                                    <div class="pd-social">
                                        <a href="#"><i class="ti-facebook"></i></a>
                                        <a href="#"><i class="ti-twitter-alt"></i></a>
                                        <a href="#"><i class="ti-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    <!-- Related Products Section End -->
    <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $item)
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{ $item->foto }}" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="/produk/{{ $item->kode }}"><i
                                                class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="/produk/{{ $item->kode }}">+ Quick View</a></li>
                                    <li class="w-icon"><a href="/produk/{{ $item->kode }}"><i
                                                class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">{{ $item->kategori->nama }}</div>
                                <a href="#">
                                    <h5>{{ $item->nama }}</h5>
                                </a>
                                <div class="product-price">
                                    Rp.{{ number_format($product->harga) }}
                                    <span>{{ number_format($product->harga * 0.5) }}</span </div>
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
