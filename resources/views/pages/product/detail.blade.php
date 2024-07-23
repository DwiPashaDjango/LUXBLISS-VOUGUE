@extends('layouts.app')

@section('title')
    Detail Products
@endsection

@push('css')
    <link rel="stylesheet" href="{{asset('pages/css/detail-product.css')}}">
    <style>
        .multiline-truncate {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/magnific-popup.min.css">
@endpush    

@section('content')
    <section class="py-0 mb-3 mt-3">
        <form action="{{route('users.generateRent')}}" method="POST">
            @csrf
            <input type="hidden" name="products_id" id="products_id" value="{{$product->id}}">
            <div class="container">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{$error}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row gx-5">
                            @php
                                $imageExplode = explode('|', $product->image);
                            @endphp
                            <aside class="col-lg-6 images">
                                <div class="border rounded-4 mb-3 d-flex justify-content-center">
                                    <a class="rounded-4" href="{{asset($imageExplode[0])}}">
                                        <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="{{asset($imageExplode[0])}}" />
                                    </a>
                                </div>
                                <div class="d-flex justify-content-start mb-3">
                                    @foreach ($imageExplode as $img)
                                        <a id="images" class="border rounded-2 m-2" href="{{asset($img)}}">
                                            <img width="80" height="80" class="rounded-2" src="{{asset($img)}}" />
                                        </a>
                                    @endforeach
                                </div>
                            </aside>
                            <main class="col-lg-6">
                                <div class="ps-lg-3 mt-4">
                                    <h4 class="title text-dark">
                                        {{$product->nm_produk}} - {{$product->warna}}
                                    </h4>
                                    <div class="d-flex flex-row my-3">
                                        <div class="text-warning mb-1 me-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>{{$product->stock}} Stock</span>
                                    </div>
                                    <div class="mb-3">
                                        <span class="h5">Rp.{{number_format($product->harga, 2)}}</span>
                                        <span class="text-muted">/{{$product->type}}</span>
                                    </div>
                                    <p class="multiline-truncate">
                                        {{$product->deskripsi_singkat}}
                                    </p>
                                    <div class="row">
                                        <dt class="col-3">Type:</dt>
                                        <dd class="col-9">{{$product->type}}</dd>
                                        <dt class="col-3">Warna:</dt>
                                        <dd class="col-9">{{$product->warna}}</dd>
                                        <dt class="col-3">Designer:</dt>
                                        <dd class="col-9">{{$product->designer->name}}</dd>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-md-6 col-6">
                                            <label class="mb-2">Ukuran</label>
                                            <select class="form-select border border-secondary mt-2" name="size" style="height: 35px;">
                                                <option value="">- Pilih -</option>
                                                @foreach (explode('|', $product->size) as $sz)
                                                    <option value="{{$sz}}">{{$sz}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <label class="mb-2 d-block">Jumlah</label>
                                            <div class="input-group mb-3 quantity-container" style="width: 200px;">
                                                <button class="btn btn-warning px-3 decrease" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                                <input type="text" name="qty" class="form-control text-center quantity-amount" value="1" min="1"/>
                                                <button class="btn btn-primary px-3 increase" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        @auth
                                            <div class="col-md-6 col-6 mb-3">
                                                <label class="mb-2">Tanggal Mulai Sewa</label>
                                                <input type="date" name="start_date" class="form-control" style="height: 35px; border: 2px solid #198754; width: 100%" id="start_date">
                                            </div>
                                            <div class="col-md-6 col-6 mb-3">
                                                <label class="mb-2">Tanggal Selesai Sewa</label>
                                                <input type="date" name="end_date" class="form-control" style="height: 35px; border: 2px solid #198754; width: 100%" id="end_date">
                                            </div>
                                        @endauth
                                    </div>
                                    @auth
                                        <hr class="divide">
                                        <div class="mt-3">
                                            <a href="{{route('whislist')}}" class="btn btn-outline-primary shadow"><i class="fas fa-heart"></i></a>
                                            <button type="submit" class="btn btn-primary shadow">Sewa Sekarang</button>
                                        </div>
                                    @else
                                        <a href="{{route('whislist')}}" class="btn btn-primary shadow w-100">Login</a>
                                    @endauth
                                </div>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <section class="py-0 mb-3">
        <div class="container">
            <div class="row gx-4">
                <div class="col-lg-8 mb-4">
                    <div class="card shadow px-3 py-2">
                        <div class="card-body">
                            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                                <li class="nav-item d-flex" role="presentation">
                                    <a style="background-color: #3b5d50" class="nav-link d-flex active" id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1" role="tab" aria-controls="ex1-pills-1" aria-selected="true">
                                        Deskripsi Produk
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="ex1-content">
                                <div class="tab-pane fade show active" style="padding-left: 20px;" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                                    {!! $product->deskripsi !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow px-3 py-2 mt-2">
                        <div class="card-body p-4">
                            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                                <li class="nav-item d-flex" role="presentation">
                                    <a style="background-color: #3b5d50" class="nav-link d-flex active" id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1" role="tab" aria-controls="ex1-pills-1" aria-selected="true">
                                        Ulasan Produk
                                    </a>
                                </li>
                            </ul>
                            <hr class="divide">
                            <div class="d-flex flex-start mb-4">
                                <img class="rounded-circle shadow-1-strong me-3" src="{{asset('foto/nanda.jpg')}}" alt="avatar" width="65" height="65" />
                                <div class="flex-grow-1 flex-shrink-1">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="mb-1">
                                                Ananda Irfan Faradilah <span class="small">- 2 hours ago</span>
                                            </p>
                                        </div>
                                        <p class="small mb-0">
                                            Kualitas Bahan Bagus. Kualitas Manik Manik Bagus. Yang Gak Bagus Cuma Kurirnya Gak Bisa Di Ajak BAKU HANTAM
                                        </p>
                                        <p>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <img src="{{asset('asset/product/kebaya-2.png')}}" width="200" class="img-thumbnail" alt="">
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="{{asset('asset/product/kebaya-2.png')}}" width="200" class="img-thumbnail" alt="">
                                                </div>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <hr class="divide">
                            <div class="d-flex flex-start mb-4">
                                <img class="rounded-circle shadow-1-strong me-3" src="{{asset('foto/jidan.jpg')}}" alt="avatar" width="65" height="65" />
                                <div class="flex-grow-1 flex-shrink-1">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="mb-1">
                                                Jidan Jamilah <span class="small">- 2 hours ago</span>
                                            </p>
                                        </div>
                                        <p class="small mb-0">
                                            Kulaitas Bahan Kurang Bagus. Sistem Penyewaan Ribet Seriber Kisah Cinta Saya dan Mbak L
                                        </p>
                                        <p>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <img src="{{asset('asset/product/kebaya-2.png')}}" width="200" class="img-thumbnail" alt="">
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="{{asset('asset/product/kebaya-2.png')}}" width="200" class="img-thumbnail" alt="">
                                                </div>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <hr class="divide">
                            <div class="d-flex flex-start mb-4">
                                <img class="rounded-circle shadow-1-strong me-3" src="{{asset('asset/team/laeli.jpg')}}" alt="avatar" width="65" height="65" />
                                <div class="flex-grow-1 flex-shrink-1">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="mb-1">
                                                Laeli Al Jaiutun Bin Khosim <span class="small">- 2 hours ago</span>
                                            </p>
                                        </div>
                                        <p class="small mb-0">
                                            Playstationnya bagus bisa maen game sumertime saga dengan sangat lancar
                                        </p>
                                        <p>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <img src="data:image/jpeg;base64,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" width="200" class="img-thumbnail" alt="">
                                                </div>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <hr class="divide">
                            <div class="d-flex flex-start mb-4">
                                <img class="rounded-circle shadow-1-strong me-3" src="{{asset('foto/rama.jpg')}}" alt="avatar" width="65" height="65" />
                                <div class="flex-grow-1 flex-shrink-1">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="mb-1">
                                                Rama & Albert Lope Lope <span class="small">- 2 hours ago</span>
                                            </p>
                                        </div>
                                        <p class="small mb-0">
                                            It is a long established fact that a reader will be distracted by the readable content of a page.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <hr class="divide">
                            <div class="d-flex flex-start mb-4">
                                <img class="rounded-circle shadow-1-strong me-3" src="{{asset('foto/dwi.jpg')}}" alt="avatar" width="65" height="65" />
                                <div class="flex-grow-1 flex-shrink-1">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="mb-1">
                                                Dwi Panglima Kerajaan Bayang <span class="small">- 2 hours ago</span>
                                            </p>
                                        </div>
                                        <p class="small mb-0">
                                            Penjual tidak ramah masa mau ngutang tidak bisa toko macam apa ini
                                        </p>
                                        <p>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <img src="{{asset('asset/product/kebaya-2.png')}}" width="200" class="img-thumbnail" alt="">
                                                </div>
                                                <div class="col-lg-3">
                                                    <img src="{{asset('asset/product/kebaya-2.png')}}" width="200" class="img-thumbnail" alt="">
                                                </div>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mt-2">
                        <div class="card-body">
                            <form action="" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="" class="mb-2"><b>Ulasan</b></label>
                                    <textarea name="" id="" placeholder="Ulasan" cols="30" rows="3" class="form-control"></textarea>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow px-0">
                        <div class="card-body">
                            <h5 class="card-title mb-3">
                                <b>Produk Terbaru</b>
                            </h5>
                            <hr class="divide">
                            <div class="d-flex mb-3">
                                <a href="#" class="me-3">
                                    <img src="{{asset('asset/product/jas-1.png')}}" style="height: 100%;" width="80" class="img-md img-thumbnail" />
                                </a>
                                <div class="info">
                                    <a href="#" class="nav-link mb-1 text-muted">
                                        Jas Tuxedo Pria
                                        <br />
                                        Warna Putih
                                    </a>
                                </div>
                            </div>
                            <hr class="divide">
                            <div class="d-flex mb-3">
                                <a href="#" class="me-3">
                                    <img src="{{asset('asset/product/kebaya-1.png')}}" style="height: 100%;" width="80" class="img-md img-thumbnail" />
                                </a>
                                <div class="info">
                                    <a href="#" class="nav-link mb-1 text-muted">
                                        Kebaya Adat Jawa Wanita
                                        <br />
                                        Warna Putih
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.images').magnificPopup({
                delegate: 'a',
                type:'image',
                gallery:{
                    enabled:true
                }
            });
        });
    </script>
@endpush