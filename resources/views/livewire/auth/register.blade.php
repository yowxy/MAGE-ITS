@extends('layouts.view')
<body>
    <div class="flex w-full h-screen items-center">
        <div class="w-1/2 h-full flex justify-center items-center">
            <div class="w-[500px]">
                <div class="w-8 h-8 flex items-center justify-center bg-[#F2FF3F] rounded-full mb-5">
                    <img src="/images/arrow_back.svg" alt="">
                </div>
                <h1 class="font-bold text-6xl mb-5">Halo, <br> Selamat Datang</h1>
                <p class="text-gray-500 mb-8">Akses akun Anda untuk memantau kesehatan <br> dan mendapatkan rekomendasi
                    terbaik setiap hari.</p>

                <input type="text" placeholder="Nama"
                    class="w-full border border-gray-400 py-2 px-4 mb-4 rounded-lg text-black">
                <input type="text" placeholder="Email"
                    class="w-full border border-gray-400 py-2 px-4 mb-4 rounded-lg text-black">
                <input type="text" placeholder="Password"
                    class="w-full border border-gray-400 py-2 px-4 mb-6 rounded-lg text-black">

                <button class="w-32 h-10 bg-green-500 text-white font-semibold rounded-md mb-5">Daftar</button>
                <p class="text-gray-500 text-[13px]">Sudah punya akun? <a href="/login"
                        class="text-green-500">Masuk</a></p>
            </div>
        </div>

        <div class="w-1/2 h-full bg-[#004E64] flex justify-center items-center">
            <img src="/images/icon_auth.png" alt="image" width="600px" height="600px">
        </div>
    </div>
</body>
