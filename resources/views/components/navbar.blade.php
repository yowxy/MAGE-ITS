<div class="w-full p-10 flex justify-between">
    <ul class="flex gap-4 text-black text-xl items-center font-medium">
        <li class="text-green-500 text-3xl font-semibold">JagaRaga</li>
        <li>Beranda</li>
        <li>Fitur</li>
        <li>Tentang</li>
        <li>Testimoni</li>
        <li>Artikel</li>
        <li>Panduan</li>
    </ul>
    <div class="font-semibold text-xl flex">
        <a href="{{ route('register') }}" wire:navigate class="mr-3">Sign up</a>
        <a href="{{ route('login') }}" wire:navigate
           class="bg-green-500 rounded-lg p-4 text-white h-10 w-[117px] flex items-center justify-center">
            Sign In
        </a>
    </div>
</div>
