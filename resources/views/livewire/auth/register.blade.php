@extends('layouts.view')
@section('auth')
<div class="min-h-screen flex flex-col md:flex-row">
    <div class="w-full md:w-1/2 flex justify-center items-start md:items-center p-5 md:p-8">
        <div class="w-full max-w-[500px] mt-20 md:mt-0">
            <a class="w-8 h-8 flex items-center justify-center bg-[#F2FF3F] rounded-full mb-5 hover:bg-[#e5ee3a] transition-colors" wire:navigate href="/">
                <img src="/images/arrow_back.svg" alt="Kembali">
            </a>

            <h1 class="font-semibold md:font-bold text-4xl md:text-6xl mb-5">Halo, <br> Selamat Datang</h1>

            <p class="text-gray-500 mb-8">
                Daftarkan akun Anda untuk memantau kesehatan dan mendapatkan rekomendasi terbaik setiap hari.
            </p>

            <form wire:submit="register">
                <div class="mb-4">
                    <input type="text" placeholder="Nama"
                        class="w-full border border-gray-400 py-3 px-4 rounded-lg text-black focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all"
                        wire:model="name">
                    @error('name')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <input type="email" placeholder="Email"
                        class="w-full border border-gray-400 py-3 px-4 rounded-lg text-black focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all"
                        wire:model="email">
                    @error('email')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <input type="password" placeholder="Password"
                        class="w-full border border-gray-400 py-3 px-4 rounded-lg text-black focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all"
                        wire:model="password">
                    @error('password')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit"
                    class="w-[146px] md:w-32 h-12 bg-green-500 text-white font-semibold rounded-md mb-5 hover:bg-green-600 transition-colors focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                    Daftar
                </button>
                <p class="text-gray-500 text-sm text-left md:text-left">
                    Sudah punya akun?
                    <a wire:navigate href="/login" class="text-green-500 hover:text-green-600 transition-colors ml-1">
                        Masuk
                    </a>
                </p>
            </form>
        </div>
    </div>

    <!-- Bagian Gambar (Desktop Only) -->
    <div class="hidden md:flex w-1/2 bg-[#004E64] justify-center items-center p-8">
        <div class="max-w-full">
            <img src="/images/icon_auth.png" alt="Ilustrasi Kesehatan" class="w-full h-auto max-w-[600px] max-h-[600px] object-contain">
        </div>
    </div>
</div>
@endsection
