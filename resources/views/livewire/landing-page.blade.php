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

        </div>
    </div>
</body>
</html>
