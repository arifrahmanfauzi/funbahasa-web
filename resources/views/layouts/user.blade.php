<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Fun Bahasa #BahasaAdalahKita</title>
    <link rel="shortcut icon" href="{{ asset('images/funbahasa.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
            h1 {
                font-family: Poppins;
            }
            h5 {
                font-family: Poppins; 
            }
            p {
                font-family: Poppins;
                color: #404642
            }
            .judul {
                color: #404642;
                font-style: normal; 
                font-weight: 500; 
                font-size: 24px; 
                line-height: 110%;
                padding-bottom: 10px;
            }
            
            .tanggal {
                font-family: Poppins;
                font-size: 13px;
                color: #BBBBBB
            }
            h2.font-sans{
                font-size: 50pt;
            }
    </style>
</head>

<body class="antialiased bg-body text-body font-body">
    <!--* Container -->
    <div>
        <!--* Navigator Bar -->
        {{-- <header class="flex flex-wrap items-center justify-between p-4">
            <div class="flex justify-between navbar-menu lg:w-full">
                <!--* Image  -->
                <div class="flex w-full lg:block lg:w-2/5">
                    <img src="{{ asset('images/funbahasa-logo.svg')}}" alt="funbahasa-logo" width="150" height="50px">
                </div>
                <!--* Image End  -->
                <!--* Nav Menu Item -->
                <div class="hidden lg:flex lg:items-center">
                    <nav>
                        <a href="#" class="block mt-4 mr-10 font-sans font-semibold text-gray-500 lg:inline-block lg:mt-0 hover:text-blue-500">Tentang Kami</a>
                        <a href="unggah-karya.html" class="block mt-4 mr-10 font-sans font-semibold text-gray-500 lg:inline-block lg:mt-0 hover:text-blue-500">Unggah Karya</a>
                        <a href="Event.html" class="block mt-4 mr-10 font-sans font-semibold text-gray-500 lg:inline-block lg:mt-0 hover:text-blue-500">Event</a>
                        <a href="#" class="block mt-4 mr-10 font-sans font-semibold text-gray-500 lg:inline-block lg:mt-0 hover:text-blue-500">Baca Karya</a>
                        <button href="#" class="px-5 py-1 ml-3 font-sans font-semibold text-white transition-all bg-blue-500 border-transparent rounded-full border-1 hover:border-blue-500 hover:bg-transparent hover:shadow-xl">Masuk</button>
                    </nav>
                </div>
                <!--* Nav Menu Item End -->
            </div>
        </header> --}}
        <header>
            <div class="mobile-logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/funbahasa-logo.svg')}}" alt="funbahasa-logo" width="150" height="50px">
                </a>
            </div>
            <div class="menu">
                <span class="bar"></span>
            </div>
            <nav>
                <div class="nav-container">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/funbahasa-logo.svg')}}" alt="funbahasa-logo" width="150" height="50px">
                        </a>
                    </div>
                    <ul>
                        <li><a href="#" class="block mr-10 font-sans font-semibold text-gray-500 lg:inline-block lg:mt-0 hover:text-blue-500">Tentang Kami</a></li>
                        <li><a href="{{ route('funner.tambah.karya') }}" class="block mr-10 font-sans font-semibold text-gray-500 lg:inline-block lg:mt-0 hover:text-blue-500">Unggah Karya</a></li>
                        <li><a href="{{ route('event') }}" class="block mr-10 font-sans font-semibold text-gray-500 lg:inline-block lg:mt-0 hover:text-blue-500">Event</a></li>
                        <li><a href="{{ route('read') }}" class="block mr-10 font-sans font-semibold text-gray-500 lg:inline-block lg:mt-0 hover:text-blue-500">Baca Karya</a></li>
                        <a href="{{ Auth::check()?route('home'):route('login') }}" class="px-5 py-1 ml-3 font-sans font-semibold text-white transition-all bg-blue-500 border-transparent rounded-full border-1 hover:border-blue-500 hover:shadow-xl">{{ Auth::check()?'Dashboard':'Masuk' }}</a>
                    </ul>
                </div>
            </nav>
        </header>
        <!--* Navigator Bar End -->

        <!--* Main Content -->
        <main class="m-0">
            <!--* Greeting  -->
                @yield('content')
            <!--* Post End -->
        </main>
        <!--* Main Content End -->
        <!--* Footer  -->
        <!-- <footer>
            
        </footer> -->
        <!--* Footer End  -->
    </div>

    <footer style="background-image: url('{{ asset('images/Footer.svg') }}');background-repeat: no-repeat;  background-size: cover; min-height: 500px; max-height:1200px; width:100%;">
        
        <div class="container mx-auto px-4" >
        <div class="flex flex-wrap text-center lg:text-left" style="position: relative; top: 200px;">
            <div class="w-full lg:w-6/12">
                <div style="position: relative; top: 100px;">
                    <img src="{{ asset('images/funbahasa-logo.svg') }}" alt="funbahasa-logo" width="150" height="50px">
                    <div class="mt-6 lg:mb-0 mb-6">
                        <h4 class="text-3xl font-semibold pb-2">Follow Us On</h4>
                        <button
                        class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                        type="button">
                        <i class="fab fa-twitter"></i>
                        </button>
                        <button
                        class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                        type="button">
                        <div>
                            <svg class="svg-icon" viewBox="0 0 20 20">
                                <path fill="none" d="M11.344,5.71c0-0.73,0.074-1.122,1.199-1.122h1.502V1.871h-2.404c-2.886,0-3.903,1.36-3.903,3.646v1.765h-1.8V10h1.8v8.128h3.601V10h2.403l0.32-2.718h-2.724L11.344,5.71z"></path>
                            </svg>
                        </div>
                        </button>
                        <button
                        class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                        type="button">
                        <i class="fab fa-dribbble"></i>
                        </button>
                        <button
                        class="bg-white text-gray-900 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                        type="button">
                        <i class="fab fa-github"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="flex mt-10">
                    <div class="w-full lg:w-4/12">
                        <span class="block text-gray-600 text-sm font-semibold mb-2 font-bold">
                            Informasi Event
                        </span>
                        <ul class="list-unstyled">
                            <li>
                            <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                href="#">
                                Pendaftaran
                            </a>
                            </li>
                            <li>
                            <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                href="#">
                                Panduan
                            </a>
                            </li>
                            <li>
                            <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                href="#">
                                Poster
                            </a>
                            </li>
                            <li>
                            <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="#">Unggah</a>
                            </li>
                            <li>
                                <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="#">Pengumuman</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                    <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">
                        List Kategori
                    </span>
                    <ul class="list-unstyled">
                        <li>
                        <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                            href="#">
                            Cerpen
                        </a>
                        </li>
                        <li>
                        <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                            href="#">
                            Artikel
                        </a>
                        </li>
                        <li>
                            <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                href="#">
                                Puisi
                            </a>
                        </li>
                    </ul>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">
                            Contact
                        </span>
                        <ul class="list-unstyled">
                            <li>
                            <p class="text-gray-70 hover:text-gray-900 font-semibold block pb-2 text-sm">
                                Ruko de Farda RK-5, Dusun Keboan, Keboananom, Kec. Gedangan, Kabupaten Sidoarjo, Jawa Timur 61254
                            </p>
                            </li>
                            <li>
                            <p class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm">
                                funbahasa@gmail.com
                            </p>
                            </li>
                            <li>
                            <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="www.funbahasa.com">
                                www.funbahasa.com
                            </a>
                            </li>
                            <li>
                            <p class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                            >
                                +62 815-1531-2240
                            </p>
                            </li>
                        </ul>
                        </div>
                </div>
            </div>
        </div>
        <div class="relative" style="top: 110px;">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center pt-10">
                <div style="height: 2px; min-width:100px; max-width: 400px; background-color: black;"></div>
                <div class="text-sm text-gray-600 font-semibold py-1">
                    Fun Bahasa Indonesia ©
                </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
    <script>
        var isActive = false;
$('.menu').click(function () { 
    if (isActive) {
        $(this).removeClass('active');
        $('body').removeClass('menu-open');
    } else {
        $(this).addClass('active');
        $('body').addClass('menu-open');
    }

    isActive = !isActive;
});
    </script>
</body>

</html>