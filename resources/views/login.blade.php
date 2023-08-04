@extends('layout.homepage')

@section('content')

<section class="bg-gray-100 dark:bg-gray-900">
    {{-- Login Page --}}
    @if(session()->has('success'))
    <div role="alert">
        {{ session('success') }}
        <button type="button"></button>
    </div>
    @endif

    @if(session()->has('loginError'))
    <div role="alert">
        {{ session('loginError') }}
        <button type="button"></button>
    </div>
    @endif

    <div data-aos="zoom-out-up" class="flex flex-col items-center justify-center px-6 py-6 mx-auto md:h-screen lg:py-0 dark:bg-gray-800 " >
        <div class="w-full bg-white rounded-lg shadow-lg shadow-gray-900 dark:shadow-yellow-100 dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-600">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8 dark:bg-gray-900 dark:border-gray-600"">
                <a href="#" id="logo-login" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    <img class="w-12 h-12 mb-2" src="{{ asset('logo/logo IM-09.png') }}" alt="logo">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Sign in to your account
                    </h1>
                </a>
                <form class="space-y-4 md:space-y-6" action="{{ route('login-page') }}" method="POST">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" value="{{ old('email') }}" @error('email') is-invalid @enderror autofocus required>
                        @error('email')
                        <div>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>
                    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="submit" class=" w-full text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Login</button>
                </form>
            </div>
        </div>
    </div>

    <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <img src="{{ asset('img/maintenance.png') }}" alt="maintenance" class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400 uppercase">Mohon Maaf Page Dalam Masa Pengembangan</h3>
                </div>
            </div>
        </div>
    </div>
</section>

    {{-- <h1>masukkan code untuk login, front end</h1>


    <form action="{{ route('login-page') }}" method="POST">
        @csrf
        <div>
            <h1>Login</h1>
        </div>

        <!-- Email input -->
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" value="{{ old('email') }}" @error('email') is-invalid @enderror autofocus required>
            @error('email')
            <div>
                {{ $message }}
            </div>
            @enderror
        </div>

        <!-- Password input -->
        <div>
            <label for="email">Password</label>
            <input type="password" name="password" required>
        </div>

        <!-- Submit button -->
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</section> --}}

@endsection
