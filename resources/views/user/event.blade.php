@extends('layouts.user')
@section('content')
<section class="m-10 pt-16" style="font-family: 'Quicksand', sans-serif;">
    <div class="pb-5 min-h-full">
        <h4><a href="{{ route('beranda') }}">Home</a> > <a href="Event.html" style="color: rgba(96, 165, 250, 100);">Event</a></h4>
    </div>
</section>
<!--* Greeting  -->
<section class="flex flex-col w-full text-center pb-40">
    <!-- component -->
    <!-- Display Container (not part of component) START -->

        <div class="text-center text-9xl pb-7" style="font-family: 'Poppins', sans-serif;">
            <p>Event</p>
        </div>
        <!-- Carousel Body -->
        <div class="mx-auto relative h-96 w-3/4 md:w-7/12 lg:w-1/2 min-h-screen rounded-lg block items-center bg-gray-100 shadow-xl">
            <div class="relative w-full h-full overflow-hidden rounded-t-lg md:rounded-t-none md:rounded-l-lg shadow shadow-lg hover:shadow-2xl">
                <a href="#">
                    <img class="absolute inset-0 w-full h-full object-screen object-center" src="{{ asset('images') }}/poster.jpeg" alt="">
                </a>
            </div>
            <button class="absolute top-0 mt-64 left-0 bg-white rounded-full shadow-md h-12 w-12 text-2xl text-indigo-600 hover:text-indigo-400 focus:text-indigo-400 -ml-16 focus:outline-none focus:shadow-outline">
                <span class="block" style="transform: scale(-1);">&#x279c;</span>
            </button>
            <button class="absolute top-0 mt-64 right-0 bg-white rounded-full shadow-md h-12 w-12 text-2xl text-indigo-600 hover:text-indigo-400 focus:text-indigo-400 -mr-16 focus:outline-none focus:shadow-outline">
                <span class="block" style="transform: scale(1);">&#x279c;</span>
            </button>
        </div>

    <!-- Display Container (not part of component) END -->
</section>

