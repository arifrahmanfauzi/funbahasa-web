@extends('layouts.user')
@section('content')
<div class="absolute top-0 -z-1 w-1\/2 right-5">
    <img src="{{ asset('images/bg-greeting.svg') }}" alt="Back-ground-header-img">
</div>
<section class="m-1">
    <!-- <div class="w-full px-24">

        <h1 class="flex justify-start text-4xl py-2 ml-80" id="judul">BACA
        </h1>
        <h1 class="flex justify-start text-4xl" id="judul2"
        >Funners</h1>
        <h1 class="flex justify-start text-4xl py-2 mb-1 ml-80" id="judul">KARYA
        </h1>
        <div class="text-center py-12">
            <button class="bg-blue-200 hover:bg-blue-300 text-black py-2 px-4 rounded">Di Bawah Ini</button>
        </div>
    </div> -->
    <div class="w-full px-24 mt-10">
        <h1 class="flex justify-start text-4xl ml-80" id="judul">BACA
        </h1>
    </div>

    <div class="w-full px-60 pt-10 pb-5">
        <h1 class="flex justify-start text-4xl z-10" id="judul2">Funners</h1>
    </div>

    <div class="w-full px-24 mb-36">
        <h1 class="flex justify-start text-4xl ml-80" id="judul3">KARYA
        </h1>
    </div>
    <div class="text-center mb-20">
        <button class="bg-blue-200 hover:bg-blue-300 text-black py-2 px-6 rounded">Di Bawah Ini</button>
    </div>
    <div class="flex -mx-2 px-28">
        <div class="grid grid-cols-3 gap-4">
            <div class="border border-2 shadow-lg shadow-lg bg-white p-5 rounded-2xl">
                <h5 class="artikel">Artikel</h5>
                <h1 class="judul">Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu</h1>
                <h5 class="tanggal">
                    <i class="fas fa-calendar"></i>
                    FUNBAHASA / Januari 17, 2021
                </h5>
                <p class="content">Rasyid Yudhistira MATAHARI MEMBELAH TUBUHMU DAN MEREKA TAK TAHU ITU Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan dibelah? Kau tentu tahu siapa siapa yang menunggu itu.</p>
            </div>
            <div class="border border-2 shadow-lg shadow-lg bg-white p-5 rounded-2xl">
                <h5 class="artikel">Artikel</h5>
                <h1 class="judul">Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu</h1>
                <h5 class="tanggal">
                    <i class="fas fa-calendar"></i>
                    FUNBAHASA / Januari 17, 2021
                </h5>
                <p class="content">Rasyid Yudhistira MATAHARI MEMBELAH TUBUHMU DAN MEREKA TAK TAHU ITU Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan dibelah? Kau tentu tahu siapa siapa yang menunggu itu.</p>
            </div>
            
            <div class="border border-2 shadow-lg shadow-lg bg-white p-5 rounded-2xl">
                <h5 class="artikel">Artikel</h5>
                <h1 class="judul">Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu</h1>
                <h5 class="tanggal">
                    <i class="fas fa-calendar"></i>
                    FUNBAHASA / Januari 17, 2021
                </h5>
                <p class="content">Rasyid Yudhistira MATAHARI MEMBELAH TUBUHMU DAN MEREKA TAK TAHU ITU Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan dibelah? Kau tentu tahu siapa siapa yang menunggu itu.</p>
            </div>
            
            <div class="border border-2 shadow-lg shadow-lg bg-white p-5 rounded-2xl">
                <h5 class="artikel">Artikel</h5>
                <h1 class="judul">Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu</h1>
                <h5 class="tanggal">
                    <i class="fas fa-calendar"></i>
                    FUNBAHASA / Januari 17, 2021
                </h5>
                <p class="content">Rasyid Yudhistira MATAHARI MEMBELAH TUBUHMU DAN MEREKA TAK TAHU ITU Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan dibelah? Kau tentu tahu siapa siapa yang menunggu itu.</p>
            </div>
            
            <div class="border border-2 shadow-lg shadow-lg bg-white p-5 rounded-2xl">
                <h5 class="artikel">Artikel</h5>
                <h1 class="judul">Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu</h1>
                <h5 class="tanggal">
                    <i class="fas fa-calendar"></i>
                    FUNBAHASA / Januari 17, 2021
                </h5>
                <p class="content">Rasyid Yudhistira MATAHARI MEMBELAH TUBUHMU DAN MEREKA TAK TAHU ITU Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan dibelah? Kau tentu tahu siapa siapa yang menunggu itu.</p>
            </div>

            <div class="border border-2 shadow-lg shadow-lg bg-white p-5 rounded-2xl">
                <h5 class="artikel">Artikel</h5>
                <h1 class="judul">Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu</h1>
                <h5 class="tanggal">
                    <i class="fas fa-calendar"></i>
                    FUNBAHASA / Januari 17, 2021
                </h5>
                <p class="content">Rasyid Yudhistira MATAHARI MEMBELAH TUBUHMU DAN MEREKA TAK TAHU ITU Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan dibelah? Kau tentu tahu siapa siapa yang menunggu itu.</p>
            </div>

            <div class="border border-2 shadow-lg shadow-lg bg-white p-5 rounded-2xl">
                <h5 class="artikel">Artikel</h5>
                <h1 class="judul">Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu</h1>
                <h5 class="tanggal">
                    <i class="fas fa-calendar"></i>
                    FUNBAHASA / Januari 17, 2021
                </h5>
                <p class="content">Rasyid Yudhistira MATAHARI MEMBELAH TUBUHMU DAN MEREKA TAK TAHU ITU Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan dibelah? Kau tentu tahu siapa siapa yang menunggu itu.</p>
            </div>

            <div class="border border-2 shadow-lg shadow-lg bg-white p-5 rounded-2xl">
                <h5 class="artikel">Artikel</h5>
                <h1 class="judul">Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu</h1>
                <h5 class="tanggal">
                    <i class="fas fa-calendar"></i>
                    FUNBAHASA / Januari 17, 2021
                </h5>
                <p class="content">Rasyid Yudhistira MATAHARI MEMBELAH TUBUHMU DAN MEREKA TAK TAHU ITU Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan dibelah? Kau tentu tahu siapa siapa yang menunggu itu.</p>
            </div>

            <div class="border border-2 shadow-lg shadow-lg bg-white p-5 rounded-2xl">
                <h5 class="artikel">Artikel</h5>
                <h1 class="judul">Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu</h1>
                <h5 class="tanggal">
                    <i class="fas fa-calendar"></i>
                    FUNBAHASA / Januari 17, 2021
                </h5>
                <p class="content">Rasyid Yudhistira MATAHARI MEMBELAH TUBUHMU DAN MEREKA TAK TAHU ITU Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan dibelah? Kau tentu tahu siapa siapa yang menunggu itu.</p>
            </div>
        </div>
    </div>
    
    <div class="w-full px-24 py-5"></div>
        <div class="text-center">
            <div class="pagination">
                <a href="#">Previous</a>
                <a href="#">1</a>
                <a href="#" class="active">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">Next</a>
            </div>
        </div>
    </div>
</section>

@endsection