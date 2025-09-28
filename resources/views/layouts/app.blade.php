<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="antialiased bg-gray-100">
    <div class="min-h-screen flex flex-col">
        {{-- Navbar --}}
        <x-navbar />

        <div class="flex flex-1">
            {{-- Sidebar --}}
            <x-sidebar />

            {{-- Main Content --}}
            <main class="flex-1 p-6">
                {{ $slot }}
            </main>
        </div>
    </div>

    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>
