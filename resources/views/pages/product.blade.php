@extends('layouts.app')

@section('title')
    Koleksi
@endsection

@section('content')
    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h2 class="text-white">
                            <b>
                                Koleksi
                            </b>
                        </h2>
                        <p class="mb-4">
                            Temukan keindahan dan keanggunan dalam koleksi kebaya dan jas kami. Mode lebih berkesan dengan penampilan yang tak terlupakan.
                        </p>
                    </div>
                </div>
                {{-- <div class="col-lg-7">
                    <div class="hero-img-wrap mb-3">
                        <img src="https://www.dusera.com/wp-content/uploads/2021/01/thumpnail-dusera-sewa-kebaya-jakarta.png" class="img-fluid ml-5">
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- End Hero Section -->


    <!-- Start Product Section -->
    <div class="product-section">
        <div class="container">
            <div class="mb-3" style="padding-bottom: 50px">
                <form action="">
                    <div class="d-flex justify-content-between">
                        <div></div>
                        <div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search..." style="border: 1px solid #407963">
                                <div class="input-group-append">
                                    <button class="btn" style="height:100%; background-color: #407963; border: none; color: #fff; border-radius: 0 10px 10px 0" type="button"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">

                <!-- Start Column 2 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="{{route('product.show')}}">
                        <img src="{{asset('asset/product/paket-1.png')}}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Baju Kebaya Adat Jawa Pria & Wanita.</h3>
                        <strong class="product-price">Rp. 125.000</strong>
                    </a>
                    <span class="icon-cross" onclick="return alert('Oke')">
                        <img src="{{asset('asset/heart.png')}}" width="18" class="img-fluid">
                    </span>
                </div>
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="{{route('product.show')}}">
                        <img src="{{asset('asset/product/kebaya-1.png')}}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Baju Kebaya Adat Jawa (Wanita).</h3>
                        <strong class="product-price">Rp. 150.000</strong>

                        <span class="icon-cross">
                            <img src="{{asset('asset/heart.png')}}" width="18" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="{{route('product.show')}}">
                        <img src="{{asset('asset/product/kebaya-2.png')}}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Baju Kebaya Adat Bali (Wanita).</h3>
                        <strong class="product-price">Rp. 130.000</strong>

                        <span class="icon-cross">
                            <img src="{{asset('asset/heart.png')}}" width="18" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 4 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="{{route('product.show')}}">
                        <img src="{{asset('asset/product/jas-1.png')}}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Jas Tuxedo Putih (Pria).</h3>
                        <strong class="product-price">Rp. 260.000</strong>

                        <span class="icon-cross">
                            <img src="{{asset('asset/heart.png')}}" width="18" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 4 -->

                <!-- Start Column 2 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="cart.html">
                        <img src="{{asset('asset/product/paket-1.png')}}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Baju Kebaya Adat Jawa Pria & Wanita.</h3>
                        <strong class="product-price">Rp. 125.000</strong>

                        <span class="icon-cross">
                            <img src="{{asset('asset/heart.png')}}" width="18" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="cart.html">
                        <img src="{{asset('asset/product/kebaya-1.png')}}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Baju Kebaya Adat Jawa (Wanita).</h3>
                        <strong class="product-price">Rp. 150.000</strong>

                        <span class="icon-cross">
                            <img src="{{asset('asset/heart.png')}}" width="18" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="cart.html">
                        <img src="{{asset('asset/product/kebaya-2.png')}}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Baju Kebaya Adat Bali (Wanita).</h3>
                        <strong class="product-price">Rp. 130.000</strong>

                        <span class="icon-cross">
                            <img src="{{asset('asset/heart.png')}}" width="18" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 4 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="{{route('product.show')}}">
                        <img src="{{asset('asset/product/jas-1.png')}}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Jas Tuxedo Putih (Pria).</h3>
                        <strong class="product-price">Rp. 260.000</strong>

                        <span class="icon-cross">
                            <img src="{{asset('asset/heart.png')}}" width="18" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 4 -->

            </div>
        </div>
    </div>
    <!-- End Product Section -->
@endsection