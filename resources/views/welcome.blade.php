<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>Livewire Workshop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-zinc-50 h-screen flex flex-col justify-center items-center">
    <h1 class="text-7xl mb-3">Livewire workshop</h1>
    <p class="text-lg text-gray-400">Gefeliciteerd! Je bent klaar om te starten met Livewire.</p>

    <ul class="mt-8 block space-y-8 text-xl text-center text-rose-400 underline">
        <li>
            <a href="https://livewire.laravel.com" target="_blank" class="">Livewire documentatie</a>
        </li>
        <li>
            <a href="https://laravel.com/docs/blade" target="_blank" class="">Laravel Blade</a>
        </li>
    </ul>
</body>
</html>
