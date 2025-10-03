@extends('layouts.view') 
@section('content')
    <div>
        <div class="flex justify-center flex-col font-poppins"> @include('components.navbar') <div
                class="container mt-14 flex flex-col w-full">
                <div class="flex flex-row w-full justify-between pl-10">
                    <div class="font-poppins">
                        <h1 class="font-semibold text-4xl leading-12"> <span
                                class="font-semibold text-[#39C964] text-4xl">JagaRaga</span> - cek <br /> Kesehatan Digital
                            <br /> Dalam Genggaman <br /> </h1>
                        <p class="mt-3.5">Akses mudah, cepat, dan aman untuk menjaga kesehatan Anda</p>
                        <div class="mt-12"> <button class="bg-green-500 rounded-lg text-white p-3 font-semibold">Daftar
                                Gratis</button> </div>
                    </div>
                    <div> <img src="{{ asset('images/heroSection.png') }} " class="w-[476px] h-full" alt=""> </div>
                </div>
                <div class="pl-10 mt-36">
                    <h1 class="text-black font-semibold text-4xl">Fitur Unggulan</h1>
                    <p class="text-sm mt-2 mb-8"> menampilkan sebuah fitur unggulan <br /> dari aplikasi <span
                            class="font-semibold text-[#39C964]">JagaRaga</span> </p>
                </div>
                <div class="flex justify-center gap-28 flex-row"> @include('components.fitur-unggulan.kesehatanPribadi') @include('components.fitur-unggulan.konsultasi-kesehatan')
                </div>
                <div class="flex justify-center mt-9"> @include('components.fitur-unggulan.informasi-edukasi') </div>
                <div class="flex justify-center gap-28 mt-9 mb-9"> @include('components.fitur-unggulan.reminder') @include('components.fitur-unggulan.riwayat-medis')
                </div>
                <div class="flex justify-center mt-36 flex-col ">
                    <h1 class="text-black font-semibold text-3xl text-center">Kenapa Memilih Jaga Raga</h1>
                    <div>
                        <div class="flex justify-center mt-14 gap-6"> {{-- kemudahan akses --}} <div
                                class="relative group w-[351px] h-[322px] rounded-4xl overflow-hidden shadow-2xs hover:cursor-pointer">
                                <!-- Gambar --> <img src="{{ asset('images/kemudahan-akses.png') }}" alt="Kemudahan Akses"
                                    class="w-[351px] h-[322px] object-cover"> <!-- Overlay Hitam Transparan -->
                                <div
                                    class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-300">
                                </div> <!-- Teks -->
                                <div
                                    class="absolute inset-0 flex flex-col items-center justify-center text-center text-white opacity-0 group-hover:opacity-100 transition duration-500 px-4">
                                    <h3 class="font-semibold text-lg">Kemudahan Akses</h3>
                                    <p class="text-sm mt-2"> Tidak perlu antre di rumah sakit, semua bisa diakses dari rumah
                                        24/7. </p>
                                </div>
                            </div>
                            <div
                                class="relative group w-[351px] h-[322px] rounded-4xl overflow-hidden shadow-2xs hover:cursor-pointer">
                                <!-- Gambar --> <img src="{{ asset('images/layanan-integrasi.png') }}" alt="Kemudahan Akses"
                                    class="w-[351px] h-[322px] object-cover"> <!-- Overlay Hitam Transparan -->
                                <div
                                    class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-300">
                                </div> <!-- Teks -->
                                <div
                                    class="absolute inset-0 flex flex-col items-center justify-center text-center text-white opacity-0 group-hover:opacity-100 transition duration-500 px-4">
                                    <h3 class="font-semibold text-lg">Layanan Integrasi</h3>
                                    <p class="text-sm mt-2"> mulai dari tracking kesehatan, konsultasi, <br /> edukasi,
                                        hingga penyimpanan riwayat <br /> medis. <br /> </p>
                                </div>
                            </div>
                            <div
                                class="relative group w-[351px] h-[322px] rounded-4xl overflow-hidden shadow-2xs hover:cursor-pointer">
                                <!-- Gambar --> <img src="{{ asset('images/keamanan-data.png') }}" alt="Kemudahan Akses"
                                    class="w-[351px] h-[322px] object-cover"> <!-- Overlay Hitam Transparan -->
                                <div
                                    class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-300">
                                </div> <!-- Teks -->
                                <div
                                    class="absolute inset-0 flex flex-col items-center justify-center text-center text-white opacity-0 group-hover:opacity-100 transition duration-500 px-4">
                                    <h3 class="font-semibold text-lg">Privasi & Keamanan Data</h3>
                                    <p class="text-sm mt-2"> Data kesehatan Anda aman dan hanya <br /> Anda yang bisa
                                        mengaksesnya. <br /> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-32 flex flex-col items-center">
                        <h1 class="font-semibold text-3xl mb-8">Testimoni Pengguna</h1>
                        <div class="w-full max-w-5xl"> @include('components.testimoni-pengguna.testimoni-pengguna') </div>
                    </div>
                </div>
                <div class="w-full mt-32">
                    <div class="flex w-full px-32 justify-between">
                        <div class="gap-5">
                            <h1 class="font-semibold text-3xl">Artikel & Tips Terbaru</h1>
                            <p>Info kesehatan, tips sehat, dan panduan ahli untuk hidup lebih bugar.</p>
                        </div>
                        <div>
                            <p>Dapatkan informasi kesehatan terkini, tips gaya hidup sehat</p>
                        </div>
                    </div>
                    <div class="mt-16 px-32 overflow-x-auto no-scrollbar">
                        <div class="inline-flex gap-5"> 
                            {{-- Content Slider --}} 
                            <div class="flex-shrink-0 relative border border-green-500 w-[362px] h-[415px] rounded-4xl">
                                <div class="absolute w-[360px] h-[420px] bg-green-500 rounded-4xl">
                                    <div class="absolute w-[360px] h-[410px] rounded-4xl bg-white"> <img
                                            src="/images/artikel_tips_terbaru.jpg" alt=""
                                            class="w-full h-56 rounded-4xl">
                                        <h1 class="mt-4 mb-2 mx-2 font-semibold"> 7 Cara Sederhana Menjaga Imunitas Tubuh di
                                            Musim Hujan </h1>
                                        <p class="mx-2 text-xs"> Tips praktis mulai dari pola makan, olahraga, hingga
                                            manajemen stres untuk mencegah sakit saat cuaca tidak menentu. </p>
                                    </div>
                                </div>
                            </div> 
                            
                            {{-- Content Slider --}} 
                            <div class="flex-shrink-0 relative border border-green-500 w-[362px] h-[412px] rounded-4xl">
                                <div class="absolute w-[360px] h-[420px] bg-green-500 rounded-4xl">
                                    <div class="absolute w-[360px] h-[410px] rounded-4xl bg-white"> <img
                                            src="/images/artikel_tips_terbaru.jpg" alt=""
                                            class="w-full h-56 rounded-4xl">
                                        <h1 class="mt-4 mb-2 mx-2 font-semibold"> 7 Cara Sederhana Menjaga Imunitas Tubuh di
                                            Musim Hujan </h1>
                                        <p class="mx-2 text-xs"> Tips praktis mulai dari pola makan, olahraga, hingga
                                            manajemen stres untuk mencegah sakit saat cuaca tidak menentu. </p>
                                    </div>
                                </div>
                            </div> 
                            
                            {{-- Content Slider --}} 
                            <div class="flex-shrink-0 relative border border-green-500 w-[362px] h-[412px] rounded-4xl">
                                <div class="absolute w-[360px] h-[420px] bg-green-500 rounded-4xl">
                                    <div class="absolute w-[360px] h-[410px] rounded-4xl bg-white"> <img
                                            src="/images/artikel_tips_terbaru.jpg" alt=""
                                            class="w-full h-56 rounded-4xl">
                                        <h1 class="mt-4 mb-2 mx-2 font-semibold"> 7 Cara Sederhana Menjaga Imunitas Tubuh di
                                            Musim Hujan </h1>
                                        <p class="mx-2 text-xs"> Tips praktis mulai dari pola makan, olahraga, hingga
                                            manajemen stres untuk mencegah sakit saat cuaca tidak menentu. </p>
                                    </div>
                                </div>
                            </div> 
                            
                            {{-- Content Slider --}} 
                            <div class="flex-shrink-0 relative border border-green-500 w-[362px] h-[412px] rounded-4xl">
                                <div class="absolute w-[360px] h-[420px] bg-green-500 rounded-4xl">
                                    <div class="absolute w-[360px] h-[410px] rounded-4xl bg-white"> <img
                                            src="/images/artikel_tips_terbaru.jpg" alt=""
                                            class="w-full h-56 rounded-4xl">
                                        <h1 class="mt-4 mb-2 mx-2 font-semibold"> 7 Cara Sederhana Menjaga Imunitas Tubuh di
                                            Musim Hujan </h1>
                                        <p class="mx-2 text-xs"> Tips praktis mulai dari pola makan, olahraga, hingga
                                            manajemen stres untuk mencegah sakit saat cuaca tidak menentu. </p>
                                    </div>
                                </div>
                            </div> 

                            {{-- Content Slider --}} 
                            <div class="flex-shrink-0 relative border border-green-500 w-[362px] h-[412px] rounded-4xl">
                                <div class="absolute w-[360px] h-[420px] bg-green-500 rounded-4xl">
                                    <div class="absolute w-[360px] h-[410px] rounded-4xl bg-white"> <img
                                            src="/images/artikel_tips_terbaru.jpg" alt=""
                                            class="w-full h-56 rounded-4xl">
                                        <h1 class="mt-4 mb-2 mx-2 font-semibold"> 7 Cara Sederhana Menjaga Imunitas Tubuh di
                                            Musim Hujan </h1>
                                        <p class="mx-2 text-xs"> Tips praktis mulai dari pola makan, olahraga, hingga
                                            manajemen stres untuk mencegah sakit saat cuaca tidak menentu. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center"> <!-- Title -->
                        <div class="text-center mt-36">
                            <h1 class="font-semibold text-3xl">Mulai Sehat dalam 3 Langkah Mudah</h1>
                            <p>Panduan singkat menuju hidup sehat dan bugar.</p>
                        </div>
                        <div class="w-full max-w-7xl mt-16 flex flex-col gap-24">
                            <div class="flex flex-row items-center justify-center gap-10"> <img
                                    src="{{ asset('images/gambar1.png') }}" alt="" class="w-[723] h-[406px]">
                                <div>
                                    <h1 class="font-semibold text-3xl">Daftar & Buat Akun</h1>
                                    <p> Buat akun JagaRaga hanya dalam hitungan menit. Cukup isi data <br /> dasar, dan Anda
                                        siap memulai perjalanan sehat </p>
                                    <div class="mt-10"> <button
                                            class="w-[215px] h-[74px] bg-[#39C964] text-white rounded-2xl font-semibold text-[20px]">
                                            Daftar akun </button> </div>
                                </div>
                            </div>
                            <div class="flex flex-row items-center justify-center gap-10">
                                <div>
                                    <h1 class="font-semibold text-3xl">Catat pantau kesehatan</h1>
                                    <p> Masukkan data kesehatan Anda seperti tekanan darah, <br /> gula darah, dan berat
                                        badan. Lihat progres Anda <br /> dalam bentuk grafik interaktif </p>
                                    <div class="mt-10"> <button
                                            class="w-[209px] h-[74px] bg-[#39C964] rounded-2xl text-white font-semibold">
                                            Mulai Tracking </button> </div>
                                </div> <img src="{{ asset('images/gambar2.png') }}" alt=""
                                    class="w-[723] h-[406px]">
                            </div>
                            <div class="flex flex-row items-center justify-center gap-10"> <img
                                    src="{{ asset('images/gambar3.png') }}" alt="" class="w-[723px] h-[406px]">
                                <div>
                                    <h1 class="font-semibold text-3xl">Konsultasi & Dapatkan Saran Ahli</h1>
                                    <p> Terhubung langsung dengan tenaga medis profesional <br /> untuk mendapatkan saran,
                                        diagnosis awal, atau <br /> panduan perawatan <br /> </p>
                                    <div class="mt-10 "> <button
                                            class="w-[215px] h-[74px] bg-[#39C964] text-white rounded-2xl font-semibold text-[15px] p-5 ">
                                            Konsultasi Sekarang </button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center mt-28 relative z-10">
                        <div class="bg-[#F5F5F5] w-[1292px] h-[397px] rounded-4xl shadow-lg -mb-20">
                            <div class="m-20 flex flex-row gap-14"> {{-- Teks CTA --}} <div class="flex flex-col">
                                    <h1 class="font-semibold text-3xl"> Mulai Perjalanan Sehatmu Sekarang </h1>
                                    <p class="mt-5"> Daftar dan nikmati layanan kesehatan digital dari JagaRaga, <br />
                                        dengan akses konsultasi, tips, dan pemantauan kesehatan <br /> yang bisa kamu
                                        gunakan kapan saja dan di mana saja. <br /> </p>
                                    <div class="mt-11"> <button
                                            class="w-[208px] h-[55px] bg-[#39C964] text-white rounded-2xl font-semibold text-[18px]">
                                            Daftar Sekarang </button> </div>
                                </div> {{-- Gambar CTA --}} <div> <img src="{{ asset('images/health.png') }}"
                                        alt="Health Illustration" class="w-[400px] h-[267px]"> </div>
                            </div>
                        </div>
                    </div> {{-- Footer --}} @include('components.footer')
                </div>
            </div>
        </div>
    @endsection
