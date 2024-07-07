@extends('layouts.app')

@section('title')
    Detail Products
@endsection

@push('css')
    <link rel="stylesheet" href="{{asset('pages/css/detail-product.css')}}">
@endpush    

@section('content')
    <section class="py-0 mb-3 mt-3">
        <div class="container">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row gx-5">
                        <aside class="col-lg-6">
                            <div class="border rounded-4 mb-3 d-flex justify-content-center">
                                <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="{{asset('asset/product/kebaya-2.png')}}">
                                    <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="{{asset('asset/product/kebaya-2.png')}}" />
                                </a>
                            </div>
                            <div class="d-flex justify-content-start mb-3">
                                <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="{{asset('asset/product/kebaya-2.png')}}">
                                    <img width="60" height="60" class="rounded-2" src="{{asset('asset/product/kebaya-2.png')}}" />
                                </a>
                                <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="{{asset('asset/product/kebaya-2.png')}}">
                                    <img width="60" height="60" class="rounded-2" src="{{asset('asset/product/kebaya-2.png')}}" />
                                </a>
                                <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="{{asset('asset/product/kebaya-2.png')}}">
                                    <img width="60" height="60" class="rounded-2" src="{{asset('asset/product/kebaya-2.png')}}" />
                                </a>
                                <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="{{asset('asset/product/kebaya-2.png')}}">
                                    <img width="60" height="60" class="rounded-2" src="{{asset('asset/product/kebaya-2.png')}}" />
                                </a>
                            </div>
                        </aside>
                        <main class="col-lg-6">
                            <div class="ps-lg-3 mt-4">
                                <h4 class="title text-dark">
                                    Baju Kebaya Wanita Ada Bali (Putih)
                                </h4>
                                <div class="d-flex flex-row my-3">
                                    <div class="text-warning mb-1 me-2">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span class="ms-1">4.5</span>
                                    </div>
                                    <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>10 Stock</span>
                                </div>
                                <div class="mb-3">
                                    <span class="h5">Rp. 250.000</span>
                                    <span class="text-muted">/Per Set</span>
                                </div>
                                <p>
                                    Modern look and quality demo item is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown clothing low-top shirts for men.
                                </p>
                                <div class="row">
                                    <dt class="col-3">Type:</dt>
                                    <dd class="col-9">Per Set</dd>
                                    <dt class="col-3">Warna:</dt>
                                    <dd class="col-9">Putih</dd>
                                    <dt class="col-3">Bahan:</dt>
                                    <dd class="col-9">Cotton</dd>
                                    <dt class="col-3">Designer:</dt>
                                    <dd class="col-9">Jamaludin</dd>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <label class="mb-2">Ukuran</label>
                                        <select class="form-select border border-secondary mt-2" style="height: 35px;">
                                            <option>- Pilih -</option>
                                            <option>S</option>
                                            <option>M</option>
                                            <option>L</option>
                                            <option>XL</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-6 mb-3">
                                        <label class="mb-2 d-block">Jumlah</label>
                                        <div class="input-group mb-3" style="width: 170px;">
                                            <button class="btn btn-warning px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <input type="text" class="form-control text-center" value="1" aria-label="Example text with button addon" aria-describedby="button-addon1" />
                                            <button class="btn btn-primary px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route('rent')}}" class="btn btn-primary shadow">Sewa Sekarang</a>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
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
                                <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                                    <p>
                                        With supporting text below as a natural lead-in to additional content. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
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
                                <img class="rounded-circle shadow-1-strong me-3" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar" width="65" height="65" />
                                <div class="flex-grow-1 flex-shrink-1">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="mb-1">
                                                Maria Smantha <span class="small">- 2 hours ago</span>
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
                                <img class="rounded-circle shadow-1-strong me-3" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar" width="65" height="65" />
                                <div class="flex-grow-1 flex-shrink-1">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="mb-1">
                                                Maria Smantha <span class="small">- 2 hours ago</span>
                                            </p>
                                        </div>
                                        <p class="small mb-0">
                                            It is a long established fact that a reader will be distracted by the readable content of a page.
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
                                    <label for="" class="mb-2"><b>Pesan/Kesan</b></label>
                                    <textarea name="" id="" placeholder="Pesan/Kesan" cols="30" rows="3" class="form-control"></textarea>
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
                            <h5 class="card-title mb-3">Produk Terbaru</h5>
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