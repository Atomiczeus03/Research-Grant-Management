<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <!-- Background Styling -->
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0"
             style="background-image: url('https://static.vecteezy.com/system/resources/previews/004/256/686/non_2x/abstract-dark-pink-gradient-geometric-background-modern-background-design-wave-liquid-shapes-composition-creative-templates-fit-for-presentation-design-website-basis-for-banners-wallpapers-free-vector.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white/80 dark:bg-gray-800/90 shadow-md overflow-hidden sm:rounded-lg backdrop-blur-md">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
