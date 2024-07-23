@extends('layouts.admin')

@section('title')
    Data Produk
@endsection

@push('css')
    <style>
        .multiline-truncate {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
@endpush    

@section('content')
    <div class="mb-3">
        <div class="d-flex justify-content-between">
            <div>
                <form action="{{route('admin.product')}}">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search" style="border: 1px solid #198754">
                        <div class="input-group-append">                                            
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div>
                {{$products->links()}}
            </div>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="alert alert-primary alert-dismissible show fade py-2">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                {{session()->get('message')}}
            </div>
        </div>
    @endif

    @forelse ($products as $index => $item)
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                        <div class="bg-image hover-zoom ripple rounded ripple-surface">
                            @php
                                $imageArray = explode('|', $item->image);
                                $randomIndex = array_rand($imageArray);
                                $randomImage = $imageArray[$randomIndex];
                            @endphp
                            <img src="{{asset($randomImage)}}" class="w-100 " height="280" />
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 mt-2">
                        <h5>{{$item->nm_produk}}</h5>
                        <div class="d-flex flex-row">
                            <div class="text-danger mb-1">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <hr class="divide">
                        <div class="mt-1 mb-0 text-muted small">
                            <span>{{$item->type}}</span>
                            <span class="text-primary"> • </span>
                            @foreach (explode('|', $item->size) as $sz)
                                <span>{{$sz}}</span>
                                <span class="text-primary"> • </span>
                            @endforeach
                        </div>
                        <p class="multiline-truncate mb-4 mb-md-0">
                            {{$item->deskripsi_singkat}}
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start mt-2">
                        <div class="d-flex flex-row align-items-center mb-1">
                            <h4 class="mb-1 me-1">Rp. {{number_format($item->harga, 2, '.')}}</h4>
                        </div>
                        <div class="d-flex flex-column mt-4">
                            <a class="btn btn-warning btn-sm" href="{{route('admin.product.edit', ['id' => $item->id])}}">Edit</a>
                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-sm mt-2" type="button">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="divide">
    @empty
        
    @endforelse
@endsection