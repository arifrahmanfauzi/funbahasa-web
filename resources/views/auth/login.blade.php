@extends('layouts.auth')
@section('content')
    
<main>
    <section class="relative w-full h-full py-40 min-h-screen">
      <div
        class="absolute top-0 w-full h-full bg-gray-900 bg-full bg-no-repeat"
        style="background-image: url(funbahasa/assets/img/register_bg_2.png);"
      ></div>
      <div class="container mx-auto px-4 h-full">
        <div class="flex content-center items-center justify-center h-full">
          <div class="w-full lg:w-4/12 px-4">
            <div
              class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0"
            >
              <div class="rounded-t mb-0 px-6 py-6">
                <div class="text-center mb-3">
                  <h6 class="text-gray-600 text-sm font-bold">
                    Sign in with
                  </h6>
                </div>
                <div class="btn-wrapper text-center">
                  <a href="{{ route('login.facebook') }}"
                    class="bg-white active:bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150"
                    type="button"
                  >
                    <img
                      alt="..."
                      class="w-5 mr-1"
                      src="{{ asset('funbahasa/assets/img/facebook.svg') }}"
                    />facebook</
                  ><a href="{{ route('login.google') }}"
                    class="bg-white active:bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150"
                    type="button"
                  >
                    <img
                      alt="..."
                      class="w-5 mr-1"
                      src="{{ asset('funbahasa/assets/img/google.svg') }}"
                    />Google
                  </a>
                </div>
                <hr class="mt-6 border-b-1 border-gray-400" />
              </div>
              <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                <div class="text-gray-500 text-center mb-3 font-bold">
                  <small>Or sign in with credentials</small>
                </div>
                @if ($errors->any())
                    @foreach ($errors->all() as $item)
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                            {{ $item }}
                        </span>
                    @endforeach
                @endif
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                  <div class="relative w-full mb-3">
                    <label
                      class="block uppercase text-gray-700 text-xs font-bold mb-2"
                      for="grid-password"
                      >Email</label
                    ><input
                      type="email"
                      class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150 border border-red-500 @error('email') @enderror"
                      placeholder="Email"
                      name="email"
                    />
                  </div>
                  <div class="relative w-full mb-3">
                    <label
                      class="block uppercase text-gray-700 text-xs font-bold mb-2"
                      for="grid-password"
                      >Password</label
                    ><input
                      type="password"
                      class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                      placeholder="Password"
                      name="password"
                    />
                  </div>
                  <div>
                    <label class="inline-flex items-center cursor-pointer"
                      ><input
                        id="customCheckLogin"
                        type="checkbox"
                        class="form-checkbox text-gray-800 ml-1 w-5 h-5 ease-linear transition-all duration-150"
                      /><span class="ml-2 text-sm font-semibold text-gray-700"
                        >Remember me</span
                      ></label
                    >
                  </div>
                  <div class="text-center mt-6">
                    <button
                      class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                      type="submit"
                    >
                      Sign In
                    </button>
                  </div>
                </form>
                <div class="flex flex-wrap mt-2">
                  <div class="w-1/2">
                    <a href="{{ route('password.request') }}" class="text-gray-700"
                      ><small>Forgot password?</small></a
                    >
                  </div>
                  <div class="w-1/2 text-right">
                    <a href="{{ route('register') }}" class="text-gray-700"
                      ><small>Create new account</small></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="absolute w-full bottom-0 bg-gray-900 pb-6">
        <div class="container mx-auto px-4">
          <hr class="mb-6 border-b-1 border-gray-700" />
          <div
            class="flex flex-wrap items-center md:justify-between justify-center"
          >
            <div class="w-full md:w-4/12 px-4">
              <div
                class="text-sm text-white font-semibold py-1 text-center md:text-left"
              >
                Copyright © <span id="get-current-year"></span>
                <a
                  href="https://www.creative-tim.com?ref=njs-login"
                  class="text-white hover:text-gray-400 text-sm font-semibold py-1"
                  >Creative Tim</a
                >
              </div>
            </div>
            <div class="w-full md:w-8/12 px-4">
              <ul
                class="flex flex-wrap list-none md:justify-end justify-center"
              >
                <li>
                  <a
                    href="https://www.creative-tim.com?ref=njs-login"
                    class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
                    >Creative Tim</a
                  >
                </li>
                <li>
                  <a
                    href="https://www.creative-tim.com/presentation?ref=njs-login"
                    class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
                    >About Us</a
                  >
                </li>
                <li>
                  <a
                    href="http://blog.creative-tim.com?ref=njs-login"
                    class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
                    >Blog</a
                  >
                </li>
                <li>
                  <a
                    href="https://github.com/creativetimofficial/notus-js/blob/master/LICENSE.md?ref=njs-login"
                    class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
                    >MIT License</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </section>
  </main>

@endsection