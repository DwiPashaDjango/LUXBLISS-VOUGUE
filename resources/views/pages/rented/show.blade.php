@extends('layouts.app')

@section('title')
    Retun (Pengembalian)
@endsection

@push('css')
   <style>

   </style>
@endpush        

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 mb-5 mb-md-0">
                <h2 class="h3 mb-3 text-black"> <i class="fas fa-map-marker-alt" style="color: #198754;"></i> Alamat Pengiriman</h2>
                <div class="card rounded mb-5">
                    <div class="card-body">
                        <a href="javascript:void(0)" class="btn btn-primary btn-sm mb-3" style="border-radius: 30px"><i class="fas fa-pencil" style="font-size: 12px"></i></a>
                        <div style="border: 2px dashed #198754; border-radius: 5px; padding: 10px; height: 23vh;">
                            <p style="word-break: break-all">
                                Raden Muhamad Rama Poetra Ardinigrat
                                <br>
                                0874562023856325
                                <br>
                                <br>
                            </p>
                        </div>
                    </div>
                </div>

                <h2 class="h3 mb-3 text-black"> <i class="fas fa-clock" style="color: #198754"></i> Durasi Penyewaan</h2>
                <div class="card rounded mb-5">
                    <div class="card-body">
                        <table style="width: 100%">
                            <tr>
                                <td style="padding-bottom: 20px">Pesan</td>
                                <td style="padding-bottom: 20px"></td>
                                <td style="padding-bottom: 20px">
                                    <input type="text" name="" id="" class="form-control" placeholder="(Optional) Tinggal Pesan Ke Toko" style="height: 35%; border: 2px solid #198754">
                                </td>
                            </tr>
                            <tr> 
                                <td>Opsi Pengiriman</td>
                                <td></td>
                                <td>
                                    <select name="" id="" class="form-control" style="height: 35%; border: 2px solid #198754">
                                        <option value="">- Pilih -</option>
                                        @php
                                            $pengiriman = [
                                                [
                                                    "name" => "JNE",
                                                    "price" => 20000
                                                ],
                                                [
                                                    "name" => "J&T",
                                                    "price" => 15000
                                                ],
                                                [
                                                    "name" => "Ninja",
                                                    "price" => 10000
                                                ],
                                            ];
                                        @endphp 
                                        @foreach ($pengiriman as $pn)
                                            <option value="{{$pn['name']}}">{{$pn['name']}} - {{number_format($pn['price'], 2)}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr> 
                                <td style="padding-top:20px;">Metode Pembayaran</td>
                                <td style="padding-top:20px;"></td>
                                <td style="padding-top:20px;">
                                    <div class="border p-3 mb-3">
                                        <h3 class="h6 mb-0">
                                            <a class="d-block" data-bs-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">
                                                E-Wallet
                                            </a>
                                        </h3>
    
                                        <div class="collapse" id="collapsecheque">
                                            <div class="py-2">
                                                @php
                                                    $ewallet = [
                                                        [
                                                            "name" => "Dana",
                                                            "image" => asset('asset/wallet/dana.png')
                                                        ],
                                                        [
                                                            "name" => "Ovo",
                                                            "image" => asset('asset/wallet/ovo.png')
                                                        ],
                                                        [
                                                            "name" => "Sea Bank",
                                                            "image" => asset('asset/wallet/seabank.png')
                                                        ],
                                                        [
                                                            "name" => "Shoppepay",
                                                            "image" => asset('asset/wallet/spay.png')
                                                        ],
                                                    ];
                                                @endphp
                                                @foreach ($ewallet as $index => $wl)
                                                    <div class="d-flex align-items-center justify-content-between p-3 customRounded">
                                                        <div class="d-flex align-items-center">
                                                            <input type="radio" name="paymentMethood" id="customAmount-{{$index}}">
                                                            <label for="customAmount-{{$index}}" class="ms-3">
                                                                <strong>{{$wl['name']}}</strong><br />
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <img src="{{$wl['image']}}" alt="Amex Logo" height="28">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border p-3 mb-3">
                                        <h3 class="h6 mb-0">
                                            <a class="d-block" data-bs-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">
                                                Transfer Bank
                                            </a>
                                        </h3>

                                        <div class="collapse" id="collapsebank">
                                            <div class="py-2">
                                                <div class="border customRounded">
                                                    @php
                                                        $transfer = [
                                                            [
                                                                "name" => "BCA",
                                                                "image" => asset('asset/bank/bca.png')
                                                            ],
                                                            [
                                                                "name" => "Mandiri",
                                                                "image" => asset('asset/bank/mandiri.png')
                                                            ],
                                                            [
                                                                "name" => "BNI",
                                                                "image" => asset('asset/bank/bni.png')
                                                            ],
                                                            [
                                                                "name" => "BRI",
                                                                "image" => asset('asset/bank/bri.png')
                                                            ],
                                                        ];
                                                    @endphp
                                                    @foreach ($transfer as $index => $tf)
                                                        <div class="d-flex align-items-center justify-content-between p-3 customRounded">
                                                            <div class="d-flex align-items-center">
                                                                <input type="radio" name="paymentMethood" id="customAmount-{{$index}}">
                                                                <label for="customAmount-{{$index}}" class="ms-3">
                                                                    <strong>Bank {{$tf['name']}}</strong><br />
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <img src="{{$tf['image']}}" alt="Amex Logo" height="28">
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h2 class="h3 mb-3 text-black"> <i class="fas fa-shopping-bag" style="color: #198754"></i> Produk Yang Di Sewa</h2>
                        <div class="card rounded mb-5">
                            <div class="card-body">
                                <div class="row gx-5">
                                    <aside class="col-lg-4">
                                        <div class="border rounded-4 mb-3 d-flex justify-content-center">
                                            <img style="max-width: 100%; height: 16vh; margin: auto;" class="rounded-4 fit" src="{{asset('asset/product/kebaya-2.png')}}" />
                                        </div>
                                    </aside>
                                    <main class="col-lg-8">
                                        <div class="ps-lg">
                                            <h4 class="title text-dark">
                                                Baju Kebaya Wanita Ada Bali (Putih)
                                            </h4>
                                            <p>
                                                Modern look and quality demo item is a streetwear-inspired streetwear-inspired st
                                            </p>
                                        </div>
                                    </main>
                                    <main class="col-lg-12">
                                        <div class="ps-lg">
                                            <table class="table table-bordered text-center">
                                                <tr>
                                                    <th>Harga</th>
                                                    <th>Jumlah</th>
                                                    <th>Subtotal</th>
                                                </tr>
                                                <tr>
                                                    <td>Rp. 240.000</td>
                                                    <td>2</td>
                                                    <td>Rp. 450.000</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </main>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h2 class="h3 mb-3 text-black"> <i class="fas fa-clipboard-list" style="color: #198754"></i> Rincian Penyewaan</h2>
                        <div class="card rounded mb-5">
                            <div class="card-body">
                                <table style="width: 100%">
                                    <tr>
                                        <td style="width: 30%; padding-bottom: 8px">Subtotal Produk</td>
                                        <td style="width: 30%; padding-bottom: 8px"></td>
                                        <td style="width: 30%; padding-bottom: 8px">Rp. 480.000</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 30%; padding-bottom: 8px">Ongkos Kirim</td>
                                        <td style="width: 30%; padding-bottom: 8px"></td>
                                        <td style="width: 30%; padding-bottom: 8px">Rp. 10.000</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 30%; padding-bottom: 8px">Durasi Penyewaan</td>
                                        <td style="width: 30%; padding-bottom: 8px"></td>
                                        <td style="width: 30%; padding-bottom: 8px">Rp. 10.000</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 30%; padding-bottom: 8px">Biaya Layanan</td>
                                        <td style="width: 30%; padding-bottom: 8px"></td>
                                        <td style="width: 30%; padding-bottom: 8px">Rp. 10.000</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 30%; padding-bottom: 8px">
                                            <h6>Total Pembayaran</h6>
                                        </td>
                                        <td style="width: 30%; padding-bottom: 8px"></td>
                                        <td style="width: 30%; padding-bottom: 8px">
                                            <h6>Rp. 741.000</h6>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h2 class="h3 mb-3 text-black"> <i class="fas fa-clipboard-list" style="color: #198754"></i> Rincian Pengembalian</h2>
                        <div class="card rounded mb-5">
                            <div class="card-body">
                                <table style="width: 100%">
                                    <tr>
                                        <td style="width: 30%; padding-bottom: 8px">Denda</td>
                                        <td style="width: 30%; padding-bottom: 8px"></td>
                                        <td style="width: 30%; padding-bottom: 8px">Rp. 0</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 30%; padding-bottom: 8px">
                                            <h6>Total Pembayaran</h6>
                                        </td>
                                        <td style="width: 30%; padding-bottom: 8px"></td>
                                        <td style="width: 30%; padding-bottom: 8px">
                                            <h6>Rp. 0</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 30%; padding-bottom: 8px" colspan="3">
                                            <hr class="divide">
                                            <a href="{{route('alert.rent', ['title' => 'Terima Kasih !', 'message' => 'Produk berhasil dikembalikan'])}}" class="btn btn-primary w-100">Return Product</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection