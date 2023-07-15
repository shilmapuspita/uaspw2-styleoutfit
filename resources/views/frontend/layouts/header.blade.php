<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StyleOutfit</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('FRONTEND/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('FRONTEND/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('FRONTEND/css/themify-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('FRONTEND/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('FRONTEND/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('FRONTEND/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('FRONTEND/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('FRONTEND/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('FRONTEND/css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    {{-- <div id="preloder">
        <div class="loader"></div>
    </div> --}}

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        styleoutfit@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +628 0000 2222 9999
                    </div>
                </div>
                <div class="ht-right">
                    @if (Auth::check())
                        <a href="/logout" class="login-panel"><i
                                class="fa fa-user">{{ Auth::user()->name }}</i>Logout</a>
                    @else
                        <a href="/login" class="login-panel"><i class="fa fa-user"></i>Login</a>
                    @endif
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="{{ asset('FRONTEND/img/flag-1.jpg') }}"
                                data-imagecss="flag yt" data-title="English">English</option>
                            <option value='yu' data-image="{{ asset('FRONTEND/img/flag-2.jpg') }}"
                                data-imagecss="flag yu" data-title="Bangladesh">German </option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="/">
                                <img style= "width:150px;" src="{{ asset('FRONTEND/img/styleoutfit.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <br><br><br>
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <div class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button" disabled><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li >
                                @if (Auth::check())
                                    <a href="/pesanan" style="color: black">
                                        <i class="icon_heart_alt"></i>
                                        <span>Pesanan</span>
                                    </a>
                                @endif
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All Categories</span>
                        <ul class="depart-hover">
                            @foreach ($kategori as $item)
                                <li><a href="/produk/{{ $item->id }}/kategori">{{ $item->nama }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/order">Order</a></li>
                        <li><a href="/produk">Product</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->