<section class="px-10 p-10" style="background-image: url({{ asset('images') }}/vector_event.png); background-repeat: no-repeat; background-size: contain;">
    <div class="text-7xl pb-7" style="font-family: 'Quicksand', sans-serif;">
        <p>Lastest Event</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 lg:gap-12 pb-10" style="font-family: 'Poppins', sans-serif;">
        <div class="text-center transform bg-blue-200 shadow md:shadow-lg group hover:shadow-2xl hover:bg-blue-400 hover:scale-105 motion-reduce:transform-none" style="border-radius: 25px;">
            <div class="text-center bg-blue-200 " style="border-radius: 25px; position: relative; ">
                <img
                    src="{{ asset('images') }}/poster.jpeg" class="w-full"
                    style="border-top-right-radius: 25px; border-top-left-radius: 25px;"
                >
            </div>
            <div class="pt-2 pb-5 text-center bg-white" style="border-bottom-right-radius: 25px; border-bottom-left-radius: 25px; z-index: -1;">
                <p style="font-size: 24px;">FPPN 2020</p>
                <p class="text-blue-400" >Festival Puisi Pendek Nasional 2020</p>
            </div>
            <div class="flex justify-center py-1.5">
                <a class="flex items-center justify-center w-6 h-6 mx-2 py-4 transform hover:scale-105 motion-reduce:transform-none" href="#"><img src="{{ asset('images') }}/icon-facebook-black.png"></a>
                <a class="flex items-center justify-center w-6 h-6 mx-2 py-4 transform hover:scale-105 motion-reduce:transform-none" href="#"><img src="{{ asset('images') }}/icon-twitter-black.png"></a>
                <a class="flex items-center justify-center w-6 h-6 mx-2 py-4 transform hover:scale-105 motion-reduce:transform-none" href="#"><img src="{{ asset('images') }}/icon-instagram-black.png"></a>
                <a class="flex items-center justify-center w-6 h-6 mx-2 py-4 transform hover:scale-105 motion-reduce:transform-none" href="#"><img src="{{ asset('images') }}/icon-upload.png"></a>
            </div>
        </div>
        <div class="text-center transform bg-blue-200 shadow md:shadow-lg group hover:shadow-2xl hover:bg-blue-400 hover:scale-105 motion-reduce:transform-none" style="border-radius: 25px;">
            <div class="text-center bg-blue-200 " style="border-radius: 25px; position: relative; ">
                <img
                    src="{{ asset('images') }}/poster.jpeg" class="w-full"
                    style="border-top-right-radius: 25px; border-top-left-radius: 25px;"
                >
            </div>
            <div class="pt-2 pb-5 text-center bg-white" style="border-bottom-right-radius: 25px; border-bottom-left-radius: 25px; z-index: -1;">
                <p style="font-size: 24px;">FPPN 2020</p>
                <p class="text-blue-400" >Festival Puisi Pendek Nasional 2020</p>
            </div>
            <div class="flex justify-center py-1.5">
                <a class="flex items-center justify-center w-6 h-6 mx-2 py-4 transform hover:scale-105 motion-reduce:transform-none" href="#"><img src="{{ asset('images') }}/icon-facebook-black.png"></a>
                <a class="flex items-center justify-center w-6 h-6 mx-2 py-4 transform hover:scale-105 motion-reduce:transform-none" href="#"><img src="{{ asset('images') }}/icon-twitter-black.png"></a>
                <a class="flex items-center justify-center w-6 h-6 mx-2 py-4 transform hover:scale-105 motion-reduce:transform-none" href="#"><img src="{{ asset('images') }}/icon-instagram-black.png"></a>
                <a class="flex items-center justify-center w-6 h-6 mx-2 py-4 transform hover:scale-105 motion-reduce:transform-none" href="#"><img src="{{ asset('images') }}/icon-upload.png"></a>
            </div>
        </div>
        <div class="text-center transform bg-blue-200 shadow md:shadow-lg group hover:shadow-2xl hover:bg-blue-400 hover:scale-105 motion-reduce:transform-none" style="border-radius: 25px;">
            <div class="text-center bg-blue-200 " style="border-radius: 25px; position: relative; ">
                <img
                    src="{{ asset('images') }}/poster.jpeg" class="w-full"
                    style="border-top-right-radius: 25px; border-top-left-radius: 25px;"
                >
            </div>
            <div class="pt-2 pb-5 text-center bg-white" style="border-bottom-right-radius: 25px; border-bottom-left-radius: 25px; z-index: -1;">
                <p style="font-size: 24px;">FPPN 2020</p>
                <p class="text-blue-400" >Festival Puisi Pendek Nasional 2020</p>
            </div>
            <div class="flex justify-center py-1.5">
                <a class="flex items-center justify-center w-6 h-6 mx-2 py-4 transform hover:scale-105 motion-reduce:transform-none" href="#"><img src="{{ asset('images') }}/icon-facebook-black.png"></a>
                <a class="flex items-center justify-center w-6 h-6 mx-2 py-4 transform hover:scale-105 motion-reduce:transform-none" href="#"><img src="{{ asset('images') }}/icon-twitter-black.png"></a>
                <a class="flex items-center justify-center w-6 h-6 mx-2 py-4 transform hover:scale-105 motion-reduce:transform-none" href="#"><img src="{{ asset('images') }}/icon-instagram-black.png"></a>
                <a class="flex items-center justify-center w-6 h-6 mx-2 py-4 transform hover:scale-105 motion-reduce:transform-none" href="#"><img src="{{ asset('images') }}/icon-upload.png"></a>
            </div>
        </div>
        <div class="text-center transform bg-blue-200 shadow md:shadow-lg group hover:shadow-2xl hover:bg-blue-400 hover:scale-105 motion-reduce:transform-none" style="border-radius: 25px;">
            <div class="text-center bg-blue-200 " style="border-radius: 25px; position: relative; ">
                <img
                    src="{{ asset('images') }}/poster.jpeg" class="w-full"
                    style="border-top-right-radius: 25px; border-top-left-radius: 25px;"
                >
            </div>
            <div class="pt-2 pb-5 text-center bg-white" style="border-bottom-right-radius: 25px; border-bottom-left-radius: 25px; z-index: -1;">
                <p style="font-size: 24px;">FPPN 2020</p>
                <p class="text-blue-400" >Festival Puisi Pendek Nasional 2020</p>
            </div>
            <div class="flex justify-center py-1.5">
                <a class="flex items-center justify-center w-6 h-6 mx-2 py-4 transform hover:scale-105 motion-reduce:transform-none" href="#"><img src="{{ asset('images') }}/icon-facebook-black.png"></a>
                <a class="flex items-center justify-center w-6 h-6 mx-2 py-4 transform hover:scale-105 motion-reduce:transform-none" href="#"><img src="{{ asset('images') }}/icon-twitter-black.png"></a>
                <a class="flex items-center justify-center w-6 h-6 mx-2 py-4 transform hover:scale-105 motion-reduce:transform-none" href="#"><img src="{{ asset('images') }}/icon-instagram-black.png"></a>
                <a class="flex items-center justify-center w-6 h-6 mx-2 py-4 transform hover:scale-105 motion-reduce:transform-none" href="#"><img src="{{ asset('images') }}/icon-upload.png"></a>
            </div>
        </div>
        <div class="text-center transform bg-blue-200 shadow md:shadow-lg group hover:shadow-2xl hover:bg-blue-400 hover:scale-105 motion-reduce:transform-none" style="border-radius: 25px;">
            <div class="text-center bg-blue-200 " style="border-radius: 25px; position: relative; ">
                <img
                    src="{{ asset('images') }}/poster.jpeg" class="w-full"
                    style="border-top-right-radius: 25px; border-top-left-radius: 25px;"
                >
            </div>
            <div class="pt-2 pb-5 text-center bg-white" style="border-bottom-right-radius: 25px; border-bottom-left-radius: 25px; z-index: -1;">
                <p style="font-size: 24px;">FPPN 2020</p>
                <p class="text-blue-400" >Festival Puisi Pendek Nasional 2020</p>
            </div>
            <div class="flex justify-center py-1.5">
                <a class="flex items-center justify-center w-6 h-6 mx-2 py-4 transform hover:scale-105 motion-reduce:transform-none" href="#"><img src="{{ asset('images') }}/icon-facebook-black.png"></a>
                <a class="flex items-center justify-center w-6 h-6 mx-2 py-4 transform hover:scale-105 motion-reduce:transform-none" href="#"><img src="{{ asset('images') }}/icon-twitter-black.png"></a>
                <a class="flex items-center justify-center w-6 h-6 mx-2 py-4 transform hover:scale-105 motion-reduce:transform-none" href="#"><img src="{{ asset('images') }}/icon-instagram-black.png"></a>
                <a class="flex items-center justify-center w-6 h-6 mx-2 py-4 transform hover:scale-105 motion-reduce:transform-none" href="#"><img src="{{ asset('images') }}/icon-upload.png"></a>
            </div>
        </div>
        <div class="text-center transform bg-blue-200 shadow md:shadow-lg group hover:shadow-2xl hover:bg-blue-400 hover:scale-105 motion-reduce:transform-none" style="border-radius: 25px;">
            <div class="text-center bg-blue-200 " style="border-radius: 25px; position: relative; ">
                <img
                    src="{{ asset('images') }}/poster.jpeg" class="w-full"
                    style="border-top-right-radius: 25px; border-top-left-radius: 25px;"
                >
            </div>
            <div class="pt-2 pb-5 text-center bg-white" style="border-bottom-right-radius: 25px; border-bottom-left-radius: 25px; z-index: -1;">
                <p style="font-size: 24px;">FPPN 2020</p>
                <p class="text-blue-400" >Festival Puisi Pendek Nasional 2020</p>
            </div>
            <div class="flex justify-center py-1.5">
                <a class="flex items-center justify-center w-6 h-6 mx-2 py-4 transform hover:scale-105 motion-reduce:transform-none" href="#"><img src="{{ asset('images') }}/icon-facebook-black.png"></a>
                <a class="flex items-center justify-center w-6 h-6 mx-2 py-4 transform hover:scale-105 motion-reduce:transform-none" href="#"><img src="{{ asset('images') }}/icon-twitter-black.png"></a>
                <a class="flex items-center justify-center w-6 h-6 mx-2 py-4 transform hover:scale-105 motion-reduce:transform-none" href="#"><img src="{{ asset('images') }}/icon-instagram-black.png"></a>
                <a class="flex items-center justify-center w-6 h-6 mx-2 py-4 transform hover:scale-105 motion-reduce:transform-none" href="#"><img src="{{ asset('images') }}/icon-upload.png"></a>
            </div>
        </div>
    </div>
    <div class="pb-10" style="font-family: 'Poppins', sans-serif;">
        <ul class="flex justify-center">
            <li class="mx-3 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-blue-500 hover:text-white rounded-lg">
                <a class="font-bold" href="#">1</a>
            </li>
            <li class="mx-3 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-blue-500 hover:text-white rounded-lg">
                <a class="font-bold" href="#">2</a>
            </li>
            <li class="mx-3 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-blue-500 hover:text-white rounded-lg">
                <a class="font-bold" href="#">3</a>
            </li>
            <li class="mx-3 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-blue-500 hover:text-white rounded-lg">
                <a class="flex items-center font-bold" href="#">
                    <span class="mx-3">Next</span>
                </a>
            </li>
        </ul>
    </div>
</section>
<!--* Post End -->
@endsection
