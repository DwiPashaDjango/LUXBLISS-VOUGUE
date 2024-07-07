@extends('layouts.app')

@section('title')
    Whislit
@endsection

@section('content')
    <div class="container py-5">
            <div class="row mb-5">
                <form class="col-md-12" method="post">
                    <div class="site-blocks-table">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Foto</th>
                                    <th class="product-name">Prpduk</th>
                                    <th class="product-price">Harga</th>
                                    <th class="product-quantity">Qty</th>
                                    <th class="product-total">Total</th>
                                    <th class="product-remove">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-thumbnail">
                                        <img src="{{asset('asset/product/kebaya-2.png')}}" width="80" alt="Image" class="img-fluid">
                                    </td>
                                    <td class="product-name">
                                        <h4 class="h5 text-black">Kebaya Wanita Adat Bali - Putih</h4>
                                    </td>
                                    <td>Rp. 280.000</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                                                </div>
                                                <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-black increase" type="button">&plus;</button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Rp. 280.000</td>
                                    <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6 pl-5">
                    <div class="row justify-content-end">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-12 text-right border-bottom mb-5">
                                    <h3 class="text-black h4 text-uppercase">Total Product</h3>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <span class="text-black">Subtotal</span>
                                </div>
                                <div class="col-md-6 text-right">
                                    <strong class="text-black">Rp. 280.000</strong>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <span class="text-black">Total</span>
                                </div>
                                <div class="col-md-6 text-right">
                                    <strong class="text-black">Rp. 280.000</strong>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <a href="{{route('rent')}}" class="btn btn-primary btn-sm w-100 py-3 btn-block" onclick="window.location='checkout.html'">Sewa Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection