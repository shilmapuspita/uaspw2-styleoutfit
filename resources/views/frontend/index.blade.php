@extends('frontend.layouts.app')
@section('content')
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="{{ asset('FRONTEND/img/hero-1.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Hello</span>
                            <h1>Checkout Sekarang!</h1>
                            <p>Dapatkan harga diskon yang tak terduga dari toko kami</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="{{ asset('FRONTEND/img/hero-2.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                        <span>Hello</span>
                            <h1>Checkout Sekarang!</h1>
                            <p>Dapatkan harga diskon yang tak terduga dari toko kami</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg"
                        data-setbg="https://marketplace.canva.com/EAFOuFaM_1s/1/0/1131w/canva-krim-hitam-modern-mode-koleksi-baru-untuk-poster-%28-tegak-%29-42ehroo76B4.jpg">
                        <h2></h2>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Populer Products</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        @foreach ($populer as $item)
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="{{ $item->foto != null ? $item->foto : '/FRONTEND/img/products/women-1.jpg' }}"
                                        alt="">
                                    <div class="sale">Sale</div>
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><a href="/produk/{{ $item->kode }}">+ Quick View</a></li>
                                        <li class="w-icon"><a href="/produk/{{ $item->kode }}"><i
                                                    class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">{{ $item->kategori->nama }}</div>
                                    <a href="/produk/{{ $item->kode }}">
                                        <h5>{{ $item->nama }}</h5>
                                    </a>
                                    <div class="product-price">Rp.
                                        {{ number_format($item->harga * 0.5) }}
                                        <span>{{ number_format($item->harga) }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->

    <!-- Deal Of The Week Section Begin-->
    <section class="deal-of-week set-bg spad" data-setbg="{{ asset('FRONTEND/img/time-bg.jpg') }}">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>{{ $flashsell->nama }}</h2>
                    <p>{{ substr($flashsell->deskripsi, 0, 150) }}</p>
                    <div class="product-price">
                        <span>{{ $flashsell->harga }}/ pcs</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="#" class="primary-btn">Shop Now</a>
            </div>
        </div>
    </section>
    <!-- Deal Of The Week Section End -->

    <!-- Man Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Promo</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">

                        @foreach ($populer as $item)
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="{{ $item->foto != null ? $item->foto : '/FRONTEND/img/products/women-1.jpg' }}"
                                        alt="">
                                    <div class="sale">Sale</div>
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><a href="/produk/{{ $item->kode }}">+ Quick View</a></li>
                                        <li class="w-icon"><a href="/produk/{{ $item->kode }}"><i
                                                    class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">{{ $item->kategori->nama }}</div>
                                    <a href="/produk/{{ $item->kode }}">
                                        <h5>{{ $item->nama }}</h5>
                                    </a>
                                    <div class="product-price">Rp.
                                        {{ number_format($item->harga * 0.5) }}
                                        <span>{{ number_format($item->harga) }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large"
                        data-setbg="/FRONTEND/img/insta-3.jpg">
                        <h2>Promo</h2>
                        <a href="#"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Man Banner Section End -->

    <!-- Instagram Section Begin -->
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="{{ asset('FRONTEND/img/insta-1.jpg') }}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">styleoutfit</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{ asset('FRONTEND/img/insta-2.jpg') }}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">styleoutfit</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{ asset('FRONTEND/img/insta-3.jpg') }}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">styleoutfit</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{ asset('FRONTEND/img/insta-4.jpg') }}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">styleoutfit</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{ asset('FRONTEND/img/insta-5.jpg') }}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">styleoutfit</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="{{ asset('FRONTEND/img/insta-6.jpg') }}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">styleoutfit</a></h5>
            </div>
        </div>
    </div>
    <!-- Instagram Section End -->

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg"
                        data-setbg="/FRONTEND/img/insta-4.jpg">
                        <h2>News Products</h2>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">New Products</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        @foreach ($terbaru as $item)
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="{{ $item->foto != null ? $item->foto : '/FRONTEND/img/products/women-1.jpg' }}"
                                        alt="">
                                    <div class="sale">Sale</div>
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><a href="/produk/{{ $item->kode }}">+ Quick View</a>
                                        </li>
                                        <li class="w-icon"><a href="/produk/{{ $item->kode }}"><i
                                                    class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">{{ $item->kategori->nama }}</div>
                                    <a href="/produk/{{ $item->kode }}">
                                        <h5>{{ $item->nama }}</h5>
                                    </a>
                                    <div class="product-price">Rp.
                                        {{ number_format($item->harga * 0.5) }}
                                        <span>{{ number_format($item->harga) }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->
    <!-- Latest Blog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="{{ asset('FRONTEND/img/latest-1.jpg') }}" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    May 4,2019
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="#">
                                <h4>Hallo Everyone</h4>
                            </a>
                            <p>Saya senang menggunakan produk dari styleoutfit </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="{{ asset('FRONTEND/img/latest-2.jpg') }}" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    May 4,2019
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="#">
                                <h4>Holiday</h4>
                            </a>
                            <p>Menggunakan produk dari styleoutfit membuat holiday mu lebih menyenangkan </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="{{ asset('FRONTEND/img/latest-3.jpg') }}" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    May 4,2019
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="#">
                                <h4>Friends</h4>
                            </a>
                            <p> Always memakai produk styleoutfit bareng temanku</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="{{ asset('FRONTEND/img/icon-1.png') }}" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Free Shipping</h6>
                                <p>For all order over Rp.250.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="{{ asset('FRONTEND/img/icon-2.png') }}" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Delivery On Time</h6>
                                <p>jelas ontime dong!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="{{ asset('FRONTEND/img/icon-1.png') }}" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Secure Payment</h6>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->
@endsection
