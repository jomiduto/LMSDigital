<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LMS Digital - @yield('title')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <header class="p-5 border-b bg-white shadow">
        <div class="mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black">LMS Digital</h1>
        </div>
    </header>
    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10">@yield('titulo')</h2>
        @yield('contenido')
    </main>
    <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
        LMD Digital - Todos los derechos reservados {{ now()->year }}
    </footer>
</body>
</html>