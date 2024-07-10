@extends('layouts.app')

@section('title')
    PenyewaanKu
@endsection

@section('content')
    <div class="container py-5">
        <div class="alert alert-primary d-flex align-items-center" role="alert" style="background-color: #3b5d50; border: none; color: #fff">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-info-circle mr-3" style="margin-right: 20px" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
            </svg>
            <div>
                Peringatan Silahkan Kembalikan Produk Yang Sudah Di Sewa Sesuai Dengan Waktu Pengembalian Yang Sudah Ditentukan. 
                Jika Pengembalian Melewati Batas Waktu Yang Sudah Ditentukan Maka Akan Terkena Denda Sebesar <b>Rp. 20.000</b>
            </div>
        </div>

        <div class="py-2">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card p-3 mb-3 rounded-lg bg-white">
                        <div class="about-product text-center mt-2">
                            <img src="{{asset('asset/product/kebaya-2.png')}}" width="200">
                            <div>
                                <h4 class="py-3">Kebaya Adat Bali Wanita - Putih</h4>
                            </div>
                        </div>
                        <div class="stats mt-2">
                            <div class="d-flex justify-content-between p-price">
                                <span>Tanggal Sewa</span>
                                <span>2 Juli 2024</span>
                            </div>
                            <div class="d-flex justify-content-between p-price">
                                <span>Tanggal Selesai Sewa</span>
                                <span>3 Juli 2024</span>
                            </div>
                            <div class="d-flex justify-content-between p-price">
                                <span>Denda</span>
                                <span>Rp. 0</span>
                            </div>
                            <hr class="divide">
                            <div class="d-flex justify-content-between p-price">
                                <a href="{{route('rented.show')}}" class="btn btn-primary w-100">Return</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card p-3 mb-3 rounded-lg bg-white">
                        <div class="about-product text-center mt-2">
                            <img src="{{asset('asset/product/kebaya-2.png')}}" width="200">
                            <div>
                                <h4 class="py-3">Kebaya Adat Bali Wanita - Putih</h4>
                            </div>
                        </div>
                        <div class="stats mt-2">
                            <div class="d-flex justify-content-between p-price">
                                <span>Tanggal Sewa</span>
                                <span>2 Juli 2024</span>
                            </div>
                            <div class="d-flex justify-content-between p-price">
                                <span>Tanggal Selesai Sewa</span>
                                <span>3 Juli 2024</span>
                            </div>
                            <div class="d-flex justify-content-between p-price">
                                <span>Denda</span>
                                <span>Rp. 0</span>
                            </div>
                            <hr class="divide">
                            <div class="d-flex justify-content-between p-price">
                                <a href="{{route('rented.show')}}" class="btn btn-primary w-100">Return</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card p-3 mb-3 rounded-lg bg-white">
                        <div class="about-product text-center mt-2">
                            <img src="{{asset('asset/product/kebaya-2.png')}}" width="200">
                            <div>
                                <h4 class="py-3">Kebaya Adat Bali Wanita - Putih</h4>
                            </div>
                        </div>
                        <div class="stats mt-2">
                            <div class="d-flex justify-content-between p-price">
                                <span>Tanggal Sewa</span>
                                <span>2 Juli 2024</span>
                            </div>
                            <div class="d-flex justify-content-between p-price">
                                <span>Tanggal Selesai Sewa</span>
                                <span>3 Juli 2024</span>
                            </div>
                            <div class="d-flex justify-content-between p-price">
                                <span>Denda</span>
                                <span>Rp. 0</span>
                            </div>
                            <hr class="divide">
                            <div class="d-flex justify-content-between p-price">
                                <a href="{{route('rented.show')}}" class="btn btn-primary w-100">Return</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card p-3 mb-3 rounded-lg bg-white">
                        <div class="about-product text-center mt-2">
                            <img src="{{asset('asset/product/kebaya-2.png')}}" width="200">
                            <div>
                                <h4 class="py-3">Kebaya Adat Bali Wanita - Putih</h4>
                            </div>
                        </div>
                        <div class="stats mt-2">
                            <div class="d-flex justify-content-between p-price">
                                <span>Tanggal Sewa</span>
                                <span>2 Juli 2024</span>
                            </div>
                            <div class="d-flex justify-content-between p-price">
                                <span>Tanggal Selesai Sewa</span>
                                <span>3 Juli 2024</span>
                            </div>
                            <div class="d-flex justify-content-between p-price">
                                <span>Denda</span>
                                <span>Rp. 0</span>
                            </div>
                            <hr class="divide">
                            <div class="d-flex justify-content-between p-price">
                                <a href="{{route('rented.show')}}" class="btn btn-primary w-100">Return</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card p-3 mb-3 rounded-lg bg-white">
                        <div class="about-product text-center mt-2">
                            <img src="{{asset('asset/product/kebaya-2.png')}}" width="200">
                            <div>
                                <h4 class="py-3">Kebaya Adat Bali Wanita - Putih</h4>
                            </div>
                        </div>
                        <div class="stats mt-2">
                            <div class="d-flex justify-content-between p-price">
                                <span>Tanggal Sewa</span>
                                <span>2 Juli 2024</span>
                            </div>
                            <div class="d-flex justify-content-between p-price">
                                <span>Tanggal Selesai Sewa</span>
                                <span>3 Juli 2024</span>
                            </div>
                            <div class="d-flex justify-content-between p-price">
                                <span>Denda</span>
                                <span>Rp. 0</span>
                            </div>
                            <hr class="divide">
                            <div class="d-flex justify-content-between p-price">
                                <a href="{{route('rented.show')}}" class="btn btn-primary w-100">Return</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card p-3 mb-3 rounded-lg bg-white">
                        <div class="about-product text-center mt-2">
                            <img src="{{asset('asset/product/kebaya-2.png')}}" width="200">
                            <div>
                                <h4 class="py-3">Kebaya Adat Bali Wanita - Putih</h4>
                            </div>
                        </div>
                        <div class="stats mt-2">
                            <div class="d-flex justify-content-between p-price">
                                <span>Tanggal Sewa</span>
                                <span>2 Juli 2024</span>
                            </div>
                            <div class="d-flex justify-content-between p-price">
                                <span>Tanggal Selesai Sewa</span>
                                <span>3 Juli 2024</span>
                            </div>
                            <div class="d-flex justify-content-between p-price">
                                <span>Denda</span>
                                <span>Rp. 0</span>
                            </div>
                            <hr class="divide">
                            <div class="d-flex justify-content-between p-price">
                                <a href="{{route('rented.show')}}" class="btn btn-primary w-100">Return</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection