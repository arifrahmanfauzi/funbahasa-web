@extends('layouts.user')
@section('content')
<section  class="relative w-full bg-clip-border h-30">
    <img src="{{ asset('images/bg-greeting.svg')}}" alt="image-greeting"  class="w-full h-auto">
    <div class="absolute w-full pl-8 top-20">
        <div class="flex flex-col">
            <h2 class="font-sans text-3xl font-bold text-gray-500">
            Akselerasi Bahasa <br><br> dan Sastra untuk <br><br> Budi Pekerti <br><br>Bangsa
        </h2>
        <button class="px-8 py-2 mt-10 text-blue-600 border border-blue-600 rounded-full shadow-sm max-w-max hover:shadow-lg">
            Tentang Kami
        </button>
    </div>
    </div>
</section>
<!--* Greeting  End-->
<!--* Call To Action  -->
<section class="flex flex-col w-full mt-20 text-center">
    <div class="flex flex-col">
    <h2 class="content-center justify-center font-sans text-2xl font-bold text-center text-gray-500">Kirim Karya Terbaik Kalian</h2>
    <p class="mt-5 font-sans text-center">
        Setiap orang pasti punya pengalaman dan cerita. Pengalaman merupakan <br> sebuah perjalanan yang berharga, untuk itu kami hadir untuk <br> mendengarkan pengalaman dan cerita yang kalian bagikan. <br> Hidupkan karyamu sebagai inspirasi bangsa.
    </p>
    </div>
    <img class="" src="{{ asset('images/call-to-action.svg')}}" alt="image-reading">
</section>
<!--* Call To Action End  -->
<!--* Event  -->
<section>

</section>
<!--* Event End  -->
<!--* What They Said  -->
<section>

</section>
<!--* What They Said End  -->
<!--* Post  -->
<section class="bg-gradient-to-b from-blue-100">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 pt-10 pb-20 px-10">                    
        <div class="border border-2 shadow-lg shadow-lg bg-white p-5 rounded-2xl">
            <h5 class="font-medium pb-2" style="font-size: 14px; color: #FF33AB;">Artikel</h5>
            <h1 class="judul">Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu</h1>
            <h5 class="tanggal">
                <i class="fas fa-calendar"></i>
                FUNBAHASA / Januari 17, 2021
            </h5>
            <p class="font-medium pb-10" style="font-size: 14px;">Rasyid Yudhistira MATAHARI MEMBELAH TUBUHMU DAN MEREKA TAK TAHU ITU Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan dibelah? Kau tentu tahu siapa siapa yang menunggu itu.</p>
        </div>
        <div class="border border-2 shadow-lg shadow-lg bg-white p-5 rounded-2xl">
            <h5 class="font-medium pb-2" style="font-size: 14px; color: #FF33AB;">Artikel</h5>
            <h1 class="judul">Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu</h1>
            <h5 class="tanggal">
                <i class="fas fa-calendar"></i>
                FUNBAHASA / Januari 17, 2021
            </h5>
            <p class="font-medium pb-10" style="font-size: 14px;">Rasyid Yudhistira MATAHARI MEMBELAH TUBUHMU DAN MEREKA TAK TAHU ITU Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan dibelah? Kau tentu tahu siapa siapa yang menunggu itu.</p>
        </div>

        <div class="border border-2 shadow-lg shadow-lg bg-white p-5 rounded-2xl">
            <h5 class="font-medium pb-2" style="font-size: 14px; color: #FF33AB;">Artikel</h5>
            <h1 class="judul">Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu</h1>
            <h5 class="tanggal">
                <i class="fas fa-calendar"></i>
                FUNBAHASA / Januari 17, 2021
            </h5>
            <p class="font-medium pb-10" style="font-size: 14px;">Rasyid Yudhistira MATAHARI MEMBELAH TUBUHMU DAN MEREKA TAK TAHU ITU Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan dibelah? Kau tentu tahu siapa siapa yang menunggu itu.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 pt-20 pb-20 px-10">
        <div class="border border-2 shadow-lg shadow-lg bg-white p-5 rounded-2xl">
            <h5 class="font-medium pb-2" style="font-size: 14px; color: #FF33AB;">Artikel</h5>
            <h1 class="judul">Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu</h1>
            <h5 class="tanggal">
                <i class="fas fa-calendar"></i>
                FUNBAHASA / Januari 17, 2021
            </h5>
            <p class="font-medium pb-10" style="font-size: 14px;">Rasyid Yudhistira MATAHARI MEMBELAH TUBUHMU DAN MEREKA TAK TAHU ITU Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan dibelah? Kau tentu tahu siapa siapa yang menunggu itu.</p>
        </div>
        <div class="border border-2 shadow-lg shadow-lg bg-white p-5 rounded-2xl">
            <h5 class="font-medium pb-2" style="font-size: 14px; color: #FF33AB;">Artikel</h5>
            <h1 class="judul">Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu</h1>
            <h5 class="tanggal">
                <i class="fas fa-calendar"></i>
                FUNBAHASA / Januari 17, 2021
            </h5>
            <p class="font-medium pb-10" style="font-size: 14px;">Rasyid Yudhistira MATAHARI MEMBELAH TUBUHMU DAN MEREKA TAK TAHU ITU Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan dibelah? Kau tentu tahu siapa siapa yang menunggu itu.</p>
        </div>
        
        <div class="border border-2 shadow-lg shadow-lg bg-white p-5 rounded-2xl">
            <h5 class="font-medium pb-2" style="font-size: 14px; color: #FF33AB;">Artikel</h5>
            <h1 class="judul">Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu</h1>
            <h5 class="tanggal">
                <i class="fas fa-calendar"></i>
                FUNBAHASA / Januari 17, 2021
            </h5>
            <p class="font-medium pb-10" style="font-size: 14px;">Rasyid Yudhistira MATAHARI MEMBELAH TUBUHMU DAN MEREKA TAK TAHU ITU Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan dibelah? Kau tentu tahu siapa siapa yang menunggu itu.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 pt-20 pb-20 px-10">
        <div class="border border-2 shadow-lg shadow-lg bg-white p-5 rounded-2xl">
            <h5 class="font-medium pb-10" style="font-size: 14px; color: #FF33AB;">Artikel</h5>
            <h1 class="judul">Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu</h1>
            <h5 class="tanggal">
                <i class="fas fa-calendar"></i>
                FUNBAHASA / Januari 17, 2021
            </h5>
            <p class="font-medium pb-2" style="font-size: 14px;">Rasyid Yudhistira MATAHARI MEMBELAH TUBUHMU DAN MEREKA TAK TAHU ITU Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan dibelah? Kau tentu tahu siapa siapa yang menunggu itu.</p>
        </div>
        <div class="border border-2 shadow-lg shadow-lg bg-white p-5 rounded-2xl">
            <h5 class="font-medium pb-2" style="font-size: 14px; color: #FF33AB;">Artikel</h5>
            <h1 class="judul">Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu</h1>
            <h5 class="tanggal">
                <i class="fas fa-calendar"></i>
                FUNBAHASA / Januari 17, 2021
            </h5>
            <p class="font-medium pb-10" style="font-size: 14px;">Rasyid Yudhistira MATAHARI MEMBELAH TUBUHMU DAN MEREKA TAK TAHU ITU Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan dibelah? Kau tentu tahu siapa siapa yang menunggu itu.</p>
        </div>
        
        <div class="border border-2 shadow-lg shadow-lg bg-white p-5 rounded-2xl">
            <h5 class="font-medium pb-2" style="font-size: 14px; color: #FF33AB;">Artikel</h5>
            <h1 class="judul">Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu</h1>
            <h5 class="tanggal">
                <i class="fas fa-calendar"></i>
                FUNBAHASA / Januari 17, 2021
            </h5>
            <p class="font-medium pb-10" style="font-size: 14px;">Rasyid Yudhistira MATAHARI MEMBELAH TUBUHMU DAN MEREKA TAK TAHU ITU Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan dibelah? Kau tentu tahu siapa siapa yang menunggu itu.</p>
        </div>
    </div>
</section>
@endsection