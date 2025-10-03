@extends('layouts.view')
@section('auth')
    <div>
        <div class="flex w-full h-screen items-center">
            <div class="w-1/2 h-full flex justify-center items-center">
                <div class="w-[500px]">
                    <a class="w-8 h-8 flex items-center justify-center bg-[#F2FF3F] rounded-full mb-5" wire:navigate href="/">
                        <img src="/images/arrow_back.svg" alt="">
                    </a>
                    <h1 class="font-bold text-6xl mb-5">Halo, <br> Selamat Datang</h1>
                    <p class="text-gray-500 mb-8">Akses akun Anda untuk memantau kesehatan <br> dan mendapatkan
                        rekomendasi terbaik setiap hari.</p>
                        <form wire:submit="Login">
                        <input type="text" placeholder="Email"
                            class="w-full border border-gray-400 py-2 px-4 mb-4 rounded-lg text-black">
                            <input type="text" placeholder="Password"
                            class="w-full border border-gray-400 py-2 px-4 mb-3 rounded-lg text-black">

                            <div class="flex justify-between mb-5">
                                <div class="flex items-center">
                                    <input type="checkbox" class="mr-2 accent-green-500 w-4 h-4">
                                    <p class="text-gray-500 text-[13px]">Ingat saya</p>
                            </div>
                            <p class="text-gray-500 text-[13px]">Lupa Kata Sandi?</p>
                        </div>

                        <button class="w-32 h-10 bg-green-500 text-white font-semibold rounded-md mb-5">Masuk</button>
                        <p class="text-gray-500 text-[13px]">Belum punya akun?
                            <a wire:navigate  href="/register"class="text-green-500">Daftar</a></p>
                    </form>
                </div>
            </div>

            <div class="w-1/2 h-full bg-[#004E64] flex justify-center items-center">
                <img src="/images/icon_auth.png" alt="image" width="600px" height="600px">
            </div>
        </div>
    </div>
@endsection

