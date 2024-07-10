<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="{{asset('logo.png')}}">

    <meta name="description" content="" />
    <meta name="keywords" content="Tempat sewa kebaya & jas luxbliss vougue" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Bootstrap CSS -->
    <link href="{{asset('pages')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('pages')}}/css/tiny-slider.css" rel="stylesheet">
    <link href="{{asset('pages')}}/css/style.css" rel="stylesheet">
    <title>@yield('title') &mdash; LuxBliss Vogue</title>
    <style>
        html {
        scroll-behavior: smooth;
        }
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        ::-webkit-scrollbar-track {      
            background: #022414;    
        }
        
        ::-webkit-scrollbar-thumb {
            background: #3b5d50;
            border-radius: 5px;
        }

        @media only screen and (max-width: 820px) {
            .hero-img-wrap img {
                width: 100%
            }
        }
    </style>
    @stack('css')
</head>

<body>

    <!-- Start Header/Navigation -->
    @include('layouts.navbar')
    <!-- End Header/Navigation -->

    @yield('content')

    <!-- Start Footer Section -->
    <footer class="footer-section text-white" style="background-color: #3b5d50">
        <div class="container relative">

            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="mb-4 footer-logo-wrap">
                        <img src="{{asset('logo.png')}}" width="70" alt="">
                    </div>
                    <p class="mb-2">
                       Jl. Raya Cempaka arum, Cempaka, Kec. Talun, Kabupaten Cirebon, Jawa Barat 45171
                    </p>
                    <p class="mb-2">
                       Email : luxblissvogue@gmail.com
                    </p>
                    <p class="mb-2">
                       Fax : 45321
                    </p>
                    <p class="mb-2">
                       Telpone : 08xxxxxxxxxx
                    </p>
                </div>

                <div class="col-lg-8">
                    <div class="row links-wrap">
                        <div class="col-12 col-sm-6 col-md-4">
                            <ul class="list-unstyled">
                                <li><a class="text-white" href="#">Beranda</a></li>
                                <li><a class="text-white" href="#">Koleksi</a></li>
                                <li><a class="text-white" href="#">Tentang Kami</a></li>
                                <li><a class="text-white" href="#">Hubungi Kami</a></li>
                            </ul>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4">
                            <ul class="list-unstyled">
                                <li><a class="text-white" href="#">Obrolan Langsung (Live Chat)</a></li>
                                <li><a class="text-white" href="#">Panduan Pengguna</a></li>
                            </ul>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4">
                            <ul class="list-unstyled">
                                <li><a class="text-white" href="#">Tim Kami</a></li>
                                <li><a class="text-white" href="#">Kebijakan Pribadi</a></li>
                                <li><a class="text-white" href="#">Syarat & Ketentuan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-top copyright">
                <ul class="list-unstyled custom-social text-center mt-5" style="padding-bottom: 0">
                    <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->


    <script src="{{asset('pages')}}/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="{{asset('pages')}}/js/tiny-slider.js"></script>
    <script src="{{asset('pages')}}/js/custom.js"></script>

    @stack('js')
</body>

</html>