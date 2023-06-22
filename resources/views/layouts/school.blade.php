<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Poppins:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/js/site.js'])
</head>
<body class="font-sans antialiased text-gray-800 dark:text-gray-200" x-data="{ darkMode: false }" x-init="if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    localStorage.setItem('darkMode', JSON.stringify(true));
}
darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" x-cloak>
<div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex flex-col"
     x-bind:class="{ 'dark': darkMode === true,filter: false }">
    <nav class="py-2 bg-white dark:bg-gray-800">
        breadcrumb
    </nav>

    <!-- Page Content -->
    <main
        class="flex-1 grid justify-items-stretch bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-200">
        {{ $slot }}
    </main>

    <!-- Page footer  -->
    <footer class="pt-8 pb-6 shadow bg-gray-100 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center text-gray-400 dark:text-gray-500">
                &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Tous les droits sont réservés.
            </div>
        </div>
    </footer>
    <!-- Page scripts -->
    @if (isset($scripts))
        {{ $scripts }}
    @endif
</div>
</body>
</html>
