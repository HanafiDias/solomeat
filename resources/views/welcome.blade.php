<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SOLOMEAT</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/pricing/">

    <link href="{{ asset('pengguna/css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('image/beef.png') }}">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

    <!-- CSS bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"
        integrity="sha512-yz/zcjsEPGgd+V8eWfvMwA/Lm+2YRmjpX7W+1JvD3+q3dLrJW5In5+Dp5Jd0t/skaK1Q2X1x/GG+0oKJjKzEeA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS AOS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- FontAwesomme -->
    <script src="https://kit.fontawesome.com/1a35c69008.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        @media (max-width: 767.98px) {
            .card {
                width: 100%;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .card-header img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .list-unstyled {
            width: 100%;
            height: 80px;
            object-fit: cover;
        }

        .gra {
            background: linear-gradient(to left top, #060511, #302b63, #141423);
        }

        .navbar .nav-link {
             !important;
        }

        .dropdown.werno {
            background: linear-gradient(to right bottom, #8e0e00, #1f1c18);
            color: #fff;
            border: thin groove #ffffff;
            padding: 10px 20px;
            border-radius: 20px;
        }

        .jeneng {
            color: #ffffff;
            border-radius: 20px;
        }


        .jeneng:hover {
            background-color: #ffffff;
            border: thin groove #ffffff;
            border-radius: 20px;

        }

        .sizenama {
            font-size: 20px;
        }


        .glow {
            box-shadow: 0 0 5px rgb(0, 255, 234),
                0 0 25px rgb(0, 255, 234);
        }

        .glow:hover {
            box-shadow: 0 0 5px rgb(0, 255, 234),
                0 0 25px rgb(0, 255, 234), 0 0 50px rgb(0, 255, 234),
                0 0 100px rgb(0, 255, 234), 0 0 200px rgb(0, 255, 234);
        }

        /* CSS */
        .button-89 {
            --b: 3px;
            /* border thickness */
            --s: .45em;
            /* size of the corner */
            --color: #ffffff;

            padding: calc(.4em + var(--s)) calc(.7em + var(--s));
            color: var(--color);
            --_p: var(--s);
            background:
                conic-gradient(from 90deg at var(--b) var(--b), #0000 90deg, var(--color) 0) var(--_p) var(--_p)/calc(100% - var(--b) - 2*var(--_p)) calc(100% - var(--b) - 2*var(--_p));
            transition: .4s linear, color 0s, background-color 0s;
            outline: var(--b) solid #0000;
            outline-offset: .3em;
            font-size: 18px;

            border: 0;

            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-89:hover,
        .button-89:focus-visible {
            --_p: 0px;
            outline-color: var(--color);
            outline-offset: .2em;
            color: #fff
        }

        .button-89:active {
            background: var(--color);
            color: #fff;
        }
    </style>
    <style>
        /* css card */
        .cont {
            position: relative;
            width: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-warp: warp;
            padding: 10px;
        }

        .cont .card {
            position: relative;
            max-width: 300px;
            height: 255px;
            background: linear-gradient(to right bottom, #8e0e00, #1f1c18);
            margin: 50px 10px;
            padding: 20px 10px;

            display: flex;
            flex-direction: column;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
            transition: 0.3s ease-in-out;
            border-radius: 15px;
        }

        .cont .card:hover {
            height: 380px;
            display: flex;
        }


        .cont .card .image {
            position: relative;
            width: 260px;
            height: 260px;


            top: -35%;
            left: 8px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .cont .card .image img {
            max-width: 100%;
            border-radius: 20px;
        }

        .cont .card .content {
            position: relative;
            top: -150px;
            padding: 10px 15px;
            color: #FFF;
            text-align: center;

            visibility: hidden;
            opacity: 0;
            transition: 0.3s ease-in-out;

        }

        .cont .card:hover .content {
            margin-top: 40px;
            visibility: visible;
            opacity: 1;
            transition-delay: 0.2s;

        }
    </style>

    <!-- Custom styles for this template -->
    <link href="{{ asset('pengguna/pricing.css') }}" rel="stylesheet">
</head>

<body>
    <div class="gra">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-dark d-flex d-md-block"
            style="z-index: 2000; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand nav-link" href="/">
                    <img class="mb-2" src="image/beef.png" width="60" height="55">
                    {{-- <strong> SOLOMEAT</strong> --}}
                </a>

                {{-- <div class="dropdown d-flex align-items-center btn-group dropstart p-1">
                        <button class="btn dropdown-toggle sizenama jeneng glow" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->username }} <i class="fa-solid fa-shop"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a href="seller" class="dropdown-item">Dasboard Seller</a></li>
                            <li><a class="dropdown-item" href="/sesi/logout">Logout</a></li>
                        </ul>
                    </div> --}}

                @auth
                    @if (auth()->user()->role == 'user' || auth()->user()->role == 'admin')
                        <div class="dropdown d-flex align-items-center btn-group dropstart p-1">
                            <button class="btn dropdown-toggle button-89" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->username }}
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                @if (auth()->user()->role == 'admin')
                                    <li><a href="/admin" class="dropdown-item">Admin Dashboard</a></li>
                                @endif
                                @if (auth()->user()->role == 'user')
                                    <li><a href="seller/{{ auth()->user()->id }}" class="dropdown-item">Seller Dashboard</a>
                                    </li>
                                @endif
                                <li><a href="/sesi/logout" class="dropdown-item">Logout</a></li>
                            </ul>
                        </div>
                    @endif
                @endauth

                @guest
                    <a href="login"><button class="btn btn-toggle button-89" type="button" aria-expanded="false">
                            Login as Seller
                        </button></a>
                @endguest
            </div>
        </nav>
        <!-- Navbar -->

        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check" viewBox="0 0 16 16">
                <title>Check</title>
                <path
                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
            </symbol>
        </svg>



        <div class="p-3">
            <!-- slider -->
            <div class="container">
                <div class="row">
                    <div class="col-lg mb-5">
                        <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-interval="3000">
                                    <img src="image/opening.png" class="d-block img-fluid" alt="...">
                                </div>
                                <div class="carousel-item" data-interval="3000">
                                    <img src="image/event.png" class="d-block img-fluid" alt="...">
                                </div>
                                <div class="carousel-item" data-interval="3000">
                                    <img src="image/sale.png" class="d-block img-fluid" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <main>
                <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                    @foreach ($data as $item)
                        <div class="col-md-3 col-lg-3 mb-3">
                            <div class="" data-aos="zoom-in-down" data-aos-easing="linier"
                                data-aos-duration="2000">
                                <div class=cont>
                                    <div class=card>
                                        <div class=image>
                                            <img href="#" src="{{ asset('image/store/' . $item->gambar) }}">
                                        </div>
                                        <div class=content>
                                            <h2 class="card-title pricing-card-title">Rp.
                                                {{ number_format($item->harga) }}
                                            </h2>
                                            <div class="btn-group d-flex justify-content-between" role="group"
                                                aria-label="Button group with nested dropdown">
                                                <div class="container d-flex flex-column align-items-center gap-2">
                                                    <ul class="col-1 list-unstyled mt-1 mb-1">
                                                        <li>{{ $item->produk }}</li>
                                                    </ul>
                                                    <span><i class="fa-solid fa-eye"></i> Dilihat
                                                        {{ $item->counter }} kali </span>
                                                </div>

                                                <div class="d-flex flex-column align-items-center gap-2">
                                                    <form action="{{ route('welcome', ['id' => $item->id]) }}"
                                                        method="POST" target="_blank">
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn btn-md btn-success btn-whatsapp"
                                                            id="btn-whatsapp-{{ $item->id }}"
                                                            data-id="{{ $item->id }}" target="_blank">
                                                            <i class="fab fa-whatsapp"></i>
                                                        </button>
                                                    </form>

                                                    <form action="{{ route('shopee', ['id' => $item->id]) }}"
                                                        method="POST" target="_blank">
                                                        @csrf
                                                        <button type="submit" class="btn btn-md btn-warning"
                                                            id="btn-{{ $item->id }}"
                                                            data-id="{{ $item->id }}">
                                                            <i class="fa-solid fa-cart-shopping"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </main>
        </div>
    </div>
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-3">
            <!-- Section: Social media -->
            <section class="mb-1">
                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="mailto:hanafidias.hd@email.com"
                    role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/hanafidias/"
                    role="button"><i class="fab fa-instagram"></i></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/HanafiDias"
                    role="button"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: #121213">
            &copy; 2023 Copyright:
            <strong class="text-white" href="">Hanafi Dias - <a class="text-white" href="/"
                    style="text-decoration: none;">
                    SoloMeat</a> </strong>
        </div>
        <!-- Copyright -->
    </footer>

    < !--JS bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
        <script src="https://unpkg.com/@popperjs/core@2.9.3/dist/umd/popper.min.js"
            integrity="sha384-DrnM80GvnRB7sTDCvGOO2ZY0bF6a8omxKFbPPIZ/HjrCZp0gbAMukV69Uu1POUZZ" crossorigin="anonymous">
        </script>
        <script src="https://unpkg.com/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
            integrity="sha384-72Exo7Q+g6ULm+ZVwEBwJQLMn1uGd37IaXf+r/6jzidpzg+EoTJzN7ZwKysNY8gI" crossorigin="anonymous">
        </script>

        <!-- JS AOS-->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

</body>

</html>
