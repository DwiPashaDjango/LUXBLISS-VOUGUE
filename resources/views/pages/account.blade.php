@extends('layouts.app')

@section('title')
    Profile
@endsection

@section('content')
    <div class="container">
        <div class="row py-3">
            <div class="col-lg-8">
                <div class="card shadow my-3">
                    <div class="card-body m-2">
                        <h4 style="color:black;">
                            Profile Saya
                        </h4>
                        <p style="color:black;">Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan akun</p>
                        <hr class="divide">
                        <table style="width:100%; color:black;">
                            <tr style="">
                                <td style="padding-bottom:15px; width:25%;">Nama Lengkap</td>
                                <td style="padding-bottom:15px; width:10%;"></td>
                                <td style="padding-bottom:15px; width:65%;">
                                    <input class="form-control" style="border:2px solid #198754; width:100%; height:40px;" type="text" placeholder="Masukkan Nama Lengkap">
                                </td>                                
                            </tr>
                            <tr>
                                <td style="padding-bottom:15px; width:25%;">Email</td>
                                <td style="padding-bottom:15px; width:10%;"></td>
                                <td style="padding-bottom:15px; width:65%;">
                                    <input class="form-control" style="border:2px solid #198754; width:100%; height:40px;" type="text" placeholder="Masukkan Email">
                                </td>                               
                            </tr>
                            <tr>
                                <td style="padding-bottom:15px; width:25%;">Nomor Telepon</td>
                                <td style="padding-bottom:15px; width:10%;"></td>
                                <td style="padding-bottom:15px; width:65%;">
                                    <input class="form-control" style="border:2px solid #198754; width:100%; height:40px;" type="text" placeholder="Masukkan No Telepon     ">
                                </td>                               
                            </tr>
                            <tr>
                                <td style="padding-bottom:15px; width:25%;"></td>
                                <td style="padding-bottom:15px; width:10%;"></td>
                                <td style="padding-bottom:15px; width:65%;">
                                    <button type="submit" class="btn btn-primary btn-sm" style="float: right">Simpan</button>
                                </td>                               
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card shadow my-3">
                    <div class="card-body">
                        <h4 style="color:black;">
                            Alamat Saya
                        </h4>
                        <button class="btn btn-primary position-absolute top-0 end-0 m-2 p-2">
                            <i class="fas fa-plus"></i> 
                            Tambah Alamat
                        </button>
                        <hr class="divide">
                        <div style="border: 2px dashed #198754; padding: 10px; border-radius: 2px">
                            <p style="color:black;">Pengguna | (+62)8764758478</p>
                            <p>jl.kenanga 4 blok E No.532 perumahan Cempaka Arum, Cirebon, KAB. CIREBON, TALUN (CIREBON SELATAN), JAWA BARAT, ID, 45171</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-center">
                <img src="{{asset('pages')}}/images/person-1.png" alt="Profile Picture" class="rounded-circle my-3" style="width: 200px; height: 200px;">
                <br>
                <button class="btn" style="background-color: transparent; color: #198754; border: 2px solid #198754;">Pilih Gambar</button>
            </div>
            
        </div>
    </div>
@endsection