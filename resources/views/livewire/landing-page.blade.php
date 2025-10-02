<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="flex justify-center flex-col font-['Poppins']">
        @include('components.navbar')
        <div class="container  mt-14 flex flex-col  w-full">
            <div class="flex flex-row w-full justify-between pl-10">
                <div class="font-['Poppins']">
                    <h1 class="font-semibold text-4xl leading-12">
                        <span class="font-semibold text-[#39C964] text-4xl">JagaRaga</span> - cek <br/>
                         Kesehatan Digital <br/>
                         Dalam Genggaman <br/>
                    </h1>
                    <p class="mt-3.5">Akses mudah, cepat, dan aman untuk menjaga kesehatan Anda</p>
                    <div class="mt-12">
                        <button class="bg-green-500 rounded-lg text-white p-3 font-semibold">Daftar Gratis</button>
                    </div>
                </div>

                <div>
                    <img src="{{ asset('images/heroSection.png') }} "  class="w-[476px] h-full" alt="">
                </div>
            </div>

            <div class="pl-10 mt-36">
                <h1 class="text-black font-semibold text-4xl">Fitur Unggulan</h1>
                <p class="text-sm mt-2 mb-8">
                    menampilkan sebuah fitur  unggulan <br/>
                    dari aplikasi  <span class="font-semibold text-[#39C964]">JagaRaga</span>
                </p>
            </div>

            <div class="flex justify-center gap-28 flex-row">
                @include('components.fitur-unggulan.kesehatanPribadi')
                @include('components.fitur-unggulan.konsultasi-kesehatan')
            </div>
            <div class="flex justify-center mt-9">
                @include('components.fitur-unggulan.informasi-edukasi')
            </div>
            <div class="flex justify-center gap-28 mt-9 mb-9">
                @include('components.fitur-unggulan.reminder')
                @include('components.fitur-unggulan.riwayat-medis')
            </div>

            <div class="flex justify-center mt-36 flex-col ">
                <h1 class="text-black font-semibold text-3xl text-center">Kenapa Memilih Jaga Raga</h1>
                <div>
                 <div class="flex justify-center mt-14 gap-6">
                    {{-- kemudahan akses --}}
                    <div class="relative group w-[351px] h-[322px] rounded-4xl overflow-hidden shadow-2xs hover:cursor-pointer">

                        <!-- Gambar -->
                        <img src="{{ asset('images/kemudahan-akses.png') }}"
                            alt="Kemudahan Akses"
                            class="w-[351px] h-[322px] object-cover">

                        <!-- Overlay Hitam Transparan -->
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-300"></div>

                        <!-- Teks -->
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white opacity-0 group-hover:opacity-100 transition duration-500 px-4">
                        <h3 class="font-semibold text-lg">Kemudahan Akses</h3>
                        <p class="text-sm mt-2">
                            Tidak perlu antre di rumah sakit, semua bisa diakses dari rumah 24/7.
                        </p>
                        </div>

                    </div>

                    <div class="relative group w-[351px] h-[322px] rounded-4xl overflow-hidden shadow-2xs hover:cursor-pointer">

                        <!-- Gambar -->
                        <img src="{{ asset('images/layanan-integrasi.png') }}"
                            alt="Kemudahan Akses"
                            class="w-[351px] h-[322px] object-cover">

                        <!-- Overlay Hitam Transparan -->
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-300"></div>

                        <!-- Teks -->
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white opacity-0 group-hover:opacity-100 transition duration-500 px-4">
                        <h3 class="font-semibold text-lg">Layanan Integrasi</h3>
                        <p class="text-sm mt-2">
                            mulai dari tracking kesehatan, konsultasi, <br/>
                            edukasi, hingga penyimpanan riwayat <br/>
                            medis. <br/>
                         </p>
                        </div>

                    </div>

                    <div class="relative group w-[351px] h-[322px] rounded-4xl overflow-hidden shadow-2xs hover:cursor-pointer">

                        <!-- Gambar -->
                        <img src="{{ asset('images/keamanan-data.png') }}"
                            alt="Kemudahan Akses"
                            class="w-[351px] h-[322px] object-cover">

                        <!-- Overlay Hitam Transparan -->
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-300"></div>

                        <!-- Teks -->
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white opacity-0 group-hover:opacity-100 transition duration-500 px-4">
                        <h3 class="font-semibold text-lg">Privasi & Keamanan Data</h3>
                        <p class="text-sm mt-2">
                            Data kesehatan Anda aman dan hanya <br/>
                            Anda yang bisa mengaksesnya. <br/>
                        </p>
                        </div>

                    </div>


                    </div>


                </div>
            </div>

            <div class="mt-32 flex flex-col items-center">
                <h1 class="font-semibold text-3xl mb-8">Testimoni Pengguna</h1>
                <div class="w-full max-w-5xl">
                    @include('components.testimoni-pengguna.testimoni-pengguna')
                </div>
            </div>



        </div>
    </div>
</body>
</html>
